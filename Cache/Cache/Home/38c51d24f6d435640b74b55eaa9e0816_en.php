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

    <!-- news-show -->
    <div class="news-show">
        <div class="news-show-box container">
            <div class="row">
                <div class="clearfix">
                    <div class="left col-lg-9 col-md-9 col-sm-12">
                        <!-- 内容 -->
                        <div class="article">
                            <img src="<?php echo ($thumb); ?>" alt="<?php echo ($title); ?>">
                            <div class="dg-header">
                                <h5><?php echo ($title); ?></h5>
                                <div class="time"><?php echo (todate($createtime,'d')); ?> <?php echo (todate($createtime,'M')); ?> <?php echo (todate($createtime,'Y')); ?></div>
                            </div>
                            <div class="content">
                               <?php echo ($content); ?>
                            </div>
                        </div>
                        <!-- 推荐新闻 -->
                        <div class="article-related">
                            <h5>Related News</h5>
                            <div class="article-related-box clearfix">
                                <?php  $_result=M("Article")->field("id,catid,url,title,title_style,keywords,description,thumb,createtime")->where(" 1  and lang=1 AND status=1  AND catid=110  AND posid =1")->order("listorder desc")->limit("4")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><a href="<?php echo ($r["url"]); ?>" title="<?php echo ($r["title"]); ?>" class="col-lg-6 col-md-6 col-sm-6">
                                    <strong class="time">[<?php echo (todate($r["createtime"],'Y-m-d')); ?>]</strong>
                                    <span><?php echo (str_cut($r["title"],30,'...')); ?></span>
                                </a><?php endforeach; endif;?> 

                            </div>

                        </div>

                    </div>
                    <div class="nav-right col-lg-3 col-md-3 col-sm-12">
                        <form  action="<?php echo U('Search/index');?>" method="GET">
                        <!-- 搜索 -->
                        <div class="aside-search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for..."  name="keyword">
                                <input type="hidden" name="module" value="Product">
                                <span class="input-group-btn">
                                    <button class="btn btn-default btn-primary" type="submit">button</button>
                                </span>
                            </div>
                        </div>
                        </form>
                        <div class="sidebar-nav" id="icos">
                            <ul class="first-nav">
                                <li><a href="/index.php">Home</a></li>
                                <?php $n=0;foreach($Categorys as $key=>$r):if($n<100) :if( intval(73)==$r["parentid"] ) :++$n;?><li>
<a href="<?php if($r[child] == 1) : ?>javascript:;<?php else : echo ($r["url"]); endif;?>" title="<?php echo ($r["catname"]); ?>"><?php echo ($r["catname"]); ?> <?php if($r[child] == 1) : ?><i class="fa fa-angle-right"></i><?php endif;?></a>
<?php if($r[child] == 1) : ?>
                                    <ul class="second-nav">
                                        <?php $n=0;foreach($Categorys as $key=>$rs):if($n<99) :if( intval($r[id])==$rs["parentid"] ) :++$n;?><li>
<a href="<?php if($rs[child] == 1) : ?>javascript:;<?php else : echo ($rs["url"]); endif;?>" title="<?php echo ($rs["catname"]); ?>"><?php echo ($rs["catname"]); ?> <?php if($rs[child] == 1) : ?><i class="fa fa-angle-right"></i><?php endif;?></a>
                                                <?php if($rs[child] == 1) : ?>
                                            <ul class="three_nav">
                                                <?php $n=0;foreach($Categorys as $key=>$rss):if($n<99) :if( intval($rs[id])==$rss["parentid"] ) :++$n;?><li><a href="<?php echo ($rss["url"]); ?>" title="<?php echo ($rss["catname"]); ?>"><?php echo ($rss["catname"]); ?></a></li><?php endif; endif; endforeach;?>
                                            </ul>
                                                <?php endif;?>
                                        </li><?php endif; endif; endforeach;?>
                                    </ul>
<?php endif;?>
                                </li><?php endif; endif; endforeach;?>
                            </ul>
                        </div>

                        <ul class="digood-related">
<?php  $_result=M("product")->field("title,thumb,url")->where(" 1  and lang=1 AND status=1   AND posid =1")->order("listorder asc")->limit("5")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><li><a href="<?php echo ($r["url"]); ?>" title="<?php echo ($r["title"]); ?>" class="clearfix">
                                    <img class="col-lg-4 col-md-4 col-sm-4 col-xs-4" src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>">
                                    <h6 class="col-lg-8 col-md-8 col-sm-8 col-xs-8"><?php echo (str_cut($r["title"],25,'...')); ?></h6>
                                </a>
                            </li><?php endforeach; endif;?>

                        </ul>
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