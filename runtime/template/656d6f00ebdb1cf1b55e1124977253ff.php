<?php /*a:5:{s:86:"C:\phpStudy\PHPTutorial\WWW\ChildHealth\application/index/view\index\introduction.html";i:1523984634;s:79:"C:\phpStudy\PHPTutorial\WWW\ChildHealth\application/index/view\layout\base.html";i:1522856435;s:80:"C:\phpStudy\PHPTutorial\WWW\ChildHealth\application/index/view\layout\toper.html";i:1522856435;s:81:"C:\phpStudy\PHPTutorial\WWW\ChildHealth\application/index/view\layout\header.html";i:1524151899;s:81:"C:\phpStudy\PHPTutorial\WWW\ChildHealth\application/index/view\layout\footer.html";i:1524074187;}*/ ?>
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

    


</head>


<body>

<header class="am-topbar am-topbar-fixed-top header_css"  >
    <div class="am-container" >
        <h1 class="am-topbar-brand">
            <a href="/"><img src="/assets/image/logo.png" width="71px"></a>
        </h1>
        <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-default am-show-sm-only" data-am-collapse="{target: '#collapse-head'}"><span class="am-sr-only">导航切换</span><span
                class="am-icon-bars"></span></button>
        <div class="am-collapse am-topbar-collapse" id="collapse-head">
            <ul class="am-nav am-nav-pills am-topbar-nav am-fr">
                <li style="margin: 10px;" <?php if($action == 'index' && $controller != 'User'): ?> class="am-active" <?php endif; ?> >
                    <a href="<?php echo url('/'); ?>" ><i class="am-icon-home am-icon-sm"></i> Home</a>
                </li>
                <li <?php if($action == 'health'): ?> class="am-active" <?php endif; ?> >
                    <a href="<?php echo htmlentities($site_info['health_url']); ?>" > <i class="am-icon-heartbeat am-icon-sm"></i> Food Ranking</a>
                </li>
                <!--<li <?php if($action == 'go_trip'): ?> class="am-active" <?php endif; ?> >-->
                    <!--<a href="<?php echo htmlentities($site_info['go_trip_url']); ?>"><i class="am-icon-search am-icon-sm"></i> Park Finding</a>-->
                <!--</li>-->

                <?php   if($user_id == 0){?>
                <li <?php if($action == 'login'): ?> class="am-active" <?php endif; ?> >
                    <a href="<?php echo htmlentities($site_info['login_url']); ?>" target="new"  ><i class="am-icon-sign-in am-icon-sm"></i> Log in</a>
                </li>
                <li <?php if($action == 'reg'): ?> class="am-active" <?php endif; ?> >
                    <a href="<?php echo htmlentities($site_info['reg_url']); ?>" target="new"   ><i class="am-icon-flag am-icon-sm"></i> Register</a>
                </li>
                <?php }else{ ?>
                <li <?php if($action == 'index' && $controller == 'User'): ?> class="am-active" <?php endif; ?>> <a href="<?php echo url('/user/'.$user_id); ?>" target="new"  > Welcome <?php echo $user_info['user_name']; ?> </a></li>
                <li ><a href="<?php echo htmlentities($site_info['logout_url']); ?>"   ><i class="am-icon-sign-out am-icon-sm"></i> Log out</a> </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</header>



<div class="detail" >
    <style>
        .detail_img  { height: 518px; width: auto\9; width:100%; }
    </style>
    <div class="am-g am-g-fixed detail_bg" >
        <img style="max-width:100%;overflow:hidden;" class="detail_img" src="/assets/image/obesity.jpg" alt="">
        <div  id='tips' >
            <p>
                What is Childhood Obesity?
            </p>

            <p>
                <span style="font-size:13px">Obesity is the excessive or abnormal accumulation of fat that may affect health. Childhood obesity is a medical condition which effect children and teenagers. If a child stores too much fat then they are classified as overweight or obese. </span>
            </p>

            <p>
                <span style="font-size:13px">If left unchecked, obese children grow up to become obese adults and this maybe the reason to many chronic diseases like type A diabetes, cholesterol and heart condition.</span>
            </p>
            <p>
                <img width="100%" height="8" src="/assets/image/line.png"/>
            </p>
            <p>
                Who is at risk?
            </p>

            <p>
                <span style="font-size:13px">Childhood obesity in most cases is a result of children eating too much and not having enough exercise. In some cases, obesity can be a result of deeper health issues which have no association to a child&#39;s lifestyle.</span>
            </p>

            <p>
                <span style="font-size:13px">Children who are at the risk of becoming overweight include:</span>
            </p>
            <p>
                <span style="font-size:13px">-<span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size:13px">Children who consume a high quantity of sugary drinks.</span>
            </p>
            <p>
                <span style="font-size:13px">-<span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size:13px">Children who don’t exercise enough.</span>
            </p>
            <p>
                <span style="font-size:13px">-<span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size:13px">Who spend most of their time watching TV or playing video games (which does not burn calories)</span>
            </p>
            <p>
                <span style="font-size:13px">-<span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size:13px">Have a lack of good nutrition information.</span>
            </p>
            <p>
                <span style="font-size:13px">-<span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size:13px">Who cannot afford or have access to healthy food.</span>
            </p>
            <p>
                <span style="font-size:13px">-<span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size:13px">Who are suffering from conditions such as Prader-Willi syndrome or Cushing&#39;s syndrome.</span>
            </p>
            <p>
                <img width="100%" height="8" src="/assets/image/line.png"/>
            </p>
            <p>
                What are the complications associated with childhood obesity?
            </p>

            <p>
                <span style="font-size:13px">Childhood Obesity can lead to health complications such as:</span>
            </p>
            <p>
                <span style="font-size:13px">-<span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size:13px">Liver diseases.</span>
            </p>
            <p>
                <span style="font-size:13px">-<span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size:13px">Type 2 diabetes.</span>
            </p>
            <p>
                <span style="font-size:13px">-<span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size:13px">Respiratory issues like asthma.</span>
            </p>
            <p>
                <span style="font-size:13px">-<span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size:13px">Bone and joint problems. </span>
            </p>

            <p>
                <span style="font-size:13px">Obesity also has some serious psychological effects like:</span>
            </p>
            <p>
                <span style="font-size:13px">-<span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size:13px">Increased risk of depression.</span>
            </p>
            <p>
                <span style="font-size:13px">-<span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size:13px">More likely to be bullied or teased.</span>
            </p>
            <p>
                <span style="font-size:13px">-<span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size:13px">May have poor self-esteem.</span>
            </p>
            <p>
                <span style="font-size:13px">-<span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size:13px">May feel socially isolated.</span>
            </p>
            <p>
                <img width="100%" height="8" src="/assets/image/line.png"/>
            </p>
            <p>
                What can I do to prevent childhood obesity?
            </p>

            <p>
                <span style="font-size:13px">Obesity in children can be prevented if the right measures are taken at the right time. This includes:</span>
            </p>
            <p>
                <span style="font-size:13px">-<span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size:13px">Live 5-2-1-0 which is consume 5 or more veggies and fruits per day, no more than 2 hours of screen time (TV, Video games), At least 1 hour of physical activity and 0 sugary drinks.</span>
            </p>
            <p>
                <span style="font-size:13px">-<span style="font:9px &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size:13px">Seek your doctor’s advice.</span>
            </p>
            <p>
                <img width="100%" height="8" src="/assets/image/line.png"/>
            </p>
            <p>
                Source
            </p>

            <p>
                <span style="font-size:13px">www.childhoodobesityfoundation.ca</span>
            </p>
            <p>
                <br/>
            </p>
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
<script>
    var demo = {
        notice: function(){
            // alert($(this).data('src'));
            layer.open({
                type: 1
                ,title: false //不显示标题栏
                ,closeBtn: false
                ,area: '1200px;'
                ,shade: 0.8
                ,id: 'LAY_layuipro' //设定一个id，防止重复弹出
                ,resize: false
                ,content: '<img src="'+$(this).data('src')+'" width="100%">'
                ,btn: [ 'Close']
                ,btnAlign: 'c'
                ,moveType: 1 //拖拽模式，0或者1
                ,success: function(layero){
                    var btn = layero.find('.layui-layer-btn');

                }
            });
        }

    };

    $('.layui-btn').on('click', function(){
        var othis = $(this), method = othis.attr('method');
        var demo1 = $('#demo1'), p = demo1.find('p').eq(othis.index());
        demo[method] ? demo[method].call(this, othis) : new Function('that', p.html())(this);
    });
</script>

</body>




</html>