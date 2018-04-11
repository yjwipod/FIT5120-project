<?php

namespace app\index\controller;


use app\index\service\CommonService;
use cms\facade\Response;
use core\db\index\model\PlanModel;
use core\db\manage\model\MemberUserModel;
use joshtronic\GooglePlaces;
use SKAgarwal\GoogleApi\PlacesApi;
use think\captcha\Captcha;
use think\Db;
use think\facade\Cookie;
use think\facade\Session;
use YahooWeather\Weather\AnonyControllerYahooWeather;

class Index extends Base
{

    protected $healthyLevel = array(
        '1' => 'imgUnhest',
        '2' => 'imgUnh',
        '3' => 'imgHeal',
        '4' => 'imgHest',
    );

    public function initialize()
    {

        parent::initialize();
        $this->assign('healthyLevel', $this->healthyLevel);

    }


    /**
     * 首页
     *
     * @return string
     */
    public function index()
    {

//        $aa = AnonyControllerYahooWeather::Country('Holiday Inn Old Sydney','ar');
//        print_r($aa);
        return $this->fetch();
    }

    public function test()
    {


        $googlePlaces = new PlacesApi('AIzaSyAJ1a6pBb8VCtQ80jZcPOoaDvEFZ8VXD-s');
        $response = $googlePlaces->placeAutocomplete('kid park');
        echo "<pre>";
        print_r($response);
    }


    public function go_trip()
    {
        $this->assign('hastrip', 0);
        $this->assign('ltime', 0);
        $this->assign('trip_info', ['planId' => '']);
        $data['userId'] = $this->user_id;
        $data['status'] = 0;
        $data['date'] = date('Y-m-d', time());
        $trip_info = PlanModel::getSingleton()->where($data)->find();

        if ($trip_info) {
            $trip_info['date'] . '' . $trip_info['startTime'];
            $time1 = strtotime($trip_info['date'] . ' ' . $trip_info['startTime'] . ":00");
            $time2 = time();
            $time3 = $time1 - $time2;
            $this->assign('ltime', $this->secToTime($time3));
            $this->assign('hastrip', 1);
            $this->assign('trip_info', $trip_info);
        }

        return $this->fetch();
    }

    public function login()
    {
        if (Session::get('user_id')) {
            return redirect(url('index/index/user'));
        }
        if ($this->request->isAjax()) {
            $captcha = new Captcha();
            $data = $this->request->param();
            if (!$captcha->check($data['imgcode'])) {
                return json(['status' => 0, 'msg' => 'verify code  not right']);
            }
            $map = [
                'user_name' => $data['account'],
                'user_password' => md5($data['password']),
            ];
            $res = MemberUserModel::getSingleton()->where($map)->find();
            if ($res != false) {
                $_data = ['login_time' => time()];
                MemberUserModel::getSingleton()->save(['login_time' => time()], $map);
                Session::set('user_info', $res);
                Session::set('user_id', $res->id);
                Cookie::set('user_id', 'value', $res->id);
                return json(['status' => 1, 'msg' => "login seccess", 'user_id' => $res->id]);
            } else {
                return json(['status' => 0, 'msg' => "login error"]);
            }
        }
        return $this->fetch();
    }

    public function reg()
    {

        if ($this->request->isAjax()) {

            $captcha = new Captcha();
            $data = $this->request->param();
            if (!$captcha->check($data['imgcode'])) {
                return json(['status' => 0, 'msg' => 'verify code  not right']);
            }
            $_data = [
                'user_name' => $data['account'],
                'email' => $data['email'],
                'sex' => $data['sex'],
                'user_password' => md5($data['password']),
                'create_time' => time(),
                'login_time' => time(),
            ];
            $res = MemberUserModel::getSingleton()->save($_data);

            if ($res != false) {
                $res = MemberUserModel::getSingleton()->where(['user_name' => $data['account'], 'user_password' => md5($data['password'])])->find();
                Session::set('user_info', $res);
                Session::set('user_id', $res->id);
                Cookie::set('user_id', 'value', $res->id);
                return json(['status' => 1, 'msg' => "reg success", 'user_id' => $res->id]);
            } else {
                return json(['status' => 0, 'msg' => "reg error"]);
            }
        }
        return $this->fetch();
    }

    public function health()
    {
        if ($this->user_id != 0) {
            $rs = CommonService::getSingleton()->ranktime($this->user_id);
            if ($rs == 3) {
                $this->success('Jump to Test', 'index/user/foodRankTest');
            }
//            $this->ranktime($this->user_id);
        }
        $res = [];
        $one = Db::name("food")->limit(1)->order('rand()')->find();
        $one['top'] = 180 + rand(10, 200);
        $res[] = $one;
        for ($i = 1; $i <= 3; $i++) {
            $res[$i] = $this->getDiffData($res);
        }

        $this->assign('list', $res);
        return $this->fetch();
    }

    public function getDiffData($arr)
    {
        if (!is_array($arr) && empty($arr)) {
            return false;
        } else {
            $matchid = [];
            foreach ($arr as $vo) {
                $matchid[] = $vo['healthyLevel'];
            }
            $rs = Db::name("food")->limit(1)->where('healthyLevel', 'not in', $matchid)->order('rand()')->find();
            $rs['top'] = 180 + rand(10, 200);
            return $rs;
        }
    }

    public function getWeather()
    {
        $data = $this->request->param();
        $_data = AnonyControllerYahooWeather::Country($data['keyword'], $data['lang']);
        $text = nl2br($_data['description']);
        $textArr = explode("<br />", $text);
        $cur_weather = htmlspecialchars($textArr[3]);

        return json(["data" => AnonyControllerYahooWeather::Country($data['keyword'], $data['lang']), 'num' => $data['num'], 'weather' => $cur_weather]);
    }

    public function user()
    {
//        print_r( Session::get('user_info'));

        return $this->fetch();
    }

    public function verify()
    {
        $config = [
            'imageH' => 40,
            // 验证码字体大小
            'fontSize' => 16,
            // 验证码位数
            'length' => 4,
            // 关闭验证码杂点
            'useNoise' => false,
        ];
        $captcha = new Captcha($config);
        return $captcha->entry();
    }


    public function logout()
    {
        Session::delete('user_id');
        Session::delete('user_info');
        Cookie::delete('user_id');
        return redirect(url('/index'));
    }


    /**
     * 下载
     *
     * @return void
     */
    public function download()
    {
        $downloadUrl = 'http://static.newday.me/cms/1.0.0.zip';
        Response::getSingleton()->redirect($downloadUrl, false);
    }

    function secToTime($times)
    {
        $result = '00:00:00';
        if ($times > 0) {
            $hour = floor($times / 3600);
            $minute = floor(($times - 3600 * $hour) / 60);
            $second = floor((($times - 3600 * $hour) - 60 * $minute) % 60);
//            $result = $hour . ':' . $minute . ':' . $second;
            $result = $hour . ' hours ' . $minute . ' minutes';
        }
        return $result;
    }

    public function home()
    {
        return $this->fetch();
    }

}