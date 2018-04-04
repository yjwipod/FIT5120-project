<?php /*a:5:{s:78:"D:\phpStudy\PHPTutorial\WWW\childHealth\application/index/view\user\index.html";i:1522745601;s:79:"D:\phpStudy\PHPTutorial\WWW\childHealth\application/index/view\layout\base.html";i:1522821598;s:80:"D:\phpStudy\PHPTutorial\WWW\childHealth\application/index/view\layout\toper.html";i:1522822083;s:81:"D:\phpStudy\PHPTutorial\WWW\childHealth\application/index/view\layout\header.html";i:1522820695;s:81:"D:\phpStudy\PHPTutorial\WWW\childHealth\application/index/view\layout\footer.html";i:1522815622;}*/ ?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
<title><?php echo htmlentities($site_info['site_title']); ?></title>
<meta content="<?php echo htmlentities($site_info['site_keyword']); ?>" name="keywords"/>
<meta content="<?php echo htmlentities($site_info['site_description']); ?>" name="description"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp"/>
<link href="/assets/css/amazeui.css" rel="stylesheet">
<link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
<link href="/assets/css/base.css" rel="stylesheet">

    
<style>
    @charset "utf-8";
    .nolsy{ list-style:none;}

    .br_lf{ border-left:1px solid #e5e5e5;}
    .br_rg{ border-right:1px solid #e5e5e5;}
    .br_bt{ border-bottom:1px solid #e5e5e5;}
    .br_tp{border-top: 1px solid #e5e5e5;}

    .br_lf_g{border-left:2px solid #058CEB;}
    .br_rg_g{ border-right:2px solid #058CEB;}
    .br_bt_g{ border-bottom:2px solid #058CEB;}
    .br_tp_g{border-top: 2px solid #058CEB;}

    .br_lf_w{border-left:2px solid #fff;}
    .br_rg_w{ border-right:2px solid #fff;}
    .br_bt_w{ border-bottom:2px solid #fff;}
    .br_tp_w{border-top: 2px solid #fff;}

    .no_br{border:0;}
    .no_bold{font-weight:normal;}

    .bg_orange{ background: #ffa200;}
    .bg_green{background:#058CEB;}
    .bg_grey{background:#f1f1f1;}

    .font_black{color:#333;}
    .font_orange{color:#ffa200;}
    .font_green{color:#0e90d2;}
    .font_grey{color:#959595;}
    .font_white{color:#fff;}

    .font_bold{font-weight: bold;}
    .font_normal{ font-weight: normal;}
</style>


</head>


<body>

<header class="am-topbar am-topbar-fixed-top header_css"  >
    <div class="am-container" >
        <h1 class="am-topbar-brand">
            <a href="/">LOGO</a>
        </h1>
        <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-default am-show-sm-only" data-am-collapse="{target: '#collapse-head'}"><span class="am-sr-only">导航切换</span><span
                class="am-icon-bars"></span></button>
        <div class="am-collapse am-topbar-collapse" id="collapse-head">
            <ul class="am-nav am-nav-pills am-topbar-nav am-fr">
                <li style="margin: 10px;" <?php if($action == 'index'): ?> class="am-active" <?php endif; ?> >
                    <a href="<?php echo url('/'); ?>" ><i class="am-icon-home am-icon-sm"></i> Home</a>
                </li>
                <li <?php if($action == 'health'): ?> class="am-active" <?php endif; ?> >
                    <a href="<?php echo htmlentities($site_info['health_url']); ?>" > <i class="am-icon-heartbeat am-icon-sm"></i> Health</a>
                </li>
                <li <?php if($action == 'go_trip'): ?> class="am-active" <?php endif; ?> >
                    <a href="<?php echo htmlentities($site_info['go_trip_url']); ?>"><i class="am-icon-cab am-icon-sm"></i> Trip</a>
                </li>

                <?php   if($user_id == 0){?>
                <li <?php if($action == 'login'): ?> class="am-active" <?php endif; ?> >
                    <a href="<?php echo htmlentities($site_info['login_url']); ?>" target="new"  ><i class="am-icon-sign-in am-icon-sm"></i> Login</a>
                </li>
                <li <?php if($action == 'reg'): ?> class="am-active" <?php endif; ?> >
                    <a href="<?php echo htmlentities($site_info['reg_url']); ?>" target="new"   ><i class="am-icon-flag am-icon-sm"></i> Regist</a>
                </li>
                <?php }else{ ?>
                <li <?php if($action == 'user'): ?> class="am-active" <?php endif; ?>> <a href="<?php echo url('/user/'.$user_id); ?>" target="new"  > Welcome <?php echo $user_info['user_name']; ?> </a></li>
                <li ><a href="<?php echo htmlentities($site_info['logout_url']); ?>"   ><i class="am-icon-sign-out am-icon-sm"></i> Logout</a> </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</header>



<div class="detail">
    <div class="am-g am-g-fixed">
        <div class="am-u-lg-9 br_tp_g am-padding-horizontal-xs">

            <div class="am-container am-padding-horizonta-sm br_bt br_lf br_rg">

                <div class="am-container am-padding-horizontal-0">
                    <ol class="am-breadcrumb br_bt am-margin-bottom-0">
                        <li><a href="#" class="">Health Center</a></li>
                        <li><a href="#" class="">Member manage</a></li>
                    </ol>
                </div>

                <div class="am-container am-padding-horizontal-sm am-padding-vertical-sm">
                    <div class="am-u-lg-2 am-list-thumb am-padding-horizontal-0">
                        <a href="#" class="">
                            <?php if($user_info['sex'] == 0): ?>
                                <img src="/assets/image/timg.jpg" class="am-img-responsive am-hide-sm-only" alt="">
                            <?php else: ?>
                                <img src="/assets/image/ftimg.jpg" class="am-img-responsive am-hide-sm-only" alt="">
                            <?php endif; ?>
                        </a>
                    </div>
                    <div class=" am-u-lg-10 am-list-main ">
                        <h2 class="font_black no_bold br_bt am-padding-bottom-xs am-margin-bottom-0">User Name：<?php echo $user_info['user_name']; ?>
                            <span class="am-text-sm am-margin-left-sm" style="float: right;"><a href="<?php echo url('/logout'); ?>" class="font_orange">Logout</a></span>
                        </h2>
                        <ul class="am-avg-lg-2 am-avg-sm-2 am-padding-top-xs">
                            <li class="font_green am-padding-vertical-sm">Email：<a><?php echo $user_info['email']; ?></a></li>
                            <li class="font_green am-padding-vertical-sm">Sex：<a><?php if($user_info['sex'] == 0): ?>男<?php else: ?>女 <?php endif; ?></a></li>
                            <li class="font_green am-padding-vertical-xs">Point：<a>0</a></li>
                            <li class="font_green am-padding-vertical-xs">Last Login：<a><?php echo date("Y-m-d H:i:s",$user_info['login_time']);?></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="am-container am-padding-horizonta-sm br_bt br_lf br_rg br_tp_g am-margin-top">
                <div data-am-widget="titlebar" class="am-titlebar am-titlebar-multi am-margin-top-0 br_bt am-no-layout">
                    <h1 class="am-titlebar-title" style="color:#0e90d2">My Trip
                    </h1>
                </div>
                <div class="am-container am-margin-top-sm">
                    <table class="am-table am-table-bordered am-table-striped">
                        <thead>
                        <tr class="am-primary">
                            <th class="am-text-center">Start Time</th>
                            <th class="am-text-center">Tirp line</th>
                            <th class="am-text-center">End time</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>


        </div>


        <div class="am-u-lg-3 am-padding-right-0">
            <div class="am-container br_lf br_rg br_bt br_tp_g am-text-center am-padding-sm">

                <h2 class="font_green am-margin-bottom-xs">Manage Control</h2>
                <p class="am-margin-vertical-xs"><a href="<?php echo url('/user/'.$user_id); ?>">Home </a></p>
                <p class="am-margin-vertical-xs"><a href="<?php echo url('/logout'); ?>">Logout</a></p>


            </div>
        </div>
    </div>
</div>


<footer class="footer">
    <p>
        Copyright © Your Website 2018
    </p>
</footer>


<script type="text/javascript" src="https://cdn.bootcss.com/amazeui/2.7.2/js/amazeui.ie8polyfill.js"></script>
<script type="text/javascript" src="https://cdn.bootcss.com/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript" src="/assets/js/layer/layer.js"></script>
<script type="text/javascript" src="/assets/js/action.js"></script>
<script type="text/javascript" src="/assets/js/common.js"></script>
<script type="text/javascript" src="https://cdn.bootcss.com/amazeui/2.7.2/js/amazeui.min.js"></script>

</body>


<script type="text/javascript">

</script>

</html>