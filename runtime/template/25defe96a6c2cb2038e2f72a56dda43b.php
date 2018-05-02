<?php /*a:6:{s:83:"C:\phpStudy\PHPTutorial\WWW\ChildHealth\application/index/view\user\point_logs.html";i:1523436107;s:79:"C:\phpStudy\PHPTutorial\WWW\ChildHealth\application/index/view\layout\base.html";i:1522856435;s:80:"C:\phpStudy\PHPTutorial\WWW\ChildHealth\application/index/view\layout\toper.html";i:1522856435;s:81:"C:\phpStudy\PHPTutorial\WWW\ChildHealth\application/index/view\layout\header.html";i:1524151899;s:82:"C:\phpStudy\PHPTutorial\WWW\ChildHealth\application/index/view\user\rightmenu.html";i:1524241705;s:81:"C:\phpStudy\PHPTutorial\WWW\ChildHealth\application/index/view\layout\footer.html";i:1524074187;}*/ ?>
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

    
<link href="/assets/css/user.css" rel="stylesheet">
<style>
    table tr {
        margin-bottom: 10px;
        line-height: 50px;
    }
</style>

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



<div class="detail">
    <div class="am-g am-g-fixed">

        <div class="am-u-lg-9 br_tp_g am-padding-horizontal-xs">
            <div class="am-container am-padding-horizonta-sm br_bt br_lf br_rg">
                <div class="am-container am-padding-horizontal-0">
                    <ol class="am-breadcrumb br_bt">
                        <li><a href="#" class="">Health Center</a></li>
                        <li><a href="#" class="">Point logs</a></li>
                    </ol>
                </div>


                <div class="clear"></div>
                <div style="width:785px;margin:1em auto;" class="fr">

                    <table class="am-table am-table-bordered am-table-striped am-table-hover">
                        <thead>
                        <tr>
                            <th>Point</th>
                            <th>Times</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($lists) || $lists instanceof \think\Collection || $lists instanceof \think\Paginator): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <tr>
                            <td><?php echo $vo['point']; ?></td>
                            <td>
                                <?php echo date("Y-m-d H:i:s",$vo['createtime']) ;?>
                            </td>

                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>

                    <?php echo $lists->render(); ?>

                </div>
            </div>

        </div>

        <div class="am-u-lg-3 am-padding-right-0">
            <div class="am-container br_lf br_rg br_bt br_tp_g am-text-center am-padding-sm">

    <h2 class="font_green am-margin-bottom-xs">Manage Control</h2>
    <p class="am-margin-vertical-xs"><a href="<?php echo url('/user/'.$user_id); ?>">Home </a></p>
    <?php if($user_id == 1): ?>
    <p class="am-margin-vertical-xs"><a href="<?php echo url('/index/user/foods'); ?>">Food </a></p>
    <?php endif; ?>
    <p class="am-margin-vertical-xs"><a href="<?php echo url('/index/user/point_logs/user_id/'.$user_id); ?>">Point Log </a></p>
    <p class="am-margin-vertical-xs"><a href="<?php echo url('/logout'); ?>">Log out</a></p>
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


<script type="text/javascript">

</script>

</html>