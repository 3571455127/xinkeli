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
    <script type="text/javascript" src="__PUBLIC__/www/js/swiper.min.js"></script>
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
                                    <?php $n=0;foreach($Categorys as $key=>$r):if($n<100) :if( intval(0)==$r["parentid"] ) :++$n; if(!in_array($r[id],array(108,103,111,112,113))): ?><li>
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


    <!-- 路径导航 -->
    <div class="banner_link">
        <div class="container">
            <div class="row">
                <div class="b_crum_link_inner">
                    <a href="#">Home</a>
                    <a href="#">Product</a>
                    <a href="#">RFID CARDS</a>
                </div>
            </div>
        </div>
    </div>
<div class="faq">
    <div class="container">
        <div class="row">
            <div class="clearfix">
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <h5>FAQ</h5>
                    <div class="faqBox clearfix">
                        <ul>
                            <li>
                                <div class="clearfix pore">
                                    <div class="num col-gl-1 col-md-1 col-sm-1 col-xs-1">
                                        1
                                    </div>
                                    <div class="col-gl-11 col-md-11 col-sm-11 col-xs-11">
                                        How to find a Packing machine suitable for my product?
                                    </div>
                                </div>
                                <div class="submenu clearfix">
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                                    <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11 txt">
                                        <p> Tell us about your product details and packing requirements.
                                        </p>
                                        <p> 1. What kind of product you would like to pack?</p>
                                        <p> 2. The bag/sachet/pouch size of you need for the product packing ( the
                                            length,
                                            width).</p>
                                        <p> 3. The weight of each pack you need.</p>
                                        <p>4. You requirement for the machines and the bag style.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="clearfix pore">
                                    <div class="num col-gl-1 col-md-1 col-sm-1 col-xs-1">
                                        2
                                    </div>
                                    <div class="col-gl-11 col-md-11 col-sm-11 col-xs-11">
                                        Is engineer available to serve oversea?
                                    </div>
                                </div>
                                <div class="submenu clearfix">
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                                    <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11 txt">
                                        <p>Yes, but the travel fee is responsible by you.
                                            In order to save your cost, we will send you a video of full details machine
                                            installation and assist you till the end.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="clearfix pore">
                                    <div class="num col-gl-1 col-md-1 col-sm-1 col-xs-1">
                                        3
                                    </div>
                                    <div class="col-gl-11 col-md-11 col-sm-11 col-xs-11">
                                        How can we make sure about the machine quality after placing the order?
                                    </div>
                                </div>
                                <div class="submenu clearfix">
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                                    <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11 txt">
                                        <p>Before delivery, we will send you the pictures and videos for you to check
                                            the
                                            machine quality. </p>
                                        <p> And also you can arrange for quality checking by yourself or by your
                                            contacts in
                                            China.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="clearfix pore">
                                    <div class="num col-gl-1 col-md-1 col-sm-1 col-xs-1">
                                        4
                                    </div>
                                    <div class="col-gl-11 col-md-11 col-sm-11 col-xs-11">
                                        We are afraid you won't send us the machine after we send you the money?
                                    </div>
                                </div>
                                <div class="submenu clearfix">
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                                    <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11 txt">
                                        <p>We have our business license and certificate. And it is available for us to
                                            use
                                            alibaba trade assurance service guarantee your money, and guarantee your
                                            machine's on-time delivery and machine quality.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="clearfix pore">
                                    <div class="num col-gl-1 col-md-1 col-sm-1 col-xs-1">
                                        5
                                    </div>
                                    <div class="col-gl-11 col-md-11 col-sm-11 col-xs-11">
                                        Can you explain me the whole transaction process ?
                                    </div>
                                </div>
                                <div class="submenu clearfix">
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                                    <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11 txt">
                                        <p> 1.Sign the Contact.</p>
                                        <p> 2.Arrange 30% deposit to our factory.</p>
                                        <p> 3.Factory arrange production.</p>
                                        <p> 4.Test & detect the machine before shipping</p>
                                        <p> 5.Inspected by customer or third agency through online or site test.</p>
                                        <p> 6.Arrange the balance payment before shipment.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="clearfix pore">
                                    <div class="num col-gl-1 col-md-1 col-sm-1 col-xs-1">
                                        6
                                    </div>
                                    <div class="col-gl-11 col-md-11 col-sm-11 col-xs-11">
                                        Will you provide the delivery service?
                                    </div>
                                </div>
                                <div class="submenu clearfix">
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                                    <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11 txt">
                                        <p> Yes. Please inform us of your final destination, we will check with our
                                            shipping
                                            agent to quote the shipping cost for your reference before delivery.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>


                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <h5>Contact Details</h5>
                    <div class="infos">
                        <div class="clearfix">
                            <div class="col-lg-2  col-md-2 col-sm-2 col-xs-2"><i class="fa fa-phone fa-lg"></i></div>
                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                <p>0086-757-82529123</p>
                                <p>0086-757-82529129</p>
                            </div>
                        </div>
                        <div class="clearfix">
                            <div class="col-lg-2  col-md-2 col-sm-2 col-xs-2">
                                <i class="fa fa-envelope fa-lg"></i>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                <p>juan@azhceramics.com</p>
                                <p>0086-757-82529129</p>
                            </div>
                        </div>
                        <div class="clearfix">
                            <div class="col-lg-2  col-md-2 col-sm-2 col-xs-2">
                                <i class="fa fa-skype fa-lg"></i>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                <p>skype</p>
                                <p>juan@azhceramics.com</p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            
            <!-- 推荐列表 -->
            <div class="recommend">
                <h5> Recommend Products</h5>
                <div class="box">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php  $_result=M("product")->field("title,thumb,url,description,createtime")->where(" 1  and lang=1 AND status=1   AND posid =1")->order("listorder asc")->limit("5")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><!-- start -->
                                <div class="swiper-slide">
                                    <a href="<?php echo ($r["url"]); ?>" title="<?php echo ($r["title"]); ?>">
                                        <div class="box-img"><img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>"></div>
                                    </a>
                                    <h6><?php echo (str_cut($r["title"],25,'...')); ?></h6>
                                    <div class="mate">
                                        <span><i class="fa fa-bookmark"></i> <a href="<?php echo ($r["url"]); ?>"
                                                title="<?php echo ($r["title"]); ?>">News</a></span>
                                        <!--<span><i class="fa fa-user"></i> <a href="<?php echo ($r["url"]); ?>" title="<?php echo ($r["title"]); ?>">Digood</a></span>-->
                                        <span><i class="fa fa-clock-o"></i> <a href="<?php echo ($r["url"]); ?>"
                                                title="<?php echo ($r["title"]); ?>"><?php echo (todate($r["createtime"],'d')); ?>
                                                <?php echo (todate($r["createtime"],'M')); ?> <?php echo (todate($r["createtime"],'Y')); ?></a></span>
                                    </div>
                                    <hr>
                                    <a href="<?php echo ($r["url"]); ?>" title="<?php echo ($r["title"]); ?>">
                                        <p><?php echo (str_cut($r["description"],125,'...')); ?></p>
                                    </a>
                                </div>
                                <!-- end --><?php endforeach; endif;?>
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
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
<script type="text/javascript" src="__PUBLIC__/www/js/wow.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/www/js/jquery.fancybox.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/www/js/main.js"></script>
<script type="text/javascript">
    $('.counter').countUp();
</script>

</html>