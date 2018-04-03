<?php /*a:5:{s:80:"C:\phpStudy\PHPTutorial\WWW\childHealth\application/index/view\index\health.html";i:1522241506;s:79:"C:\phpStudy\PHPTutorial\WWW\childHealth\application/index/view\layout\base.html";i:1522239099;s:80:"C:\phpStudy\PHPTutorial\WWW\childHealth\application/index/view\layout\toper.html";i:1522262642;s:81:"C:\phpStudy\PHPTutorial\WWW\childHealth\application/index/view\layout\header.html";i:1522263059;s:81:"C:\phpStudy\PHPTutorial\WWW\childHealth\application/index/view\layout\footer.html";i:1522257798;}*/ ?>
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
    
<style type="text/css">
    * {
        margin: 0;
        padding: 0;
    }
    .box-wrapper {
        height: 412px;
        width: 100%;
        /* background-color: #e69e9e; */
    }
    .wrapper {
        margin: 0 auto;
        width: 480px;
        height: 100px;
        position: relative;
    }
    .wrapper .box {
        /* background-color: blue; */
        width: 100px;
        height: 100px;
        /* float: left; */
        /* margin: 20px; */
        /* color: #fff; */
        text-align: center;
        line-height: 100px;
        font-size: 20px;
        position: absolute;
    }
    .wrapper .box:hover {
        z-index: 10;
    }
    .line-wrapper {
        height: 200px;
    }
    .line-box {
        margin: 0 auto;
        width: 510px;
    }
    .line-box .box {
        width: 100px;
        height: 100px;
        float: left;
    }
    .line-box .box .box {
        transform: rotate(0deg) !important;
    }
    #b1 {
        right: 0;
        top: 50px;
        transform: rotate(48deg);
        background-color: #ecc5c5;
    }
    #b2 {
        left: 107px;
        top: 50px;
        transform: rotate(20deg);
        background-color: #da9b9b;
    }
    #b3 {
        left: 200px;
        top: 65px;
        transform: rotate(-24deg);
        background-color: #b5e4f3;
    }
    #b4 {
        right: 75px;
        top: 100px;
        transform: rotate(14deg);
        background-color: #6dc3de;
    }
    #b5 {
        left: 138px;
        top: 145px;
        transform: rotate(5deg);
        background-color: #c2efbc;
    }
    #b6 {
        right: 110px;
        top: 145px;
        transform: rotate(-5deg);
        background-color: #c5c5e2;
    }
</style>

</head>


<body>

<header class="am-topbar am-topbar-fixed-top">
    <div class="am-container">
        <h1 class="am-topbar-brand">
            <a href="/"><img src=""  title="网站logo" width="168" height="36"/></a>
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



<div class="detail" style="background: url('/assets/image/muzi-003.jpg')" >
    <div class="box-wrapper">
        <div class="wrapper">
            <div class="box" id="b1" draggable="true" ondragstart="drag(event)"></div>
            <div class="box" id="b2" draggable="true" ondragstart="drag(event)"></div>
            <div class="box" id="b3" draggable="true" ondragstart="drag(event)"></div>
            <div class="box" id="b4" draggable="true" ondragstart="drag(event)"></div>
            <div class="box" id="b5" draggable="true" ondragstart="drag(event)"></div>
            <div class="box" id="b6" draggable="true" ondragstart="drag(event)"></div>
        </div>
    </div>
    <div class="line-wrapper">
        <div class="line-box">
            <div class="box" data-id="b2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
            <div class="box" data-id="b3" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
            <div class="box" data-id="b4" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
            <div class="box" data-id="b6" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
            <div class="box" data-id="b5" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
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
    function allowDrop(ev) {
        ev.preventDefault();
    }

    function drag(ev) {
        ev.dataTransfer.setData(ev.target.id, ev.target.id);
    }

    function drop(ev) {
        ev.preventDefault();
        var id = $(ev.target).data("id")
        var data = ev.dataTransfer.getData(id);
        if (data === "") {
            return;
        }
        ev.target.appendChild(document.getElementById(data));
    }

    var colors = ["#da9b9b", "#b5e4f3", "#6dc3de", "#c5c5e2", "#c2efbc"];
    $(".line-box .box").each(function(i,v){
        var div = $(this)
        div.css("background-color", colors[i])
    })
</script>

</html>