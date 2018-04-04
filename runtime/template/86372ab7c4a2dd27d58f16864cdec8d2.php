<?php /*a:5:{s:80:"D:\phpStudy\PHPTutorial\WWW\childHealth\application/index/view\index\health.html";i:1522829260;s:79:"D:\phpStudy\PHPTutorial\WWW\childHealth\application/index/view\layout\base.html";i:1522821598;s:80:"D:\phpStudy\PHPTutorial\WWW\childHealth\application/index/view\layout\toper.html";i:1522822083;s:81:"D:\phpStudy\PHPTutorial\WWW\childHealth\application/index/view\layout\header.html";i:1522820695;s:81:"D:\phpStudy\PHPTutorial\WWW\childHealth\application/index/view\layout\footer.html";i:1522815622;}*/ ?>
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
                <li <?php if($action == 'user'): ?> class="am-active" <?php endif; ?>> <a href="<?php echo url('/user/'.$user_id); ?>" target="new"  > Welcome <?php echo $user_info['user_name']; ?> </a></li>
                <li ><a href="<?php echo htmlentities($site_info['logout_url']); ?>"   ><i class="am-icon-sign-out am-icon-sm"></i> Logout</a> </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</header>


<div class="detail">
    <div class="am-g am-g-fixed detail_bg" >
        <div  id='tips' >
            <p >游戏简介</p>
        </div>
        <div class="game_zoom" >
            <div class="box-wrapper" >
                <div class="wrapper">
                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <div class="box"  style="top:<?php echo $vo['top']; ?>px;background: url('<?php echo $vo['picpath']; ?>'); width: 100px ; height: 100px" id="b<?php echo $key+2?>" ></div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
            <div class="line-wrapper" >
                 <ul class="line-box" >
                       <li class="">
                            <div class="box" data-id="b2"></div>
                            <p>Healthiest</p>
                       </li>

                        <li class="">
                        <div class="box" data-id="b3"></div>
                        <p>Healthy</p>
                        </li>

                        <li class="">
                        <div class="box" data-id="b4"></div>
                        <p>Unhealthy</p>
                        </li>

                        <li class="">
                        <div class="box" data-id="b5"></div>
                        <p>Unhealthiest</p>
                        </li>
                        <div style="clear: both"></div>
                 </ul>
            </div>
        </div>
        <div  id='w_tips' style="height: 50px; width:420px; border:solid 1px #000000;background: #b2d6ef;margin:15px auto  ; ">
               <p style="text-align: center;line-height: 50px;">错误显示</p>
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
    // getPoints();

  var colors = ["#da9b9b", "#b5e4f3", "#6dc3de", "#c5c5e2", "#c2efbc"];
  $(".line-box .box").each(function(i, v) {
    var div = $(this)
    div.css("background-color", colors[i])
  })
  var selection = {},
    total = 10,
    index = 0, // 记录次数
    indexArray = [];
  var drag = function(obj) {
    obj.bind("mousedown", start);
    var boxPoints = {},
      transform ="",
      height,
      width;
    function start(event) {
      console.log(indexArray.length);
      checkLogin();

      if (indexArray.length >= 10) {
         layer.msg('Use out of times');
          return false;
      }

      indexArray.push(false);
      if (event.button == 0) {

        var that = $(event.target.id),
          id = event.target.id,
          top = event.target.offsetTop,
          left = event.target.offsetLeft,
          item = {};
        item.x = left;
        item.y = top;
        boxPoints[id] = item;
        transform = event.target.style.transform
        width = event.target.offsetWidth;
        height = event.target.offsetHeight;
        event.target.style.opacity = '0.5';

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
        checkIsRight();
      console.log("stop");
      $(document).unbind("mousemove", move);
      //$(event.target.id).unbind("mouseup", stop);
	  $("#" + event.target.id).unbind("mouseup", stop);
      event.target.style.opacity = '1';
      // 对比是否落在对应box上
      var id = event.target.id,
        point = lineBoxPoint[id],
        point1 = boxPoints[id],
        cpPoint = lineBoxPoint[$(".line-box .box").eq(0).data("id")],
        cpLeft = cpPoint.x,
        cpTop = cpPoint.y,
        cpRight = lineBoxPoint[$(".line-box .box").eq($(".line-box .box").length - 1).data("id")].x + width,
        lastIndex = indexArray.length-1;

      if (point) {
          console.log(event.target.id);
          console.log("event.clientX:"+event.clientX+ "pointx:"+point.x );
        if (event.clientX > point.x && event.clientX < point.x + width && event.clientY > point.y && event.clientY < point.y + height) {
          $(this).css({
            "left": point.x + "px",
            "top": point.y + "px",
            "transform": "rotate(0)"
          });
          selection[id] = true;
          indexArray[lastIndex] = true;
		  // $(".tims").text(total - indexArray.length) ;
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
	  // console.log('===');
	  // console.log(indexArray.length);
	  // console.log('===');
	  // $(".tims").text(total - indexArray.length);
      $(this).css({
        "left": point1.x + "px",
        "top": point1.y + "px"
      });
      return false;
    }
  }
  var lineBoxPoint = {};
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
  });

  function checkLogin(){
      var user_id = "<?php echo $user_id; ?>";
      if(user_id == 0 ){
          layer.msg('Please login !');
          return false;
      }
  }

   function checkIsRight(){
       var str1 = 0 ;
       $(".wrapper").find('div').each(function(i, v) {
            var str = $(this).css('top').split("px") ;
            str1 = str1+ parseInt(str[0]);
       });
       if(str1 >= 2500){
            layer.msg('Congratulations on the right operation');
            // setTimeout(function(),2000);

            return false;
       }
       // console.log(str1);
   }

   function  getPoints() {
         // $.post("<?php echo url('/user/getpoints'); ?>",{points:11},function(result){
         //      console.log(result);
         // });
         $.ajax({
              type: "post",
              url: "<?php echo url('/user/getpoints'); ?>",
              data: {points:11},
              cache:false,
              async:true,
              dataType: "json",
              success: function (result) {
                    console.log(result);
              }
         });
   }
</script>

</html>