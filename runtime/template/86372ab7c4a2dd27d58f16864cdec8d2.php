<?php /*a:4:{s:80:"D:\phpStudy\PHPTutorial\WWW\childHealth\application/index/view\index\health.html";i:1522639917;s:86:"D:\phpStudy\PHPTutorial\WWW\childHealth\application/index/view\layout\base_health.html";i:1522503776;s:80:"D:\phpStudy\PHPTutorial\WWW\childHealth\application/index/view\layout\toper.html";i:1522499084;s:81:"D:\phpStudy\PHPTutorial\WWW\childHealth\application/index/view\layout\header.html";i:1522295922;}*/ ?>
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
    

<script type="text/javascript" src="https://cdn.bootcss.com/jquery/2.0.0/jquery.min.js"></script>
<style type="text/css">
    * {
        margin: 0;
        padding: 0;
    }

    .box-wrapper {
        height: 500px;
        width: 100%;
        /* background-color: #e69e9e; */
    }

    .wrapper {
        margin: 0 auto;
        width: 480px;
        height: 100px;
        /* position: relative; */
    }

    .wrapper .box {
        width: 100px;
        height: 100px;
        text-align: center;
        line-height: 100px;
        font-size: 20px;
        position: absolute;
    }

    .wrapper .box:hover {
        z-index: 10;
        transform: rotate(0);
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
        left: 60%;
        top: 50px;
        transform: rotate(48deg);
        background-color: #ecc5c5;
    }

    #b2 {
        left: 38%;
        top: 50px;
        transform: rotate(20deg);
        background-color: #da9b9b;
    }

    #b3 {
        left: 46%;
        top: 65px;
        transform: rotate(-24deg);
        background-color: #b5e4f3;
    }

    #b4 {
        left: 55%;
        top: 100px;
        transform: rotate(14deg);
        background-color: #6dc3de;
    }

    #b5 {
        left: 40%;
        top: 145px;
        transform: rotate(5deg);
        background-color: #c2efbc;
    }

    #b6 {
        left: 51%;
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


<div class="box-wrapper">
    <div class="wrapper">
        <!--<div class="box" id="b1"></div>-->
        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <div class="box"  style="top:<?php echo $vo['top']; ?>px;background: url('<?php echo $vo['picpath']; ?>'); width: 100px ; height: 100px" id="b<?php echo $key+2?>" ></div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <!--<div class="box" id="b2"></div>-->
        <!--<div class="box" id="b3"></div>-->
        <!--<div class="box" id="b4"></div>-->
        <!--<div class="box" id="b5"></div>-->
        <!--<div class="box" id="b6"></div>-->
    </div>
</div>
<div class="line-wrapper">
    <div class="line-box">
        <div class="box" data-id="b2">1</div>
        <div class="box" data-id="b3">2</div>
        <div class="box" data-id="b4">3</div>
        <div class="box" data-id="b6">4</div>
        <div class="box" data-id="b5">5</div>
    </div>
</div>
<div style="text-align: center">Remaining times：
    <span class="tims" style="font-size: 28px">10</span>
    <input id="note" value="0" type="hidden" />
</div>

<input id="times" value="10" type="hidden" />


<footer class="footer">
    <p>
        Copyright 2018
    </p>
</footer>
<script type="text/javascript" src="/assets/js/layer/layer.js"></script>

</body>


