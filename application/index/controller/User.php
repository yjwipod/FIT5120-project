<?php

namespace app\index\controller;


use core\db\index\model\FoodModel;
use core\db\index\model\PlanModel;
use core\db\manage\model\MemberUserModel;
use think\captcha\Captcha;
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

    public function getpoints()
    {

        return json(['code' => '22']);

    }

    public function foods()
    {
//        $list = FoodModel::getSingleton()->order('foodId desc')->select();
//        $this->assign('list', $list);

        $menu_model = new FoodModel();
        $lists = $menu_model::paginate(10);
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
            $map['userId'] = $this->user_id;
            if (PlanModel::getSingleton()->save($s_data,$map)) {
                return json(['code' => 20, 'msg' => 'success']);
            } else {
                return json(['code' => 10, 'msg' => 'error']);
            }
        }
    }

}