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

    <div class="video">
        <div class="container">
            <div class="row">
                <div class="list clearfix">
                     <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i;?><!-- start -->
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="box">
                            <a data-fancybox="gallery" href="<?php echo ($r["videourl"]); ?>">
                                <div class="box-img"><img  src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>"></div>
                                <p><?php echo (str_cut($r["title"],25,'...')); ?></p>
                            </a>
                        </div>
                    </div>
                    <!-- end --><?php endforeach; endif; else: echo "" ;endif; ?>

                </div>
                <!--分页按钮-->
                 <div class="row" style="margin: 3% 0 5% 0">
                            <div class="col-xs-12 text-center pagingClick">
                                <?php echo ($pages); ?>
                            </div>
                        </div> 
                <hr>
                <!-- 推荐列表 -->
                <div class="recommend">
                    <h5> Recommend Products</h5>
                    <div class="box">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
<?php  $_result=M("product")->field("title,thumb,url,description")->where(" 1  and lang=1 AND status=1   AND posid =1")->order("listorder asc")->limit("5")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><div class="swiper-slide">
        <a href="<?php echo ($r["url"]); ?>" title="<?php echo ($r["title"]); ?>">
            <div class="box-img"><img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>"></div>
            <h6><?php echo (str_cut($r["title"],25,'...')); ?></h6>
            <p><?php echo (str_cut($r["description"],25,'...')); ?></p>
        </a>
        <div class="recommend-btn clearfix">
            <div type="button" class="btn1" data-toggle="modal" data-target="#myModal">
                Quick Inquiry
            </div>
            <a href="<?php echo ($r["url"]); ?>" title="<?php echo ($r["title"]); ?>" target="_blank" class="btn2"> View Details</a>
        </div>
    </div><?php endforeach; endif;?>   
                                
                                
                            </div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>

                    <!-- 弹窗表单 -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Quick Inquiry</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="clearfix" method="post" action="index.php?g=Home&amp;a=message"
                                        onsubmit="return beforeSubmit2(this);">
                                        <div class="modal-box">
                                            <p>Name: </p>
                                            <input placeholder="Name" type="text" name="name">
                                        </div>
                                        <div class="modal-box">
                                            <p>E-mail: </p>
                                            <input placeholder="Email" type="text" name="email">
                                        </div>
                                        <div class="modal-box">
                                            <p>Phone Number:</p>
                                            <input placeholder="Phone" type="text" name="phone">
                                        </div>
                                        <div class="modal-box">
                                            <p>Consulting Information:</p>
                                            <textarea rows="3" placeholder="Please enter your consulting information."
                                                name="message"></textarea>
                                        </div>
                                        <input type="submit" value="Send Inquiry" class="footer-sub">
                                    </form>
                                </div>
                                <div class="modal-footer">

                                </div>
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