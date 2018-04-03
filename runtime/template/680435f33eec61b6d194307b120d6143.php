<?php /*a:5:{s:78:"C:\phpStudy\PHPTutorial\WWW\childHealth\application/index/view\index\user.html";i:1522267107;s:79:"C:\phpStudy\PHPTutorial\WWW\childHealth\application/index/view\layout\base.html";i:1522239099;s:80:"C:\phpStudy\PHPTutorial\WWW\childHealth\application/index/view\layout\toper.html";i:1522262642;s:81:"C:\phpStudy\PHPTutorial\WWW\childHealth\application/index/view\layout\header.html";i:1522267123;s:81:"C:\phpStudy\PHPTutorial\WWW\childHealth\application/index/view\layout\footer.html";i:1522257798;}*/ ?>
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
<link rel="stylesheet" href="http://www.61tk.com/themes/default/css/amazeui.css"/>
<link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
<style>
    ::-webkit-scrollbar {
        width: 2px;
        height: 2px;
        background-color: #F5F5F5;
    }

    ::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.3);
        border-radius: 2px;
        background-color: #F5F5F5;
    }

    ::-webkit-scrollbar-thumb {
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 1px rgba(0, 0, 0, .3);
        background-color: #555;
    }

    #collapse-head a i {
        font-size: 1.2rem;
    }

    .get {
        background: #1E5B94;
        color: #fff;
        text-align: center;
        padding: 100px 0;
    }

    .get iframe {
        width: 90px;
        height: 20px;
    }

    .get-title {
        font-size: 200%;
        border: 2px solid #fff;
        padding: 20px;
        display: inline-block;
    }

    .detail {
        background: #fff;
        padding: 5px;
    }

    .detail-h2 {
        text-align: center;
        font-size: 150%;
        margin: 80px 0;
    }

    .detail-h3 {
        color: #1f8dd6;
    }

    .detail-p {
        color: #7f8c8d;
    }

    .detail-mb {
        margin-bottom: 30px;
    }

    .footer p {
        color: #7f8c8d;
        margin: 0;
        padding: 15px 0;
        text-align: center;
        background: #2d3e50;
    }

    .index-btn {
        color: #fff;
        border-radius: 5px;
        margin-right: 30px;
        border: 1px solid #eee;
    }

    .index-btn:hover {
        color: #0e90d2;
    }
</style>
    
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