<script type="text/javascript">
    $(".box").click(function(){
        checkIsRight();
        if($('#times').val() <= 0){
            layer.msg('Use out of times');
            return false;
        }
    });
    function checkIsRight(){
        var str1 = 0 ;
         $(".wrapper").find('div').each(function(i, v) {
             var str = $(this).css('top').split("px") ;
             str1 = str1+ parseInt(str[0]);
        });
         if(str1 == 2500){
             layer.msg('Congratulations on the right operation');
             return false;
         }
        console.log(str1);
    }
	
  var colors = ["#da9b9b", "#b5e4f3", "#6dc3de", "#c5c5e2", "#c2efbc"];
  $(".line-box .box").each(function(i, v) {
    var div = $(this)
    div.css("background-color", colors[i])
  })
  var selection = {},
    total = 10,
    index = 0, // 记录次数
    indexArray = []
  var drag = function(obj) {
    obj.bind("mousedown", start);
    var boxPoints = {},
      transform ="",
      height,
      width
    function start(event) {
      console.log(indexArray.length);
	  checkIsRight();
      if (indexArray.length >= 10) {
         layer.msg('Use out of times');
                return false;
      }
	  
      indexArray.push(false)
      if (event.button == 0) {
        var that = $(event.target.id),
          id = event.target.id,
          top = event.target.offsetTop,
          left = event.target.offsetLeft,
          item = {}
        item.x = left
        item.y = top
        boxPoints[id] = item
        transform = event.target.style.transform
        width = event.target.offsetWidth
        height = event.target.offsetHeight
        event.target.style.opacity = '0.5'

        gapX = event.clientX - obj[0].offsetLeft;
        gapY = event.clientY - obj[0].offsetTop;
        $(document).bind("mousemove", move);
        $(obj).bind("mouseup", stop);

      }
      return false;
    }

    function move(event) {
      obj.css({
        "left": (event.clientX - gapX) + "px",
        "top": (event.clientY - gapY) + "px"
      });
      return false;
    }

    function stop(event) {
      console.log("stop")
      $(document).unbind("mousemove", move);
      //$(event.target.id).unbind("mouseup", stop);
	  $("#" + event.target.id).unbind("mouseup", stop);
      event.target.style.opacity = '1'
      // 对比是否落在对应box上
      var id = event.target.id,
        point = lineBoxPoint[id],
        point1 = boxPoints[id],
        cpPoint = lineBoxPoint[$(".line-box .box").eq(0).data("id")],
        cpLeft = cpPoint.x,
        cpTop = cpPoint.y,
        cpRight = lineBoxPoint[$(".line-box .box").eq($(".line-box .box").length - 1).data("id")].x + width,
        lastIndex = indexArray.length-1
                    
      if (point) {
        if (event.clientX > point.x && event.clientX < point.x + width && event.clientY > point.y && event.clientY < point.y + height) {
          $(this).css({
            "left": point.x + "px",
            "top": point.y + "px",
            "transform": "rotate(0)"
          });
          selection[id] = true;
          indexArray[lastIndex] = true;
		  $(".tims").text(total - indexArray.length) ;
          return false;
        }
      }
      if(event.clientX > cpLeft && event.clientX < cpRight && event.clientY > cpTop && event.clientY < cpTop + height ) {
        index = index + 1;
        indexArray[lastIndex] = true;
      } else {
        if (indexArray[lastIndex] === false) {
          indexArray.splice(lastIndex,1);
        }
      }
	  console.log('===');
	  console.log(index);
	  console.log(indexArray);
	  console.log('===');
	  $(".tims").text(total - indexArray.length) 
      $(this).css({
        "left": point1.x + "px",
        "top": point1.y + "px",
      });
      return false;
    }
  }
  var lineBoxPoint = {}
  $(".line-box .box").each(function(i, v) {
    var that = $(v),
      id = that.data("id"),
      top = that.offset().top,
      left = that.offset().left,
      item = {};
    item.x = left;
    item.y = top;
    lineBoxPoint[id] = item;
  })
  $(".wrapper .box").each(function(i, v) {
    (function(dom) {
      drag($(dom));
    })(v)
  })
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
    <!-- var colors = ["#da9b9b", "#b5e4f3", "#6dc3de", "#c5c5e2", "#c2efbc"]; -->
    <!-- $(".line-box .box").each(function(i, v) { -->
        <!-- var div = $(this); -->
        <!-- div.css("background-color", colors[i]) -->
    <!-- }); -->
    <!-- var drag = function(obj) { -->
        <!-- obj.bind("mousedown", start); -->
        <!-- var boxPoints = {}, -->
            <!-- transform ="", -->
            <!-- height, -->
            <!-- width; -->
        <!-- function start(event) { -->
            <!-- //判断是否超出次数 -->
            <!-- if($('#times').val() <= 0){ -->
                <!-- layer.msg('Use out of times'); -->
                <!-- return false; -->
            <!-- } -->
            <!-- $('#note').val(1); -->
            <!-- if (event.button == 0) { -->
                <!-- var that = $(event.target.id), -->
                    <!-- id = event.target.id, -->
                    <!-- top = event.target.offsetTop, -->
                    <!-- left = event.target.offsetLeft, -->
                    <!-- item = {}; -->
                <!-- item.x = left; -->
                <!-- item.y = top; -->
                <!-- boxPoints[id] = item; -->
                <!-- transform = event.target.style.transform; -->
                <!-- width = event.target.offsetWidth; -->
                <!-- height = event.target.offsetHeight; -->
                <!-- event.target.style.opacity = '0.5'; -->
                <!-- gapX = event.clientX - obj[0].offsetLeft; -->
                <!-- gapY = event.clientY - obj[0].offsetTop; -->
                <!-- $(document).bind("mousemove", move); -->
                <!-- $(obj).bind("mouseup", stop); -->

            <!-- } -->
            <!-- return false; -->
        <!-- } -->

        <!-- function move(event) { -->
            <!-- obj.css({ -->
                <!-- "left": (event.clientX - gapX) + "px", -->
                <!-- "top": (event.clientY - gapY) + "px" -->
            <!-- }); -->
            <!-- return false; -->
        <!-- } -->

        <!-- function stop(event) { -->

            <!-- $(document).unbind("mousemove", move); -->
            <!-- $(document).unbind("mouseup", stop); -->
            <!-- event.target.style.opacity = '1'; -->
            <!-- var id = event.target.id, -->
                <!-- point = lineBoxPoint[id], -->
                <!-- point1 = boxPoints[id]; -->
            <!-- if (point) { -->
                <!-- if($("#note").val() == 1){ -->
                    <!-- var times = $('#times').val(); -->
                    <!-- $("#times").val(times-1); -->
                    <!-- $(".tims").text(times-1); -->
                    <!-- $("#note").val(0); -->
                <!-- } -->
                <!-- if (event.clientX > point.x && event.clientX < point.x + width && event.clientY > point.y && event.clientY < point.y + height) { -->
                    <!-- //alert(111);//放对位置 -->
                    <!-- $(this).css({ -->
                        <!-- "left": point.x + "px", -->
                        <!-- "top": point.y + "px", -->
                        <!-- "transform": "rotate(0)" -->
                    <!-- }); -->

                    <!-- return false -->
                <!-- } -->
            <!-- } -->
            <!-- $(this).css({ -->
                <!-- "left": point1.x + "px", -->
                <!-- "top": point1.y + "px", -->
            <!-- }); -->

            <!-- return false -->
        <!-- } -->
    <!-- }; -->
    <!-- var lineBoxPoint = {}; -->
    <!-- $(".line-box .box").each(function(i, v) { -->
        <!-- var that = $(v), -->
            <!-- id = that.data("id"), -->
            <!-- top = that.offset().top, -->
            <!-- left = that.offset().left, -->
            <!-- item = {}; -->
        <!-- item.x = left; -->
        <!-- item.y = top; -->
        <!-- lineBoxPoint[id] = item -->
    <!-- }); -->

    <!-- $(".wrapper .box").each(function(i, v) { -->
        <!-- (function(dom) { -->
            <!-- drag($(dom)); -->
        <!-- })(v) -->
    <!-- }) -->
</script>

</html>