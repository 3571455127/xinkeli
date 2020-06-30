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

<div class="product-show">
    <div class="container">
        <div class="row">
            <div class="clearfix">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <!-- search -->
                    <div class="product-search">
                        <form action="<?php echo U('Search/index');?>" method="GET">
                            <input type="search" placeholder="Search..." name="keyword">
                            <input type="hidden" name="module" value="Product">
                            <button type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>

                    <!-- nav -->
                    <div class="nav-right">
                        <div class="sidebar-nav" id="icos">
                            <ul class="first-nav">
                                <li><a href="/index.php">Home</a></li>
                                <?php $n=0;foreach($Categorys as $key=>$r):if($n<100) :if( intval(73)==$r["parentid"] ) :++$n;?><li>
                                        <a href="<?php if($r[child] == 1) : ?>javascript:;<?php else : echo ($r["url"]); endif;?>"
                                            title="<?php echo ($r["catname"]); ?>"><?php echo ($r["catname"]); ?> <?php if($r[child] == 1) : ?><i
                                                class="fa fa-angle-right"></i><?php endif;?></a>
                                        <?php if($r[child] == 1) : ?>
                                        <ul class="second-nav">
                                            <?php $n=0;foreach($Categorys as $key=>$rs):if($n<99) :if( intval($r[id])==$rs["parentid"] ) :++$n;?><li>
                                                    <a href="<?php if($rs[child] == 1) : ?>javascript:;<?php else : echo ($rs["url"]); endif;?>"
                                                        title="<?php echo ($rs["catname"]); ?>"><?php echo ($rs["catname"]); ?> <?php if($rs[child] == 1) : ?><i
                                                            class="fa fa-angle-right"></i><?php endif;?></a>
                                                    <?php if($rs[child] == 1) : ?>
                                                    <ul class="three_nav">
                                                        <?php $n=0;foreach($Categorys as $key=>$rss):if($n<99) :if( intval($rs[id])==$rss["parentid"] ) :++$n;?><li><a href="<?php echo ($rss["url"]); ?>"
                                                                    title="<?php echo ($rss["catname"]); ?>"><?php echo ($rss["catname"]); ?></a></li><?php endif; endif; endforeach;?>
                                                    </ul>
                                                    <?php endif;?>
                                                </li><?php endif; endif; endforeach;?>
                                        </ul>
                                        <?php endif;?>
                                    </li><?php endif; endif; endforeach;?>
                            </ul>
                        </div>
                    </div>

                    <!-- hot   -->
                    <div class="hot">
                        <?php  $_result=M("product")->field("title,thumb,url")->where(" 1  and lang=1 AND status=1   AND posid =1")->order("listorder asc")->limit("5")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><!-- statr -->
                            <a href="<?php echo ($r["url"]); ?>" title="<?php echo ($r["title"]); ?>" class="clearfix">
                                <div class="box-img col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>">
                                </div>
                                <div class="title col-lg-8 col-md-8 col-sm-8 col-xs-8"><?php echo (str_cut($r["title"],25,'...')); ?>
                                </div>
                            </a>
                            <!-- end --><?php endforeach; endif;?>
                    </div>

                </div>

                <div class="col-lg-9 col-md-9 col-sm-9">
                    <div class="sw clearfix">
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            <div class="swiper-container gallery-top">
                                <div class="swiper-wrapper">
                                    <?php if(is_array($pic)): $i = 0; $__LIST__ = array_slice($pic,0,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i;?><!-- start -->
                                        <div class="swiper-slide">
                                            <img src="<?php echo ($r["filepath"]); ?>" alt="<?php echo ($title); ?>">
                                        </div>
                                        <!-- end --><?php endforeach; endif; else: echo "" ;endif; ?>

                                </div>

                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-container gallery-thumbs">
                                <div class="swiper-wrapper">
                                    <?php if(is_array($pic)): $i = 0; $__LIST__ = array_slice($pic,0,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i;?><!-- start -->
                                        <div class="swiper-slide">
                                            <img src="<?php echo ($r["filepath"]); ?>" alt="<?php echo ($title); ?>">
                                        </div>
                                        <!-- end --><?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>

                            </div>
                        </div>
                        <div class="txt col-lg-7  col-md-7 col-sm-7">
                            <h5><?php echo ($title); ?></h5>
                            <div class="content">
                                <?php echo ($jianjie); ?>
                            </div>
                        </div>
                    </div>

                    <!-- 内容 -->
                    <div class="pro-content">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active"><a href="#home" aria-controls="home" data-toggle="tab">Product
                                    Details</a></li>
                            <li><a href="#profile" aria-controls="profile" data-toggle="tab">Profile</a>
                            </li>
                            <li><a href="#messages" aria-controls="messages" data-toggle="tab">Inquiry</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">

                            <div class="tab-pane active" id="home">
                                <?php echo ($content); ?>
                            </div>

                            <div class="tab-pane" id="profile">
                                <?php echo ($parameter); ?>
                            </div>
                            <div class="tab-pane" id="messages">

                                <form class="clearfix" method="post" action="index.php?g=Home&amp;a=message"
                                    onsubmit="return beforeSubmit2(this);">
                                    <div class="box clearfix">
                                        <div class="col-lg-3 col-md-3">name<span>*</span> :</div>
                                        <div class="col-lg-9"> <input class="form-control" placeholder="Name"
                                                type="text" name="name"></div>
                                    </div>
                                    <div class="box clearfix">
                                        <div class="col-lg-3">Email<span>*</span> :</div>
                                        <div class="col-lg-9"><input class="form-control" placeholder="Email"
                                                type="text" name="email"></div>
                                    </div>
                                    <div class="box clearfix">
                                        <div class="col-lg-3">Phone<span>*</span> :</div>
                                        <div class="col-lg-9"> <input class="form-control" placeholder="Phone"
                                                type="text" name="phone"></div>
                                    </div>
                                    <div class="box clearfix">
                                        <div class="col-lg-3">Message<span>*</span> :</div>
                                        <div class="col-lg-9"> <textarea class="form-control" rows="3" name="message"
                                                placeholder="Message ..."></textarea></div>
                                    </div>
                                    <div class="box clearfix">
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-9"> <input type="submit" value="Send Inquiry"
                                                class="footer-sub"></div>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>

                    <!-- 推荐-->
                    <div class="pro-related">
                        <h5>Related Products</h5>
                        <div class="swiper-container">
                            <div class="swiper-wrapper">


                                <?php  $_result=M("product")->field("title,thumb,url")->where(" 1  and lang=1 AND status=1   AND posid =1")->order("listorder asc")->limit("5")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><!-- start -->
                                    <div class="swiper-slide">
                                        <a href="<?php echo ($r["url"]); ?>" title="<?php echo ($r["title"]); ?>">
                                            <img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>">
                                            <h6><?php echo (str_cut($r["title"],25,'...')); ?></h6>
                                        </a>
                                    </div>
                                    <!-- end --><?php endforeach; endif;?>
                            </div>
                        </div>
                        <div class="pro-button">
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
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
<script type="text/javascript" src="__PUBLIC__/www/js/wow.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/www/js/jquery.fancybox.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/www/js/main.js"></script>
<script type="text/javascript">
    $('.counter').countUp();
</script>

</html>