<header class="am-topbar am-topbar-fixed-top">
    <div class="am-container">
        <h1 class="am-topbar-brand">
            <a href="/"><img src=""  title="logo" width="168" height="36"/></a>
        </h1>
        <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-default am-show-sm-only" data-am-collapse="{target: '#collapse-head'}"><span class="am-sr-only">导航切换</span><span
                class="am-icon-bars"></span></button>
        <div class="am-collapse am-topbar-collapse" id="collapse-head">
            <ul class="am-nav am-nav-pills am-topbar-nav am-fr">
                <li <?php if($action == 'index'): ?> class="am-active" <?php endif; ?> >
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
                <li <?php if($action == 'user'): ?> class="am-active" <?php endif; ?>> <a href="<?php echo url('index/index/user',['id'=>$user_id]); ?>" target="new"  > Welcome <?php echo $user_info['user_name']; ?> </a></li>
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
                            <img src="/assets/image/pic_2.jpg" class="am-img-responsive am-hide-sm-only" alt="">
                        </a>
                    </div>
                    <div class=" am-u-lg-10 am-list-main ">
                        <h2 class="font_black no_bold br_bt am-padding-bottom-xs am-margin-bottom-0">User Name：<?php echo $user_info['user_name']; ?>
                            <span class="am-text-sm am-margin-left-sm"><a href="<?php echo url('index/index/logout'); ?>" class="font_orange">Logout</a></span>
                        </h2>
                        <ul class="am-avg-lg-2 am-avg-sm-2 am-padding-top-xs">
                            <!--<li class="font_green am-padding-vertical-sm">账户余额：<a>￥0.00元</a></li>-->
                            <!--<li class="font_green am-padding-vertical-sm">宝宝成长积分：<a>0</a></li>-->
                            <li class="font_green am-padding-vertical-xs">Point：<a>0</a></li>
                            <li class="font_green am-padding-vertical-xs">Last Login：<a><?php echo date("Y-m-d H:i:s",$user_info['login_time']);?></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="am-container am-padding-horizonta-sm br_bt br_lf br_rg br_tp_g am-margin-top">
                <div data-am-widget="titlebar" class="am-titlebar am-titlebar-multi am-margin-top-0 br_bt am-no-layout">
                    <h1 class="am-titlebar-title" style="color:#0e90d2">My Trip
                        <!--<span class="am-text-sm am-margin-left-sm"><a href="soft/pdf.rar" style="color:#ffa200;">阅读软件下载</a></span>-->
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

            <!--<div class="am-container am-padding-horizonta-sm br_bt br_lf br_rg br_tp_g am-margin-top">-->
                <!--<div data-am-widget="titlebar" class="am-titlebar am-titlebar-multi am-margin-top-0 br_bt am-no-layout">-->
                    <!--<h1 class="am-titlebar-title" style="color:#0e90d2">个体报告-->
                        <!--<span class="am-text-sm am-margin-left-sm"><a href="report2.php" style="color:#ffa200;">查看报告</a></span>-->
                    <!--</h1>-->
                <!--</div>-->
            <!--</div>-->
            <!--<div class="am-container am-padding-horizonta-sm br_bt br_lf br_rg br_tp_g am-margin-top">-->
                <!--<div data-am-widget="titlebar" class="am-titlebar am-titlebar-multi am-margin-top-0 br_bt am-no-layout">-->
                    <!--<h1 class="am-titlebar-title" style="color:#0e90d2">我的提问</h1>-->
                <!--</div>-->
                <!--<div class="am-container am-margin-top-sm am-scrollable-horizontal">-->
                    <!--<div class="am-container">-->
                        <!--<ul class="am-pagination am-pagination-centered">-->

                            <!--<form name="selectPageForm" action="/user.php" method="get">-->


                                <!--<div id="pager" class="pagebar">-->
                                    <!--<span class="f_l f6" style="margin-right:10px;">总计 <b>0</b>  个记录</span>-->

                                <!--</div>-->


                            <!--</form>-->
                            <!--<script type="Text/Javascript" language="JavaScript">-->
                                <!--&lt;!&ndash;-->

                                <!--function selectPage(sel)-->
                                <!--{-->
                                    <!--sel.form.submit();-->
                                <!--}-->

                                <!--//&ndash;&gt;-->
                            <!--</script>-->
                        <!--</ul>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->


            <!--<div class="am-container am-padding-horizonta-sm br_bt br_lf br_rg br_tp_g am-margin-top">-->
                <!--<div data-am-widget="titlebar" class="am-titlebar am-titlebar-multi am-margin-top-0 br_bt am-no-layout">-->
                    <!--<h1 class="am-titlebar-title" style="color:#0e90d2">购买记录</h1>-->
                <!--</div>-->
                <!--<div class="am-container am-margin-top-sm am-scrollable-horizontal">-->
                    <!--<table class="am-table am-table-bordered am-table-striped">-->
                        <!--<tbody>-->
                        <!--<tr>-->
                            <!--<td class="am-text-left am-text-nowrap"><a href="#">购买记录</a></td>-->
                            <!--<td class="am-text-center am-primary am-text-nowrap" style="width:220px;">2015/6/24</td>-->
                        <!--</tr>-->
                        <!--</tbody>-->
                    <!--</table>-->
                <!--</div>-->
            <!--</div>-->


            <!--<div class="am-container am-padding-horizonta-sm br_bt br_lf br_rg br_tp_g am-margin-top">-->
                <!--<div data-am-widget="titlebar" class="am-titlebar am-titlebar-multi am-margin-top-0 br_bt am-no-layout">-->
                    <!--<h1 class="am-titlebar-title" style="color:#0e90d2">自测工具</h1>-->
                <!--</div>-->
                <!--<div class="am-container am-margin-vertical-sm am-scrollable-horizontal">-->
                    <!--<div class="am-u-lg-2 am-u-sm-2 am-padding-horizontal-xs"><button type="button" class="am-btn am-btn-primary am-btn-xl  am-btn-block" onclick="location.href='user.php?act=mycheck_1';">健康自测</button></div>-->
                    <!--<div class="am-u-lg-2 am-u-sm-2 am-padding-horizontal-xs"><button type="button" class="am-btn am-btn-primary am-btn-xl am-btn-block" onclick="location.href='user.php?act=mycheck_3';">身高测试</button></div>-->
                    <!--<div class="am-u-lg-2 am-u-sm-2 am-padding-horizontal-xs"><button type="button" class="am-btn am-btn-primary am-btn-xl am-btn-block" onclick="location.href='user.php?act=mycheck_4';">血型测试</button></div>-->
                    <!--<div class="am-u-lg-2 am-u-sm-2 am-padding-horizontal-xs"><button type="button" class="am-btn am-btn-primary am-btn-xl am-btn-block" onclick="location.href='user.php?act=mycheck_5';">免疫测试</button></div>-->
                    <!--<div class="am-u-lg-2 am-u-sm-2 am-padding-horizontal-xs"><button type="button" class="am-btn am-btn-primary am-btn-xl am-btn-block" onclick="location.href='user.php?act=mycheck_6';">自信测试</button></div>-->
                    <!--<div class="am-u-lg-2 am-u-sm-2 am-padding-horizontal-xs"><button type="button" class="am-btn am-btn-primary am-btn-xl am-btn-block" onclick="location.href='user.php?act=mycheck_8';">预防接种</button></div>-->
                <!--</div>-->
            <!--</div>-->

            <!--<div class="am-container am-padding-horizonta-sm br_bt br_lf br_rg br_tp_g am-margin-top">-->
                <!--<div data-am-widget="titlebar" class="am-titlebar am-titlebar-multi am-margin-top-0 br_bt am-no-layout">-->
                    <!--<h1 class="am-titlebar-title" style="color:#0e90d2">评测记录</h1>-->
                <!--</div>-->
                <!--<div class="am-container am-margin-top-sm am-scrollable-horizontal">-->
                    <!--<table class="am-table am-table-bordered am-table-striped ">-->
                        <!--<thead class="am-text-nowrap">-->
                        <!--<tr class="am-primary">-->
                            <!--<th class="am-text-center">自测项目</th>-->
                            <!--<th class="am-text-center">自测结果</th>-->
                            <!--<th class="am-text-center">自测日期</th>-->
                        <!--</tr>-->
                        <!--</thead>-->
                        <!--<tbody>-->
                        <!--</tbody>-->
                    <!--</table>-->
                <!--</div>-->
            <!--</div>-->
        </div>


        <div class="am-u-lg-3 am-padding-right-0">
            <div class="am-container br_lf br_rg br_bt br_tp_g am-text-center am-padding-sm">

                <h2 class="font_green am-margin-bottom-xs">Manage Control</h2>
                <p class="am-margin-vertical-xs"><a href="<?php echo url('index/index/user'); ?>">Home </a></p>
                <!--<p class="am-margin-vertical-xs"><a href="user.php?act=profile">我的资料</a></p>-->
                <p class="am-margin-vertical-xs"><a href="<?php echo url('index/index/logout'); ?>">Logout</a></p>

                <!--<h2 class="font_green am-margin-bottom-xs am-margin-top-sm">行程管理</h2>-->
                <!--<p class="am-margin-vertical-xs"><a href="user.php?act=order_list">我的行程</a></p>-->

                <!--<h2 class="font_green am-margin-bottom-xs am-margin-top-sm">预约管理</h2>-->
                <!--<p class="am-margin-vertical-xs"><a href="user.php?act=mybooking">我的预约</a></p>-->

                <!--<h2 class="font_green am-margin-bottom-xs am-margin-top-sm">报告管理</h2>-->
                <!--<p class="am-margin-vertical-xs"><a href="user.php?act=myreport">我的报告</a></p>-->

                <!--<h2 class="font_green am-margin-bottom-xs am-margin-top-sm">其它管理</h2>-->
                <!--<p class="am-margin-vertical-xs"><a href="user.php?act=mycheck">我的评测</a></p>-->
                <!--<p class="am-margin-vertical-xs"><a href="user.php?act=myqs">P值趋势</a></p>-->
                <!--<p class="am-margin-vertical-xs"><a href="user.php?act=tkk">童康卡</a></p>-->
                <!--<p class="am-margin-vertical-xs"><a href="user.php?act=help">帮助中心</a></p>-->
            </div>
        </div>
    </div>
</div>


<footer class="footer">
    <p>
        Copyright 2018
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