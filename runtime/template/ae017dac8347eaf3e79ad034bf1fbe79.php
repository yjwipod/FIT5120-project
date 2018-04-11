<?php /*a:5:{s:85:"C:\phpStudy\PHPTutorial\WWW\ChildHealth\application/index/view\user\foodranktest.html";i:1523265755;s:79:"C:\phpStudy\PHPTutorial\WWW\ChildHealth\application/index/view\layout\base.html";i:1522856435;s:80:"C:\phpStudy\PHPTutorial\WWW\ChildHealth\application/index/view\layout\toper.html";i:1522856435;s:81:"C:\phpStudy\PHPTutorial\WWW\ChildHealth\application/index/view\layout\header.html";i:1522867119;s:81:"C:\phpStudy\PHPTutorial\WWW\ChildHealth\application/index/view\layout\footer.html";i:1522856435;}*/ ?>
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

    
<link href="/assets/css/selectfood.css" rel="stylesheet">

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
    <div class="am-g am-container" style="text-align: center;padding: 10px 0">
        <div class="clearfix">
            <!--<button class="select">&nbsp;</button>-->
            <p class="sf">
            <h1 style="margin-bottom: 0px">Choose food that you want to eat </h1>
            <h2 style="padding: 0px;margin: 0px">(2 in total ,you can choose none)</h2>
            </p>
            <!--<button class="send " data-counter="0">&#10004;</button>-->
        </div>
        <div style="text-align:center;clear:both"></div>
        <div style="margin: 0 auto;">
            <p style="font-size: 18px ; font-weight: bold">Healthiest</p>
            <ul class="select_food">
                <?php if(is_array($l_list) || $l_list instanceof \think\Collection || $l_list instanceof \think\Paginator): $i = 0; $__LIST__ = $l_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <li  data-id="<?php echo $vo['foodId']; ?>"><img src="/<?php echo $vo['picpath']; ?>"/></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <div class="clearfix"></div>
            </ul>
        </div>
        <div style="margin: 0 auto;">
            <p style="font-size: 18px ; font-weight: bold">Healthy</p>
            <ul class="select_food" >
                <?php if(is_array($y_list) || $y_list instanceof \think\Collection || $y_list instanceof \think\Paginator): $i = 0; $__LIST__ = $y_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <li data-id="<?php echo $vo['foodId']; ?>"><img src="/<?php echo $vo['picpath']; ?>"/></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <div class="clearfix"></div>
            </ul>
        </div>
        <div>
            <button type="button" id="select" class="am-btn am-btn-primary am-radius">OK</button>
            <button type="button" class="am-btn  am-btn-warning  am-radius">Cancle</button>
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


<script>
    $("#select").click(function(){
        var ids = [],strid = ' ' ;
        $(".selected").each(function(i,v){
            ids[i] = $(this).data('id');
            if(i == 0) {
                strid = $(this).data('id');
            }else{
                strid =  $(this).data('id')+','+strid;
            }
        });
        if(ids.length > 2){
            layer.msg('Can not choose more than two');
            return false;
        }

        $.post(
            "<?php echo url('index/user/plan_eat'); ?>",
            {strid:strid},
            function(result){
                layer.msg(result.msg);
                if(result.code == 20){
                    if(result.data == 0){
                        layer.alert('You got some points in this times ', {icon: 6});
                    }else{
                        layer.alert('Prefer Job ', {icon: 6});
                    }
                    setTimeout( window.location.href='/health' , 3000);

                }
            });
        console.log(ids);
    })

</script>
<script src="/assets/js/selectfood.js"></script>

</html>