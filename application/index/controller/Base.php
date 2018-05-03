<?php

namespace app\index\controller;


use core\db\index\model\MemberUserModel;
use think\Controller;
use think\facade\Env;
use think\facade\Session;
use think\facade\Url;

class Base extends Controller
{
    public $user_id = 0;
    public $user_info = '';
    public $level = 0;

    public function initialize()
    {
        $siteInfo = [
            'site_title' => '',
            'site_keyword' => '',
            'site_description' => '',
            'health_url' => Url::build('index/index/health'),
            'login_url' => Url::build('index/index/login'),
            'reg_url' => Url::build('index/index/reg'),
            'go_trip_url' => Url::build('index/index/go_trip'),
            'logout_url' => Url::build('index/index/logout'),
        ];
        $this->user_id = Session::get('user_id') == "" ? "0" : Session::get('user_id');
        //Session::get('user_info') == "" ? "" : Session::get('user_info');
        $this->user_info = MemberUserModel::getSingleton()->where(['id'=>$this->user_id])->find();
        $this->assign('site_info', $siteInfo);
//        echo $this->request->action();
        $this->assign('user_id', $this->user_id);
        $this->assign('user_info', $this->user_info);
        $this->assign('domain_url', Env::get('BASE_URL'));
        $this->assign('action', $this->request->action()); //存储用户信息

        $this->assign('controller', $this->request->controller()); //存储用户信息
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see Controller::beforeViewRender()
     */
    protected function beforeViewRender()
    {
        $siteVersion = date('Ymd');
        $this->assign('site_version', $siteVersion);

        $staticPath = '/static';
        $this->assign('static_path', $staticPath);

        $assetsPath = '/assets';
        $this->assign('assets_path', $assetsPath);

        parent::beforeViewRender();
    }



}


