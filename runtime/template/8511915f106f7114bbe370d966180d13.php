<?php /*a:1:{s:77:"D:\phpStudy\PHPTutorial\WWW\think-cms\application/index/view\index\index.html";i:1522134340;}*/ ?>
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
    <link rel="stylesheet" href="https://cdn.bootcss.com/amazeui/2.7.2/css/amazeui.min.css"/>
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
            padding-bottom: 40px;
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
</head>

<body>
<header class="am-topbar am-topbar-fixed-top">
    <div class="am-container">
        <h1 class="am-topbar-brand">
            <a href="/"><img src="/assets/image/logo_manage_black.png" height="36"/></a>
        </h1>
        <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-default am-show-sm-only" data-am-collapse="{target: '#collapse-head'}"><span class="am-sr-only">导航切换</span><span
                class="am-icon-bars"></span></button>
        <div class="am-collapse am-topbar-collapse" id="collapse-head">
            <ul class="am-nav am-nav-pills am-topbar-nav am-fr">
                <li class="am-active">
                    <a href="http://cms.newday.me"><i class="am-icon-home am-icon-sm"></i> 首页</a>
                </li>
                <li>
                    <a href="http://www.newday.me" target="new"><i class="am-icon-send am-icon-sm"></i> 作者</a>
                </li>
                <li>
                    <a href="<?php echo htmlentities($site_info['manage_url']); ?>"><i class="am-icon-dashboard am-icon-sm"></i> 后台</a>
                </li>
            </ul>
        </div>
    </div>
</header>

<div class="get">
    <div class="am-g">
        <div class="am-u-lg-12">
            <h1 class="get-title">NewDayCms - 简单的方式管理数据</h1>
            <p>
                期待你的参与，共同打造一个功能更强大的通用后台管理系统
            </p>
            <p>
                <iframe src="https://ghbtns.com/github-btn.html?user=newday-me&repo=think-cms&type=star&count=true" frameborder="0" scrolling="0"></iframe>
                <iframe src="https://ghbtns.com/github-btn.html?user=newday-me&repo=think-cms&type=fork&count=true" frameborder="0" scrolling="0"></iframe>
            </p>
            <p>
                <a href="http://cms.newday.me/download.html" class="am-btn am-btn-sm index-btn">
                    <i class="am-icon-download"></i> 下载源码
                </a>
                <a href="https://github.com/newday-me/think-cms" class="am-btn am-btn-sm index-btn">
                    <i class="am-icon-github"></i> 访问 GIT
                </a>
            </p>
        </div>
    </div>
</div>

<div class="detail">
    <div class="am-g am-container">
        <div class="am-u-lg-12">
            <h2 class="detail-h2">功能全面 、安全稳定，期待和你一起去实现!</h2>
            <div class="am-g">
                <div class="am-u-lg-3 am-u-md-6 am-u-sm-12 detail-mb">
                    <h3 class="detail-h3">
                        <i class="am-icon-delicious am-icon-sm"></i>
                        &nbsp; ThinkPHP 5.1.0
                    </h3>
                    <p class="detail-p">
                        系统采用了最新的ThinkPHP 5.1.0，这个版本是一个颠覆和重构版本，是快速开发系统的一种最佳选择。
                    </p>
                </div>
                <div class="am-u-lg-3 am-u-md-6 am-u-sm-12 detail-mb">
                    <h3 class="detail-h3">
                        <i class="am-icon-th-large am-icon-sm"></i>
                        &nbsp; AdminLTE 2.4.2
                    </h3>
                    <p class="detail-p">
                        AdminLTE 是一款基于Bootstrap3的开源UI框架，提供了一系列响应式、可重用和各种常用的组件。
                    </p>
                </div>
                <div class="am-u-lg-3 am-u-md-6 am-u-sm-12 detail-mb">
                    <h3 class="detail-h3">
                        <i class="am-icon-check-square-o am-icon-sm"></i>
                        &nbsp; CMS定位
                    </h3>
                    <p class="detail-p">
                        CMS的定位是一个通用后台的脚手架，可配合Api Gateway实现多系统的数据统一管理。
                    </p>
                </div>
                <div class="am-u-lg-3 am-u-md-6 am-u-sm-12 detail-mb">
                    <h3 class="detail-h3">
                        <i class="am-icon-columns am-icon-sm"></i>
                        &nbsp; Apache2开源协议
                    </h3>
                    <p class="detail-p">
                        代码遵循Apache2开源协议，大家可以免费使用，对商业用户友好，欢迎大家fork贡献代码。
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<hr/>

<div class="detail">
    <div class="am-g am-container">
        <div class="am-u-lg-12">
            <h2 class="detail-h2" style="margin: 50px 0;">CMS功能演示截图</h2>
            <div data-am-widget="slider" class="am-slider am-slider-a1" data-am-slider='{&quot;directionNav&quot;:false}'>
                <ul class="am-slides">
                    <li>
                        <img src="/assets/image/menu.png">
                    </li>
                    <li>
                        <img src="/assets/image/auth.png">
                    </li>
                    <li>
                        <img src="/assets/image/runtime.png">
                    </li>
                    <li>
                        <img src="/assets/image/form.png">
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<hr/>

<div class="detail">
    <div class="am-g am-container">
        <div class="am-u-lg-12">
            <h3>友情链接</h3>
            <ul class="am-nav am-nav-pills">
                <li><a target="_blank" href="http://www.thinkphp.cn/">ThinkPHP</a></li>
                <li><a target="_blank" href="https://adminlte.io/">AdminLTE</a></li>
                <li><a target="_blank" href="https://www.upyun.com/">又拍云</a></li>
            </ul>
        </div>
    </div>
</div>

<footer class="footer">
    <p>
        Copyright <a href="http://www.newday.me"> NewDay </a> All Rights Reserved，UI power by <a href="http://www.yunshipei.com" target="_blank"> AmazeUI Team</a>。
    </p>
</footer>

<script type="text/javascript" src="https://cdn.bootcss.com/amazeui/2.7.2/js/amazeui.ie8polyfill.js"></script>
<script type="text/javascript" src="https://cdn.bootcss.com/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.bootcss.com/amazeui/2.7.2/js/amazeui.min.js"></script>
</body>

</html>