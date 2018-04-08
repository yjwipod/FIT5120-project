<?php /*a:5:{s:79:"C:\phpStudy\PHPTutorial\WWW\ChildHealth\application/index/view\index\login.html";i:1522765133;s:79:"C:\phpStudy\PHPTutorial\WWW\ChildHealth\application/index/view\layout\base.html";i:1522856435;s:80:"C:\phpStudy\PHPTutorial\WWW\ChildHealth\application/index/view\layout\toper.html";i:1522856435;s:81:"C:\phpStudy\PHPTutorial\WWW\ChildHealth\application/index/view\layout\header.html";i:1522867119;s:81:"C:\phpStudy\PHPTutorial\WWW\ChildHealth\application/index/view\layout\footer.html";i:1522856435;}*/ ?>
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
    /*  注册  */
    /*  登录 */
    .form-box {
        width: 300px;
        margin: 0 auto;
        padding: 60px 0;
        padding-bottom: 120px; }
    .form-box .item {
        margin-top: 20px; }
    .form-box .item input {
        height: 40px;
        width: 100%;
        border: 1px solid #ccc;
        text-indent: 10px; }
    .mt-btn {
        display: inline-block;
        background: #ff5402;
        color: #fff;
        padding: 10px 20px; }
    .mt-btn:hover {
        color: #fff; }
    .mt-btn-block {
        display: block;
        text-align: center; }
    .img-code {
        vertical-align: middle;
        height: 41px; }
    #imgcode {
        width: 160px;
        top: 1px;
        right: -5px;
        position: relative; }
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
                    <a href="<?php echo htmlentities($site_info['health_url']); ?>" > <i class="am-icon-heartbeat am-icon-sm"></i> Food Ranking</a>
                </li>
                <li <?php if($action == 'go_trip'): ?> class="am-active" <?php endif; ?> >
                    <a href="<?php echo htmlentities($site_info['go_trip_url']); ?>"><i class="am-icon-search am-icon-sm"></i> Park Finding</a>
                </li>

                <?php   if($user_id == 0){?>
                <li <?php if($action == 'login'): ?> class="am-active" <?php endif; ?> >
                    <a href="<?php echo htmlentities($site_info['login_url']); ?>" target="new"  ><i class="am-icon-sign-in am-icon-sm"></i> Log in</a>
                </li>
                <li <?php if($action == 'reg'): ?> class="am-active" <?php endif; ?> >
                    <a href="<?php echo htmlentities($site_info['reg_url']); ?>" target="new"   ><i class="am-icon-flag am-icon-sm"></i> Register</a>
                </li>
                <?php }else{ ?>
                <li <?php if($action == 'user'): ?> class="am-active" <?php endif; ?>> <a href="<?php echo url('/user/'.$user_id); ?>" target="new"  > Welcome <?php echo $user_info['user_name']; ?> </a></li>
                <li ><a href="<?php echo htmlentities($site_info['logout_url']); ?>"   ><i class="am-icon-sign-out am-icon-sm"></i> Log out</a> </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</header>



<div class="detail">
    <form action="chkLogin.html" id="login_form" name="reg_form" method="POST">
        <div class="register">
            <div class="form-box">
                <h1 class="logo"> Login</h1>
                <!-- <div class="item">
                    <input id="email" type="text" placeholder="邮箱">
                </div> -->
                <div class="item">
                    <input id="account" name="account" type="text" placeholder="account">
                </div>
                <div class="item">
                    <input id="password"  name="password"  type="password" placeholder="password">
                </div>

                <div class="item">
                    <img class="img-code captcha"  src="<?php echo url('/index/index/verify'); ?>" alt="verify code" id="re_butid" onclick="re_verify()" />
                    <input id="imgcode"  name="imgcode"  type="text" placeholder="enter verify code">
                </div>
                <div class="item">
                    <a id="registerBtn" class="mt-btn mt-btn-block">Login</a>
                </div>
                <div class="item">
                    No Account？ <a href="<?php echo url('/reg'); ?>">Go regist</a>
                </div>
            </div>
        </div>
    </form>
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
    function re_verify(){
        $('.captcha').attr('src',"<?php echo url('/index/index/verify'); ?>&r="+Math.random());
    }

    $(document).ready(function(){

        $("#registerBtn").click(function(){
            memberLogin.ajaxLogin();
        });

    });
</script>

</html>