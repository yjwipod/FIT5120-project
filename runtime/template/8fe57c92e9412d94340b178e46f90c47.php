<?php /*a:2:{s:78:"C:\phpStudy\PHPTutorial\WWW\ChildHealth\application/index/view\index\home.html";i:1524240182;s:81:"C:\phpStudy\PHPTutorial\WWW\ChildHealth\application/index/view\layout\footer.html";i:1525246426;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Freelancer - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/home/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="/assets/home/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="/assets/home/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="/assets/home/css/freelancer.min.css" rel="stylesheet">

</head>

<body id="page-top">



<!-- Header -->
    <style>
        img { height: auto; width: auto\9; width:100%; }

    </style>
    <img style="max-width:100%;overflow:hidden;" src="/assets/image/profile.png" alt="">

<!-- Portfolio Grid Section -->
<section class="portfolio" id="portfolio">
    <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Portfolio</h2>
        <hr class="star-dark mb-5">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <a class="portfolio-item d-block mx-auto" href="<?php echo url('/introduction'); ?>">
                    <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                        <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="/assets/home/img/portfolio/cabin.png" alt="">
                </a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a class="portfolio-item d-block mx-auto" href="<?php echo url('/health'); ?>" target="_top">
                    <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                        <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="/assets/home/img/portfolio/cake.png" alt="">
                </a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a class="portfolio-item d-block mx-auto" href="<?php echo url('/user/'.$user_id); ?>" target="_top">
                    <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                        <div class="portfolio-item-caption-content my-auto w-100 text-center text-wuserhite">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="/assets/home/img/portfolio/circus.png" alt="">
                </a>
            </div>
        </div>
    </div>
</section>

<style>
    footer, .footer {
        height: 49px !important;
    }
    .footer p {
        color: #ffffff;
        margin: 0;
        padding: 15px 0;
        text-align: center;
        background: #1a252f;
        font-size: 12px;
    }
    .footer {
         padding-top: 0rem !important;
         padding-bottom: 0rem !important;
         background-color: #2c3e50;
         color: #fff;
    }
</style>
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


<!-- Bootstrap core JavaScript -->
<script src="/assets/home/vendor/jquery/jquery.min.js"></script>
<script src="/assets/home/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="/assets/home/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="/assets/home/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="/assets/home/js/jqBootstrapValidation.js"></script>
<script src="/assets/home/js/contact_me.js"></script>

<!-- Custom scripts for this template -->
<script src="/assets/home/js/freelancer.min.js"></script>

</body>

</html>
