<?php

namespace app\index\controller;


use core\db\index\model\EatplanModel;
use core\db\index\model\FoodModel;
use core\db\index\model\PlanModel;
use core\db\index\model\PointLogModel;
use core\db\manage\model\MemberUserModel;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use think\captcha\Captcha;
use think\Db;
use think\facade\Cache;
use think\facade\Cookie;
use think\facade\Session;

class User extends Base
{
    protected $healthyLevel = array(
        '1' => 'Unhealthiest',
        '2' => 'Unhealthy',
        '3' => 'Healthy',
        '4' => 'Healthiest',
    );

    public function initialize()
    {
        parent::initialize();
        $this->assign('healthyLevel', $this->healthyLevel);

    }

    public function index()
    {
        if($this->request->param('id') == 0){
            return redirect('/login');
        }
        $list = PlanModel::getSingleton()->where(['userId' => Session::get('user_id')])->select();
//        print_r(count($list));
        $this->assign('list', $list);
        return $this->fetch();
    }

    public function test()
    {
//        $list = PlanModel::getSingleton()->where(['userId'=>Session::get('user_id')])->select();
////        print_r(count($list));
//        $this->assign('list',$list);
        return $this->fetch();
    }

    public function getpoints($points, $type, $is_frist = 0)
    {
        $data['point'] = $points;
        $data['type'] = $type;
        $data['is_frist'] = $is_frist;
        $data['userId'] = $this->user_id;
        $data['createtime'] = time();
        if (PointLogModel::getSingleton()->save($data)) {
            MemberUserModel::getSingleton()->where(['id' => $this->user_id])->setInc('point', $points);
        }
//        return json(['code' => '22']);
    }

    public function ajaxGetpoints()
    {
        if ($this->request->isAjax()) {

            $data['point'] = $this->request->param('points');
            $data['type'] = 0;
            $data['is_frist'] = 0;
            $data['userId'] = $this->user_id;
            $data['createtime'] = time();
            if (Cache::get('ranktime_' . $this->user_id) < 7) {
                if (PointLogModel::getSingleton()->save($data)) {
                    MemberUserModel::getSingleton()->where(['id' => $this->user_id])->setInc('point', $this->request->param('points'));
                }
            }

        }

    }

    public function foods()
    {
//        $list = FoodModel::getSingleton()->order('foodId desc')->select();
//        $this->assign('list', $list);

        $menu_model = new FoodModel();
        $lists = $menu_model::paginate(13);
        $page = $lists->render();
        $this->assign('lists', $lists);
        $this->assign('page', $page);


        return $this->fetch();
    }

    public function food_manage()
    {
        if ($this->request->post()) {
            $data = $this->request->post();
            $data['time'] = time();
            if ($_FILES['file']['error'] != 4)
                $data['picpath'] = $this->uploadImage();

            if (!empty($data['foodId'])) {
                if (FoodModel::getSingleton()->save($data, ['foodId' => $data])) {
                    return $this->success('Update Success', 'index/user/foods');
                } else {
                    return $this->error('Update error', 'index/user/food_manage');
                }
            } else {
                if (FoodModel::getSingleton()->save($data)) {
                    return $this->success('Save Success', 'index/user/foods');
                } else {
                    return $this->error('Save error', 'index/user/food_manage');
                }
            }
//            print_r($this->request->post());
        }
        if ($this->request->isGet()) {
            $food_id = $this->request->param('foodId');
            if ($food_id) {
                $food_info = FoodModel::getSingleton()->where(['foodId' => $food_id])->find();
            } else {
                $food_info['healthyLevel'] = 0;
            }
            $this->assign('info', $food_info);
        }
        return $this->fetch();
    }

    public function food_del()
    {
        $id = $this->request->param('foodId');
        if (FoodModel::getSingleton()->where(['foodId' => $id])->delete()) {
            return $this->success('Del Success');
        } else {
            return $this->error('Del Error');
        }
    }

