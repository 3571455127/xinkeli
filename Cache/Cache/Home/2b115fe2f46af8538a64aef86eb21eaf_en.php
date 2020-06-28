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
     <script type="text/javascript" src="__PUBLIC__/www/js/jquery-3.3.1.min.js"></script> 
    <!--<script type="text/javascript" src="__PUBLIC__/www/js/jquery.min.js"></script>-->
<!--    <script type='text/javascript' src='__PUBLIC__/www/js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='__PUBLIC__/www/js/jquery.easing.1.3.js'></script>
    <script type='text/javascript' src='__PUBLIC__/www/js/camera.min.js'></script>-->
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

        <div class="header-one">
            <div class="top-header">
                <div class="container clearfix">
                    <div class="logo pull-left">
                        <a href="/index.php"><img
                                src="http://themes.digoodcms.com/logo/svg?main_color=061538&amp;sub_color=537590&amp;text_color=555"
                                alt="" width="240"></a>
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
                                                                title="<?php echo ($rss["catname"]); ?>"><?php echo ($rss["catname"]); ?></a></li><?php endif; endif; endforeach;?>
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

    <!-- about -->
    <div class="about">
        <div class="container">
            <div class="row">
                <!-- who -->
                <?php echo ($cont); ?>

                <!-- team -->
                <div class="about-team about-why">
                    <div class="top">
                        <h3>OUR TEAM</h3>
                        <div class="title">Capitalise on low hanging fruit to identify a ballpark value added activity
                            to beta test. Override the digital divide with additional clickthroughs from DevOps.</div>
                        <div class="hr-divider hr-divider-style-1"></div>
                    </div>
                    <div class="list clearfix">
                        <?php  $_result=M("History")->field("*")->where(" 1  and lang=1 AND status=1  AND catid=112")->order("listorder desc")->limit("100")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><!-- start -->
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="box-img">  <img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>"> </div>
                            <div class="name"><?php echo ($r["title"]); ?></div>
                            <div class="position"><?php echo ($r["keyword"]); ?></div>
                            <p><?php echo ($r["cont"]); ?></p>
                            <div class="team-block-social-icons">

                                <div class="social-icons-block icons-style-1">
                                    <ul>
                                        <li>
                                            <a href="#" title="Facebook">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Google Plus">
                                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Twitter">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Pinterest">
                                                <i class="fa fa-pinterest" aria-hidden="true"></i>
                                                <i class="fa fa-pinterest" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end --><?php endforeach; endif;?>
                        
                    </div>

                </div>

                <div class="about-swiper">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <p>Donec pulvinar quam dolor, vitae semper ligula pretium. Vitae turpis vel nisi
                                    vehicula pharetra. Nunc ullamcorper commodo facilisis. Donec dapibus sapien finibus
                                    elit semper.</p>
                                <h5 class="name">Arthur</h5>
                                <p>CEO - <a href="">Graphicfort</a></p>
                            </div>
                            <div class="swiper-slide">
                                <p>Maecenas fringilla mattis quam vitae blandit. Duis fermentum, purus vitae semper
                                    sollicitudin, lorem risus pretium nisl, arcu sed odio. Ut mattis rutrum enim, vel
                                    cursus turpis ullamcorper nec semper.</p>
                                <h5 class="name">Abelle</h5>
                                <p>Marketing - <a href="">Graphicfort</a></p>
                            </div>
                            <div class="swiper-slide">
                                <p>Phasellus egestas viverra felis in vulputate. Pellentesque habitant morbi tristique
                                    senectus et netus et malesuada fames ac turpis egestas. Fusce ut turpis nec justo
                                    rhoncus pellentesque.</p>
                                <h5 class="name">Corin</h5>
                                <p>Art Director - <a href="">Graphicfort</a></p>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
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

     <!--<script type="text/javascript" src="__PUBLIC__/www/js/jquery-3.3.1.min.js"></script>--> 
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