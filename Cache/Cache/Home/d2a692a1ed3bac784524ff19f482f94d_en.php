<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta name="keywords" content="<?php echo ($seo_keywords); ?>" />
    <meta name="description" content="<?php echo ($seo_description); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <!-- wap -->
    <meta name="wap-font-scale" content="no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="format-detection" content="telephone=yes" />
    <meta name="Robots" content="all">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <title><?php if(MODULE_NAME != 'Index') : echo ($seo_title); else : echo ($site_name); endif;?></title>

    <link rel="stylesheet" href="__PUBLIC__/www/css/bootstrap.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/swiper.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/font-awesome.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/animate.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/flaticon.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/camera.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/main.css">
    <script type='text/javascript' src='__PUBLIC__/www/js/jquery.min.js'></script>
</head>

<body>

    <!-- 头部 -->
    <header>
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <h1>We are leading consultant firm!</h1>
                </div>
            </div>
        </div>

        <div style="background-color: #fff;">
            <div class="header-one">
                <div class="top-header">
                    <div class="container clearfix">
                        <div class="logo pull-left">
                            <a href="/index.php"><img src="/Public/www/images/logo.png" alt="" width="240"></a>
                        </div>
                        <div class="address-wrapper pull-right">
                            <ul>
                                <li class="address">
                                    <i class="icon fa fa-phone"></i>
                                    <h6>Phone:</h6>
                                    <p>10-00000-123</p>
                                </li>
                                <li class="address">
                                    <i class="icon fa fa-envelope"></i>
                                    <h6>Mail us:</h6>
                                    <p>supporthere@mail.com</p>
                                </li>
                                <li class="address">
                                    <i class="icon fa fa-skype"></i>
                                    <h6>Skype:</h6>
                                    <p>supporthere</p>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <div class="navs theme-menu-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="navsbg clearfix">
                            <div class="pull-left">
                                <ul class="level">
                                    <li><a href="/index.php">hoem</a></li>
                                    <?php $n=0;foreach($Categorys as $key=>$r):if($n<6) :if( intval(0)==$r["parentid"] ) :++$n; if(!in_array($r[id],array(108,103))): ?><li>
                                                <a href="<?php echo ($r["url"]); ?>" title="<?php echo ($r["catname"]); ?>"><?php echo ($r["catname"]); ?></a>
                                                <?php if($r[child] == 1) : ?>
                                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                                                <ul class="secondary">
                                                    <?php $n=0;foreach($Categorys as $key=>$rs):if($n<99) :if( intval($r[id])==$rs["parentid"] ) :++$n;?><li>
                                                            <a href="<?php echo ($rs["url"]); ?>" title="<?php echo ($rs["catname"]); ?>"><?php echo ($rs["catname"]); ?></a>
                                                            <?php if($rs[child] == 1) : ?>
                                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                                            <ul class="third">
                                                                <?php $n=0;foreach($Categorys as $key=>$rss):if($n<99) :if( intval($rs[id])==$rss["parentid"] ) :++$n;?><li><a href="<?php echo ($rss["url"]); ?>"
                                                                            title="<?php echo ($rss["catname"]); ?>"><?php echo ($rss["catname"]); ?></a>
                                                                    </li><?php endif; endif; endforeach;?>
                                                            </ul>
                                                            <?php endif;?>
                                                        </li><?php endif; endif; endforeach;?>
                                                </ul>
                                                <?php endif;?>
                                            </li><?php endif; endif; endif; endforeach;?>
                                </ul>

                            </div>
                            <div class="pull-right">
                                <button type="button" class="dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false"><i class="fa fa-search" aria-hidden="true"></i></button>
                                <form action="#" class="dropdown-menu">
                                    <input type="text" placeholder="Enter Your Search">
                                    <button><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </header>
