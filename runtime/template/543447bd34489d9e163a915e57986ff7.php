<?php /*a:5:{s:84:"C:\phpStudy\PHPTutorial\WWW\ChildHealth\application/index/view\user\food_manage.html";i:1522960982;s:79:"C:\phpStudy\PHPTutorial\WWW\ChildHealth\application/index/view\layout\base.html";i:1522856435;s:80:"C:\phpStudy\PHPTutorial\WWW\ChildHealth\application/index/view\layout\toper.html";i:1522856435;s:81:"C:\phpStudy\PHPTutorial\WWW\ChildHealth\application/index/view\layout\header.html";i:1522867119;s:81:"C:\phpStudy\PHPTutorial\WWW\ChildHealth\application/index/view\layout\footer.html";i:1522856435;}*/ ?>
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
    <div class="am-g am-g-fixed">

        <div class="am-u-lg-9 br_tp_g am-padding-horizontal-xs">
            <div class="am-container am-padding-horizonta-sm br_bt br_lf br_rg">
                <div class="am-container am-padding-horizontal-0">
                    <ol class="am-breadcrumb br_bt">
                        <li><a href="#" class="">Health Center</a></li>
                        <li><a href="#" class="">Food manage</a></li>
                    </ol>
                </div>


                <div class="clear"></div>
                <div style="width:785px;margin:1em auto;" class="fr">
                    <form name="formEdit" id="formEdit" action="<?php echo url('index/user/food_manage'); ?>" enctype="multipart/form-data"
                          onsubmit="return foodEdit()" class="am-form am-form-horizontal" method="post">

                        <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
                            <tbody>
                            <tr>
                                <td width="20%" align="right" bgcolor="#FFFFFF" height="25">Food Name：</td>
                                <td width="80%" align="left" bgcolor="#FFFFFF">
                                    <input name="foodName" type="text" value="<?php echo htmlentities((isset($info['foodName']) && ($info['foodName'] !== '')?$info['foodName']:'')); ?>" size="25" class="border1"></td>
                            </tr>

                            <tr>
                                <td align="right" bgcolor="#FFFFFF" height="25">HealthyLevel：</td>
                                <td align="left" bgcolor="#FFFFFF">
                                    <select id="healthyLevel" name="healthyLevel" style="width:150px">
                                        <option value="0" <?php if($info['healthyLevel'] == 0 || $info['healthyLevel'] == ''): ?>selected<?php endif; ?>>Default</option>
                                        <option value="4" <?php if($info['healthyLevel'] == 4): ?>selected<?php endif; ?>>Healthiest</option>
                                        <option value="3" <?php if($info['healthyLevel'] == 3): ?>selected<?php endif; ?>>Healthy</option>
                                        <option value="2" <?php if($info['healthyLevel'] == 2): ?>selected<?php endif; ?>>Unhealthy</option>
                                        <option value="1" <?php if($info['healthyLevel'] == 1): ?>selected<?php endif; ?>>Unhealthiest</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td align="right" bgcolor="#FFFFFF" height="25">Protein：</td>
                                <td align="left" bgcolor="#FFFFFF">
                                    <input name="protein" type="text" value="<?php echo htmlentities((isset($info['protein']) && ($info['protein'] !== '')?$info['protein']:'')); ?>" size="25" class="border1"></td>
                            </tr>
                            <tr>
                                <td align="right" bgcolor="#FFFFFF" height="25">Fat：</td>
                                <td align="left" bgcolor="#FFFFFF">
                                    <input name="fat" type="text" value="<?php echo htmlentities((isset($info['fat']) && ($info['fat'] !== '')?$info['fat']:'')); ?>" class="border1" size="25">
                                </td>
                            </tr>
                            <tr>
                                <td align="right" bgcolor="#FFFFFF" height="25">Fiber：</td>
                                <td align="left" bgcolor="#FFFFFF">
                                    <input name="fiber" type="text" value="<?php echo htmlentities((isset($info['fiber']) && ($info['fiber'] !== '')?$info['fiber']:'')); ?>" class="border1" size="25">
                                </td>
                            </tr>
                            <tr>
                                <td align="right" bgcolor="#FFFFFF" height="25">Sugar：</td>
                                <td align="left" bgcolor="#FFFFFF">
                                    <input name="sugar" type="text" value="<?php echo htmlentities((isset($info['sugar']) && ($info['sugar'] !== '')?$info['sugar']:'')); ?>" class="border1" size="25">
                                </td>
                            </tr>
                            <tr>
                                <td align="right" bgcolor="#FFFFFF" height="25">Food Pic：</td>
                                <td align="left" bgcolor="#FFFFFF">
                                    <input type="file" name="file" value="" size="25">
                                    <input name="picpath" value="<?php echo htmlentities((isset($info['picpath']) && ($info['picpath'] !== '')?$info['picpath']:'')); ?>" type="hidden" />
                                    (支持jpg、gif、png格式的图片)<br>
                                </td>
                            </tr>
                            <tr>
                                <td align="right" bgcolor="#FFFFFF" height="25">Description：</td>
                                <td align="left" bgcolor="#FFFFFF">
                                    <textarea name="description" class="" rows="5" id="doc-ta-1"><?php echo htmlentities((isset($info['description']) && ($info['description'] !== '')?$info['description']:'')); ?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center" bgcolor="#FFFFFF" height="25">
                                    <input name="foodId" type="hidden" value="<?php echo htmlentities((isset($info['foodId']) && ($info['foodId'] !== '')?$info['foodId']:'')); ?>" class="border1" size="25">
                                    <input name="submit" type="submit" value="Submit">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>

        </div>

        <div class="am-u-lg-3 am-padding-right-0">
            <div class="am-container br_lf br_rg br_bt br_tp_g am-text-center am-padding-sm">

                <h2 class="font_green am-margin-bottom-xs">Manage Control</h2>
                <p class="am-margin-vertical-xs"><a href="<?php echo url('/user/'.$user_id); ?>">Home </a></p>
                <?php if($user_id == 1): ?>
                <p class="am-margin-vertical-xs"><a href="<?php echo url('/index/user/foods/'); ?>">Food </a></p>
                <?php endif; ?>
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

</body>


<script type="text/javascript">
    function foodEdit(){
        var name = $("input[name='foodName']").val(),
            level = $("#healthyLevel").find("option:selected").val();
        if(name.length == 0){
            layer.msg('Food Name not Empty');
            return false;
        }
        if(level == 0){
            layer.msg('Please select one item');
            return false;
        }
        $('#formEdit').submit();

        // Tools.Ajax('POST','/login','login_form','/user/');

    }
</script>

</html>