<?php

namespace app\index\service;


use core\base\Service;
use core\db\index\model\PointLogModel;
use think\facade\Cache;

class CommonService extends Service
{
    public function Rw_Json($status, $code, $message)
    {
        $arr = ['status' => $status, 'code' => $code, 'message' => $message];
        return json($arr);
    }

    public function web_info()
    {
        if (!Cache::get('web_info')) {
            $web_info = WebSetService::getSingleton()->getWebset(['web_logo', 'copyright', 'web_name', 'web_title', 'web_desc', 'web_keywords', 'web_hot_line', 'web_kefu_line', 'web_address', 'web_qrcode']);
            Cache::set('web_info', $web_info, 3600);
            return $web_info;
        } else {
            return Cache::get('web_info');
        }
    }

    public function ranktime($user_id)
    {

        if ($user_id) {
            $sign = 'ranktime_' . $user_id;

            $t = time();
            $start = mktime(0,0,0,date("m",$t),date("d",$t),date("Y",$t));
            $end = mktime(23,59,59,date("m",$t),date("d",$t),date("Y",$t));
            $map['type'] = 0;
            $map['userId'] = $user_id;
            $map['is_frist'] = 1;

            $check_is_frist = PointLogModel::getSingleton()->where($map)->whereTime('createtime','between',[$start,$end])->find();

            if (Cache::get($sign) == 6 && empty($check_is_frist)) {

                $num = Cache::get($sign) + 1;
                Cache::set($sign, $num, 86400);
                return 3;
                exit();
            }
            if (false === Cache::get($sign)) {
                $num = 1;
                Cache::set($sign, $num, 86400);
            } else {
                $num = intval(Cache::get($sign)) + 1;
                Cache::set($sign, $num, 86400);
            }
            return 1;

        } else {
            return false;
        }
    }

}