<div class="banner clearfix">
    
    <div class="camera_wrap" id="camera_demo">
        <div data-src="/Public/www/images/slide-1.jpg">
            <div class="camera_caption">
                <div class="container">
                    <div class="row">

                        <p class="wow fadeInUp animated">The government they survive artical of fortune</p>
                        <h1 class="wow fadeInUp animated" data-wow-delay="0.2s">We IMPROVE YOUR <br>SALES EFFICIENCY
                        </h1>
                        <a href="#" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.39s">CONTACT US</a>
                    </div>

                </div>

            </div>
        </div>

        <div data-src="/Public/www/images/slide-2.jpg">
            <div class="camera_caption">
                <div class="container">
                    <p class="wow fadeInUp animated">The government they survive artical of fortune</p>
                    <h1 class="wow fadeInUp animated" data-wow-delay="0.2s">We IMPROVE YOUR <br>SALES EFFICIENCY
                    </h1>
                    <a href="#" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.39s">CONTACT US</a>
                </div>

            </div>
        </div>

        <div data-src="/Public/www/images/slide-3.jpg">
            <div class="camera_caption">
                <div class="container">
                    <p class="wow fadeInUp animated">The government they survive artical of fortune</p>
                    <h1 class="wow fadeInUp animated" data-wow-delay="0.2s">We IMPROVE YOUR <br>SALES EFFICIENCY
                    </h1>
                    <a href="#" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.39s">CONTACT US</a>
                </div>

            </div>
        </div>

    </div>
    
</div>

</div>

