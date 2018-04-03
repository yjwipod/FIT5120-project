<?php

namespace app\index\controller;


use core\db\manage\model\MemberUserModel;
use think\captcha\Captcha;
use think\facade\Cookie;
use think\facade\Session;

class User extends Base
{

    public function initialize()
    {
        parent::initialize();

    }

    public function index()
    {
        return $this->fetch();
    }

    public function getpoints()
    {

        return json(['code'=>'22']);

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



}