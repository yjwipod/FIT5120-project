<?php /*a:5:{s:80:"C:\phpStudy\PHPTutorial\WWW\ChildHealth\application/index/view\index\health.html";i:1525251764;s:79:"C:\phpStudy\PHPTutorial\WWW\ChildHealth\application/index/view\layout\base.html";i:1525246426;s:80:"C:\phpStudy\PHPTutorial\WWW\ChildHealth\application/index/view\layout\toper.html";i:1525246426;s:81:"C:\phpStudy\PHPTutorial\WWW\ChildHealth\application/index/view\layout\header.html";i:1525246426;s:81:"C:\phpStudy\PHPTutorial\WWW\ChildHealth\application/index/view\layout\footer.html";i:1525246426;}*/ ?>
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

    
<script type="text/javascript" src="https://cdn.bootcss.com/jquery/2.0.0/jquery.min.js"></script>
<link href="/assets/css/health.css" rel="stylesheet">

<!--<link href="/assets/css/health/css.css" rel="stylesheet"/>-->

<script src="/assets/js/health/modernizr.js"></script>
<style>


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

    <div class="am-g am-g-fixed " style="margin-bottom: 10px" >
        <!--<a href="javascript:;" method="notice" data-src="/assets/image/tips.png" class="layui-btn">See the steps</a>-->
        <a class="am-btn am-btn-warning layui-btn" method="notice" data-src="/assets/image/tips.png">
            <i class="am-icon-share"></i>
            See the steps
        </a>
    </div>

    <div class="am-g am-g-fixed detail_bg" >

        <div  id='tips' >
            <p >Game Dec</p>
        </div>
        <div class="game_zoom" style="position:relative;">
            <div class="am-form-group am-form-icon" style="position:absolute; z-index:10000; left:10px; top:100px">
                <?php if(isset($round) && $user_id != 0 ){ if($round < 7){ ?>

                <p>You can get points </p>
                <p>in the next <span style="color: red"><?php echo $num; ?></span> Round(s) </p>

                <?php }else{?>
                <p>Just for Fun ! </p>
                <?php } }else{ ?>
                <p>Just for Fun ! </p>
                <?php } ?>
            </div>
            <div class="am-form-group am-form-icon" style="position:absolute; z-index:10000; right:10px; top:100px">
                <p>You can try </p>
                <p><span class="times" style="color: red">10</span> times left</p>
                <p>in this round</p>
            </div>
            <div id="foodRankingPlayground"  class="foodRankingPlayground">

                <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <div id="<?php echo $healthyLevel[$vo['healthyLevel']]; ?>" class="foodImg" data-dec = "<?php echo $vo['description']; ?>" >
                    <img  alt="AudioJungle" src="<?php echo $vo['picpath']; ?>"/>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>

                <!--<div id="imgHest" class="foodImg">-->
                <!--<img alt="AudioJungle" src="http://www.fit-kidz.tk/images/demo/apple11.png"/>-->
                <!--</div>-->
                <!--<div id="imgHeal" class="foodImg">-->
                <!--<img alt="AudioJungle" src="http://www.fit-kidz.tk/images/demo/Salmon11.png"/>-->
                <!--</div>-->
                <!--<div id="imgNorm" class="foodImg">-->
                <!--<img alt="AudioJungle" src="http://www.fit-kidz.tk/images/demo/biscuit11.png"/>-->
                <!--</div>-->
                <!--<div id="imgUnh" class="foodImg">-->
                <!--<img alt="AudioJungle" src="http://www.fit-kidz.tk/images/demo/cocacola11.png"/>-->
                <!--</div>-->
                <!--<div id="imgUnhest" class="foodImg">-->
                <!--<img alt="AudioJungle" src="http://www.fit-kidz.tk/images/demo/burger11.png"/>-->
                <!--</div>-->

                <table id="foodLevel" class="tableDrop">
                    <tr>
                        <td>
                            <div id="hec" class="correctdiv">Correct</div>
                        </td>
                        <td>
                            <div id="hc" class="correctdiv">Correct</div>
                        </td>
                        <!--<td>-->
                        <!--<div id="noc" class="correctdiv">Correct</div>-->
                        <!--</td>-->
                        <td>
                            <div id="uhc" class="correctdiv">Correct</div>
                        </td>
                        <td>
                            <div id="uhec" class="correctdiv">Correct</div>
                        </td>
                    </tr>
                    <tr class="tableDropSlotRow">
                        <td id="hest">
                            <div id="slotHest" class="tableDropSlot"></div>
                        </td>
                        <td id="heal">
                            <div id="slotHeal" class="tableDropSlot"></div>
                        </td>
                        <!--<td id="norm">-->
                        <!--<div id="slotNorm" class="tableDropSlot"></div>-->
                        <!--</td>-->
                        <td id="unhea">
                            <div id="slotUnh" class="tableDropSlot"></div>
                        </td>
                        <td id="unhest">
                            <div id="slotUnhest" class="tableDropSlot"></div>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 20px;">Healthiest</td>
                        <td style="font-size: 20px;">Healthy</td>
                        <!--<td style="font-size: 20px;">Normal</td>-->
                        <td style="font-size: 20px;">Unhealthy</td>
                        <td style="font-size: 20px;">Unhealthiest</td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <div  id='w_tips' style="height: 90px; width:760px; border:solid 1px #000000;background: #b2d6ef;margin:15px auto  ; ">
                                <p style="text-align: left;padding: 0px 10px;">wrong tips</p>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>

        </div>

    </div>
    <input id="note" value="0" type="hidden" />
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



<script src="/assets/js/health/jquery_drop.js"></script>

<script src="/assets/js/health/bootstrap.js"></script>

<script src="/assets/js/drag&drop.js"></script>
<script>
var user_id = "<?php echo $user_id; ?>";

</script>

</html>