    public function uploadImage()
    {
        if ((($_FILES["file"]["type"] == "image/gif")
                || ($_FILES["file"]["type"] == "image/jpeg")
                || ($_FILES["file"]["type"] == "image/png")
                || ($_FILES["file"]["type"] == "image/pjpeg"))
            && ($_FILES["file"]["size"] < 20000000)) {
            if ($_FILES["file"]["error"] > 0) {
//                echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
                return $this->error($_FILES["file"]["error"]);
            } else {
//                echo "Upload: " . $_FILES["file"]["name"] . "<br />";
//                echo "Type: " . $_FILES["file"]["type"] . "<br />";
//                echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
//                echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

                if (file_exists("upload/" . $_FILES["file"]["name"])) {
//                    echo $_FILES["file"]["name"] . " already exists. ";
                    return $this->error($_FILES["file"]["name"] . " already exists. ");
                } else {
                    move_uploaded_file($_FILES["file"]["tmp_name"],
                        "upload/" . $_FILES["file"]["name"]);
//                    echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
                    return "upload/" . $_FILES["file"]["name"];
                }
            }
        } else {
//            echo "Invalid file";
            return $this->error("Invalid file");
        }
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
                return json(['status' => 1, 'msg' => "login seccess"]);
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
                return json(['status' => 1, 'msg' => "reg success"]);
            } else {
                return json(['status' => 0, 'msg' => "reg error"]);
            }
        }
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


    public function addplan()
    {
        if ($this->request->isAjax()) {
            $data = $this->request->param();
            list($startTime, $endTime) = explode('-', $data['time']);
            $time = date('Y-m-d', time());
            $data['startTime'] = $startTime;
            $data['endTime'] = $endTime;
            $data['userId'] = $this->user_id;
            $data['date'] = $time;
            unset($data['time']);
            $info = PlanModel::getSingleton()->where($data)->find();
            if ($info) {
                return json(['code' => 30, 'msg' => 'Already exist']);
            }
            if (PlanModel::getSingleton()->save($data)) {

                return json(['code' => 20, 'msg' => 'success']);
            } else {
                return json(['code' => 10, 'msg' => 'error']);
            }
        }
    }

    public function plan_handle()
    {
        if ($this->request->isAjax()) {
            $data = $this->request->param();
            $s_data['status'] = $data['status'];
            $map['planId'] = $data['planId'];
            $s_data['createtime'] = time();
            $map['userId'] = $this->user_id;
            if (PlanModel::getSingleton()->save($s_data, $map)) {
                if ($data['status'] == 2) {
                    $this->getpoints(10, 1);
                }
                return json(['code' => 20, 'msg' => 'success']);
            } else {
                return json(['code' => 10, 'msg' => 'error']);
            }
        }
    }

    public function plan_eat()
    {
        if ($this->request->isAjax()) {
            $data = $this->request->param();
            $s_data['foodId'] = $data['strid'];
            $s_data['userId'] = $this->user_id;

            $startime = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
            $endtime = mktime(0, 0, 0, date('m'), date('d') + 1, date('Y')) - 1;
            $res = Db::table('user_eat')
                ->where('userId', 'eq', $this->user_id)
//                ->where('is_frist', 'eq', 1)
                ->where(function ($query) use ($startime, $endtime) {
                    $query->where('createtime', ['<', $endtime], ['>', $startime], 'and');
                })
                ->find();

            $s_data['createtime'] = time();
            if (EatplanModel::getSingleton()->save($s_data)) {
                $points = count(explode(',', $data['strid'])) == 1 ? 5 : 10;
//                Cache::rm('ranktime_' . $this->user_id);
                if (is_array($res) && !empty($res)) {
                    return json(['code' => 20, 'msg' => 'success', 'data' => '1']); //已有
                } else {
                    $this->getpoints($points, 0, 1);
                    return json(['code' => 20, 'msg' => 'success', 'data' => '0']);
                }
            } else {
                return json(['code' => 10, 'msg' => 'error']);
            }
        }
    }

    public function foodRankTest()
    {
        $sign = 'ranktime_' . $this->user_id;
//        if (Cache::get($sign) != 6) {
//            return redirect(url('/health'));
//        }
//        $foodlist = FoodModel::getSingleton()->where('healthyLevel','in', [3,4])->select();
//        $this->assign('list',$foodlist);

        $y_foodlist = FoodModel::getSingleton()->where('healthyLevel', 'eq', 4)->select();
        $this->assign('y_list', $y_foodlist);

        $l_foodlist = FoodModel::getSingleton()->where('healthyLevel', 'eq', 3)->select();
        $this->assign('l_list', $l_foodlist);
        return $this->fetch();
    }


    public function point_logs()
    {
        $user_id = $this->request->param('user_id');
        if ($user_id) {
//            $list = PointLogModel::getSingleton()->where(['userId'=>$user_id])->select();
//            $this->assign('lists',$list);

            $lists = Db::name('point_log')->where(['userId' => $user_id])->paginate(10);

            $page = $lists->render();
            $this->assign('lists', $lists);
            $this->assign('page', $page);
        }
        return $this->fetch();
    }

    public function sendEmail($user)
    {
        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            //Server settings
            $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.qq.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = '120025737@qq.com';                 // SMTP username
            $mail->Password = 'Huang89814!!qy';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('120025737@qq.com', 'kris wong');
            $mail->addAddress('kris7i@outlook.com', 'kris wong send');     // Add a recipient
//            $mail->addAddress('120025737@qq.com');               // Name is optional
//            $mail->addReplyTo('120025737@qq.com', 'Information');
//            $mail->addCC('120025737@qq.com');
//            $mail->addBCC('120025737@qq.com');

            //Attachments
//            $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//            $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Here is the subject';
            $mail->Body = 'This is the HTML message body <b>in bold!</b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    }

}