<div class="index">
    <!-- section-spacing -->
    <div class="section-spacing">
        <div class="swiper-container">
            <div class="swiper-wrapper">

                <!-- start -->
                <div class="swiper-slide">
                    <div class="box">
                        <img src="/Public/www/images/1.png" alt="">
                        <h4><a href="#">Consumer Insights</a></h4>
                        <p>The east side to a deluxe apartment in move on up to the east side</p>
                    </div>
                </div>
                <!-- end -->

                <div class="swiper-slide">
                    <div class="box">
                        <img src="/Public/www/images/2.png" alt="">
                        <h4><a href="#">Emerging Ideas</a></h4>
                        <p>The east side to a deluxe apartment in move on up to the east side</p>
                    </div>

                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="/Public/www/images/3.png" alt="">
                        <h4><a href="#">Thought Leadership</a></h4>
                        <p>The east side to a deluxe apartment in move on up to the east side</p>
                    </div>

                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="/Public/www/images/4.png" alt="">
                        <h4><a href="#">Marketing Goals</a></h4>
                        <p>The east side to a deluxe apartment in move on up to the east side</p>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- ABOUT OUR COMPANY -->
    <div class="index-about">
        <?php getcatvar('page','id = 74','sycont');?>
    </div>




    <!-- SERVICES -->
    <div class="index-services">
        <div class="container">
            <div class="row">
                <?php getcatvar('page','id = 111','sycont');?>
            </div>

        </div>

    </div>

    <!-- OUR PRODUCTS -->
    <div class="index-product">
        <div class="container">
            <div class="row">
                <h3>OUR PRODUCTS</h3>
                <p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today stillers
                </p>

                <div class="content clearfix">
                    <?php  $_result=M("Product")->field("*")->where(" 1  and lang=1 AND status=1   AND posid =1")->order("listorder desc")->limit("6")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><!-- statr -->
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="box">
                                <div class="box-img"><img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>"></div>
                                <a href="<?php echo ($r["url"]); ?>" title="<?php echo ($r["title"]); ?>" class="hover-content">
                                    <div class="text clearfix">
                                        <div class="name"><?php echo ($r["title"]); ?></div>
                                        <p><?php echo ($r["jianjie"]); ?></p>
                                        <span class="details"><i class="fa fa-long-arrow-right"
                                                aria-hidden="true"></i></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- end --><?php endforeach; endif;?>
                </div>
                <div class="view-all">
                    <a href="/product.html" class="v-more">VIEW ALL</a>
                </div>

            </div>

        </div>

    </div>

    <!-- testimonial-section -->
    <div class="testimonial-section">
        <div class="container">
            <div class="row">
                <div class="testimonial-sw">
                    <div class="box">
                        <div class="bg">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">

                                    <!-- start -->
                                    <div class="swiper-slide">
                                        <div class="content">
                                            <p>“ A tale of a fateful trip that started from this tropic port aboard
                                                this
                                                tiny ship today still wanted by the government they survive as
                                                soldiers
                                                of fortune to a deluxe apartment in the sky moving on up to the east
                                                side a family. ”</p>
                                            <div class="name">
                                                <h6>Rashed Ka.</h6>
                                                <span>Founder, Mnc Inc.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end -->

                                    <div class="swiper-slide">
                                        <div class="content">
                                            <p>“ A tale of a fateful trip that started from this tropic port aboard
                                                this
                                                tiny ship today still wanted by the government they survive as
                                                soldiers
                                                of fortune to a deluxe apartment in the sky moving on up to the east
                                                side a family. ”</p>
                                            <div class="name">
                                                <h6>Shawn Michael</h6>
                                                <span>Founder, Mnc Inc.</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="content">
                                            <p>“ A tale of a fateful trip that started from this tropic port aboard
                                                this
                                                tiny ship today still wanted by the government they survive as
                                                soldiers
                                                of fortune to a deluxe apartment in the sky moving on up to the east
                                                side a family. ”</p>
                                            <div class="name">
                                                <h6>Mahfuz Riad</h6>
                                                <span>Founder, Mnc Inc.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- OUR TEAM -->
    <div class="index-team">
        <div class="container">
            <div class="row">
                <h3>OUR TEAM</h3>
                <p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today stillers
                </p>
                <div class="content clearfix">
                    <?php  $_result=M("History")->field("*")->where(" 1  and lang=1 AND status=1  AND catid=112  AND posid =1")->order("listorder desc")->limit("4")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><!-- start -->
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="team-member">
                                <div class="image-box">
                                    <img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>">
                                    <div class="overlay">
                                        <div class="hover-content">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                            <p><?php echo ($r["cont"]); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="text">
                                    <h6><?php echo ($r["title"]); ?></h6>
                                    <span><?php echo ($r["keyword"]); ?></span>
                                </div>
                            </div>
                        </div>
                        <!-- end --><?php endforeach; endif;?>
                </div>

            </div>

        </div>

    </div>

    <!-- COMPANY SUCCESS -->
    <div class="index-success">
        <div class="container">
            <div class="row">
                <div class="bg">
                    <h6>Company Success</h6>
                    <h2>Some fun facts about our consulting</h2>
                    <div class="box clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <span class="counter" data-counter-time="1500" data-counter-delay="50">30</span><i>+</i>
                            <p>Years of Excellence</p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <span class="counter" data-counter-time="1500" data-counter-delay="50">100</span><i>%</i>
                            <p>Client Satisfaction</p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <span class="counter" data-counter-time="1500" data-counter-delay="50">53</span><i>k</i>
                            <p>Cases Completed</p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <span class="counter" data-counter-time="1500" data-counter-delay="50">24</span>
                            <p>Consultants</p>
                        </div>
                    </div>
                    <a href="#" class="theme-button-one">VIEW CASE STUDIES</a>
                </div>


            </div>
        </div>
    </div>

    <!-- FREE CONSULTATION -->
    <div class="consulation">
        <div class="container">
            <div class="row">
                <h3>FREE CONSULTATION</h3>
                <p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today stillers
                </p>
                <div class="content clearfix">
                    <div class="img col-lg-5 col-md-5 col-sm-5">
                        <div class="box-img"><img src="/Public/www/images/consulation.jpg" alt=""></div>
                    </div>
                    <div class="txt col-lg-7 col-md-7 col-sm-7">
                        <form class="clearfix" method="post" action="index.php?g=Home&amp;a=message"
                            onsubmit="return beforeSubmit2(this);">
                            <div class="clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input placeholder="Name *" type="text" name="name">
                                </div>
                                <div class="col-lg-6  col-md-6 col-sm-6">
                                    <input placeholder="Email *" type="text" name="email">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <textarea class="" rows="3" name="message" placeholder="Message ..."></textarea>
                            </div>
                            <button type="submit" class="btns">GET A QUOTES</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- LATEST NEWS -->
    <div class="index-news">
        <div class="container">
            <div class="row">
                <h3>LATEST NEWS</h3>
                <p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today stillers
                </p>
                <div class="content">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php  $_result=M("Article")->field("*")->where(" 1  and lang=1 AND status=1  AND catid=110  AND posid =1")->order("listorder desc")->limit("20")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><!-- start -->
                                <div class="swiper-slide">
                                    <a href="<?php echo ($r["url"]); ?>" title="<?php echo ($r["title"]); ?>">
                                        <div class="box-img">
                                            <img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>">
                                            <div class="date"><?php echo (todate($r["createtime"],'d')); ?>
                                                <?php echo (todate($r["createtime"],'M')); ?> <?php echo (todate($r["createtime"],'Y')); ?></div>
                                        </div>
                                        <div class="title"><?php echo (str_cut($r["title"],30,'...')); ?></div>
                                        <span>READ MORE</span>
                                    </a>
                                </div>
                                <!-- end --><?php endforeach; endif;?>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- OUR PARTNERS -->
    <div class="partners">
        <div class="container">
            <div class="row">
                <div class="txt col-lg-3 col-md-3 col-sm-3 col-xs-3">OUR PARTNERS</div>
                <div class="partners-sw col-lg-9 col-md-9 col-sm-9 col-xs-9">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php  $_result=M("Partner")->field("*")->where(" 1  and lang=1 AND status=1  AND catid=113")->order("listorder desc")->limit("10")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><!-- start -->
                                <div class="swiper-slide">
                                    <div class="box-img"><img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>"></div>
                                </div>
                                <!-- end --><?php endforeach; endif;?>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- 底部 -->
    <footer>
        <!-- top -->
        <button class="scroll-top tran3s">
            <i class="fa fa-angle-up" aria-hidden="true"></i>
        </button>

        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="widget col-lg-4 col-md-4 col-sm-6">
                        <div class="footer-logo"><a href="" title=""><img
                                    src="http://themes.digoodcms.com/logo/svg?main_color=fff&sub_color=fff&text_color=fff"
                                    alt=""></a></div>
                        <p>That started from this tropic port aboard this tiny ship today still want by theam government
                            they survive on up to thetre east side to a deluxe as soldiers of artics fortune.</p>
                        <div class="queries"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span> Any
                            Queries : <a href="#" class="one-pan-link-mark">(+1) 234 567 900</a></div>
                    </div>

                    <div class="recent col-lg-3 col-md-3 col-sm-6">
                        <h6 class="title">RECENT POSTS</h6>
                        <ul>

                            <!-- start -->
                            <li class="clearfix">
                                <img src="__PUBLIC__/www/images/footer1.jpg" alt="" class="pull-left">
                                <div class="post pull-left">
                                    <a href="#" class="one-pan-link-mark">Till wanted by theam govern they survive as
                                        soldiers.</a>
                                    <div class="date"><i class="fa fa-calendar-o" aria-hidden="true"></i> Feb 06, 2018
                                    </div>
                                </div>
                            </li>
                            <!-- end -->

                            <li class="clearfix">
                                <img src="__PUBLIC__/www/images/footer2.jpg" alt="" class="pull-left">
                                <div class="post pull-left">
                                    <a href="#" class="one-pan-link-mark">World don't move to beat of just one drum.</a>
                                    <div class="date"><i class="fa fa-calendar-o" aria-hidden="true"></i> Mar 20, 2018
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="footer-list col-lg-5 col-md-5 col-sm-6">
                        <h6 class="title">SOLUTIONS</h6>
                        <div class="box clearfix">
                            <div class="col-md-6">
                                <ul>
                                    <li><a href="#" class="one-pan-link-mark">Travel and Aviation</a></li>
                                    <li><a href="#" class="one-pan-link-mark">Business Services</a></li>
                                    <li><a href="#" class="one-pan-link-mark">Consumer Products</a></li>
                                    <li><a href="#" class="one-pan-link-mark">Financial Services</a></li>
                                    <li><a href="#" class="one-pan-link-mark">Software Research</a></li>
                                    <li><a href="#" class="one-pan-link-mark">Quality Resourcing</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li><a href="#" class="one-pan-link-mark">Travel and Aviation</a></li>
                                    <li><a href="#" class="one-pan-link-mark">Business Services</a></li>
                                    <li><a href="#" class="one-pan-link-mark">Consumer Products</a></li>
                                    <li><a href="#" class="one-pan-link-mark">Financial Services</a></li>
                                    <li><a href="#" class="one-pan-link-mark">Software Research</a></li>
                                    <li><a href="#" class="one-pan-link-mark">Quality Resourcing</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="info">
            <div class="container">
                <div class="row">
                    <div class="left col-lg-6 col-md-6 col-sm-6">
                        Copyright 2018 All Right Reserved.
                    </div>
                    <div class="right col-lg-6 col-md-6 col-sm-6">
                        <ul>
                            <li><a href="#" class="one-pan-link-mark">About</a></li>
                            <li><a href="#" class="one-pan-link-mark">Solutions</a></li>
                            <li><a href="#" class="one-pan-link-mark">FAQ’s</a></li>
                            <li><a href="#" class="one-pan-link-mark">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
<!-- js -->
<script type='text/javascript' src='__PUBLIC__/www/js/jquery.mobile.customized.min.js'></script>
<script type='text/javascript' src='__PUBLIC__/www/js/jquery.easing.1.3.js'></script>
<script type='text/javascript' src='__PUBLIC__/www/js/camera.min.js'></script>
<script type="text/javascript" src="__PUBLIC__/www/js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/www/js/jquery.countup.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/www/js/bootstrap.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/www/js/swiper.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/www/js/wow.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/www/js/jquery.fancybox.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/www/js/main.js"></script>
<script type="text/javascript">
    $('.counter').countUp();
</script>

</html>