<?php

namespace app\index\controller;


use core\db\manage\model\MemberUserModel;
use think\captcha\Captcha;
use think\Db;
use think\facade\Cookie;
use think\facade\Session;
use cms\facade\Response;
use YahooWeather\Weather\AnonyControllerYahooWeather;

class Index extends Base
{

    public function initialize()
    {
        parent::initialize();

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

    public function go_trip(){

        return $this->fetch();
    }
    public function login(){
        if(Session::get('user_id')){
            return redirect(url('index/index/user'));
        }
        if($this->request->isAjax()){
            $captcha = new Captcha();
            $data = $this->request->param();
            if (!$captcha->check($data['imgcode'])) {
                return json(['status' => 0, 'msg' => 'verify code  not right']);
            }
            $map = [
                'user_name'=>$data['account'],
                'user_password'=>md5($data['password']),
            ];
            $res = MemberUserModel::getSingleton()->where($map)->find();
            if ($res != false) {
                $_data = ['login_time'=>time()];
                MemberUserModel::getSingleton()->save(['login_time'=>time()],$map);
                Session::set('user_info', $res);
                Session::set('user_id', $res->id);
                Cookie::set('user_id', 'value', $res->id);
                return json(['status' => 1, 'msg' => "login seccess"]);
            } else {
                return json(['status' => 0, 'msg' => "login error"]);
            }
        }
        return $this->fetch();
    }
    public function reg(){

        if($this->request->isAjax()){

            $captcha = new Captcha();
            $data = $this->request->param();
            if (!$captcha->check($data['imgcode'])) {
                return json(['status' => 0, 'msg' => 'verify code  not right']);
            }
            $_data= [
                'user_name'=>$data['account'],
                'email'=>$data['email'],
                'sex'=>$data['sex'],
                'user_password'=>md5($data['password']),
                'create_time'=>time(),
                'login_time'=>time(),
            ];
            $res = MemberUserModel::getSingleton()->save($_data);

            if ($res != false) {
                $res = MemberUserModel::getSingleton()->where(['user_name'=>$data['account'] ,'user_password'=>md5($data['password']) ])->find();
                Session::set('user_info', $res);
                Session::set('user_id', $res->id);
                Cookie::set('user_id', 'value', $res->id);
                return json(['status' => 1, 'msg' => "reg success"]);
            } else {
                return json(['status' => 0, 'msg' => "reg error"]);
            }
        }
        return $this->fetch();
    }
    public function health(){
        $res = [];
        $one = Db::name("foodspic")->limit(1)->order('rand()')->find();
        $one['top'] = 100+rand(10,250);
        $res[] = $one;
        for ($i= 1 ;$i <= 4 ; $i++){
            $res[$i] = $this->getDiffData($res);
        }
//        echo "<pre>";
//        print_r($res);
        $this->assign('list',$res);
        return $this->fetch();
    }

    public function getDiffData($arr){
        if(!is_array($arr) && empty($arr)){
            return false;
        }else{
            $matchid = [];
            foreach ($arr as $vo){
                $matchid[] = $vo['matchid'];
            }
            $rs =  Db::name("foodspic")->limit(1)->where('matchid','not in' , $matchid)->order('rand()')->find();
            $rs['top'] = 100+rand(10,250);
            return $rs ;
        }
    }

    public function getWeather(){
        $data = $this->request->param();
//        print_r($data);
        return json(["data"=>AnonyControllerYahooWeather::Country($data['keyword'],$data['lang']),'num'=>$data['num']]);
    }

    public  function user(){
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


    public function  logout(){
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
}