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

    <div class="product-show">
        <div class="container">
            <div class="row">
                <div class="clearfix">
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <!-- search -->
                        <div class="product-search">
                            <form  action="<?php echo U('Search/index');?>" method="GET">
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
                        </div>

                        <!-- hot   -->
                        <div class="hot">
<?php  $_result=M("product")->field("title,thumb,url")->where(" 1  and lang=1 AND status=1   AND posid =1")->order("listorder asc")->limit("5")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><!-- statr -->
                            <a href="<?php echo ($r["url"]); ?>" title="<?php echo ($r["title"]); ?>" class="clearfix">
                                <div class="box-img col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>">
                                </div>
                                <div class="title col-lg-8 col-md-8 col-sm-8 col-xs-8"><?php echo (str_cut($r["title"],25,'...')); ?></div>
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
                                            <img src="<?php echo ($r["filepath"]); ?>"  alt="<?php echo ($title); ?>">
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
                                            <img src="<?php echo ($r["filepath"]); ?>"  alt="<?php echo ($title); ?>">
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

                                    <div digood-id="dg-product-inquiry-form">
                                        <form class="form-horizontal bv-form" role="form" id="dg-InquiryForm" action=""
                                            method="post" target="_top" novalidate="novalidate"><button type="submit"
                                                class="bv-hidden-submit"
                                                style="display: none; width: 0px; height: 0px;"></button>
                                            <button type="submit" class="bv-hidden-submit"
                                                style="display: none; width: 0px; height: 0px;"></button><button
                                                type="submit" class="bv-hidden-submit"
                                                style="display: none; width: 0px; height: 0px;"></button><button
                                                type="submit" class="bv-hidden-submit"
                                                style="display: none; width: 0px; height: 0px;"></button>
                                            <div class="form-group has-feedback">
                                                <label for="dg-email" class="col-sm-3 control-label">
                                                    <small style="color:red">*</small> From
                                                </label>
                                                <div class="col-sm-7 col-md-6">
                                                    <input type="email" class="form-control" id="dg-email" name="email"
                                                        minlength="8" maxlength="50" required=""
                                                        placeholder="Enter your email address" value=""
                                                        data-bv-field="email"><i class="form-control-feedback"
                                                        data-bv-icon-for="email" style="display: none;"></i>
                                                    <small class="help-block" data-bv-validator="emailAddress"
                                                        data-bv-for="email" data-bv-result="NOT_VALIDATED"
                                                        style="display: none;">The value is not a valid email
                                                        address</small><small class="help-block"
                                                        data-bv-validator="notEmpty" data-bv-for="email"
                                                        data-bv-result="NOT_VALIDATED" style="display: none;">The email
                                                        address is required</small><small class="help-block"
                                                        data-bv-validator="stringLength" data-bv-for="email"
                                                        data-bv-result="NOT_VALIDATED" style="display: none;">Please
                                                        enter a
                                                        value with valid length</small></div>
                                            </div>

                                            <div class="form-group has-feedback">
                                                <label for="dg-message" class="col-sm-3 control-label">
                                                    <small style="color:red">*</small>
                                                    Message</label>
                                                <div class="col-sm-6">
                                                    <textarea class="form-control" rows="10" id="dg-message"
                                                        name="message"
                                                        placeholder="Your message must be between 20-3,000 characters!"
                                                        minlength="20" maxlength="2000" required=""
                                                        data-bv-field="message"></textarea><i
                                                        class="form-control-feedback" data-bv-icon-for="message"
                                                        style="display: none;"></i>
                                                    <small class="help-block" data-bv-validator="notEmpty"
                                                        data-bv-for="message" data-bv-result="NOT_VALIDATED"
                                                        style="display: none;">The message is required</small><small
                                                        class="help-block" data-bv-validator="stringLength"
                                                        data-bv-for="message" data-bv-result="NOT_VALIDATED"
                                                        style="display: none;">The message must be between 20 and 2000
                                                        characters</small></div>
                                                <div class="col-sm-3">
                                                    <p class="help-block small">
                                                        Tips on getting accurate quotes from
                                                        suppliers. Please include the
                                                        following in your inquiry:
                                                        <br>1. Personal or business information
                                                        <br>2. Provide product request in great
                                                        detail
                                                        <br>3. Inquiry for MOQ, Unit Price, etc
                                                    </p>
                                                </div>
                                            </div>

                                            <hr>
                                            <div class="form-group has-feedback">
                                                <label for="dg-company" class="col-sm-3 control-label">Company</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" id="dg-company"
                                                        name="contact[company]" maxlength="100"
                                                        data-bv-field="contact[company]"><i
                                                        class="form-control-feedback"
                                                        data-bv-icon-for="contact[company]" style="display: none;"></i>
                                                    <small class="help-block" data-bv-validator="stringLength"
                                                        data-bv-for="contact[company]" data-bv-result="NOT_VALIDATED"
                                                        style="display: none;">Please enter a value with valid
                                                        length</small></div>
                                            </div>
                                            <div class="form-group has-feedback">
                                                <label for="dg-fullname" class="col-sm-3 control-label">Full
                                                    Name</label>
                                                <div class="col-sm-6">
                                                    <div class="row">
                                                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3">
                                                            <select class="form-control" name="contact[call]"
                                                                style="padding:6px 14px">
                                                                <option value="Mr.">Mr.</option>
                                                                <option value="Mrs">Mrs.</option>
                                                                <option value="Miss.">Miss.</option>
                                                                <option value="Ms.">Ms.</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-xs-6 col-sm-7 col-md-8 col-lg-9">
                                                            <input type="text" class="form-control" id="dg-fullname"
                                                                name="contact[fullname]" maxlength="30"
                                                                data-bv-field="contact[fullname]"><i
                                                                class="form-control-feedback"
                                                                data-bv-icon-for="contact[fullname]"
                                                                style="display: none;"></i>

                                                            <small class="help-block" data-bv-validator="stringLength"
                                                                data-bv-for="contact[fullname]"
                                                                data-bv-result="NOT_VALIDATED"
                                                                style="display: none;">Please
                                                                enter a value with valid length</small></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group has-feedback">
                                                <label for="dg-tel" class="col-sm-3 control-label">Telephone</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" id="dg-tel"
                                                        name="contact[tel]" maxlength="30"
                                                        data-bv-field="contact[tel]"><i class="form-control-feedback"
                                                        data-bv-icon-for="contact[tel]" style="display: none;"></i>
                                                    <small class="help-block" data-bv-validator="stringLength"
                                                        data-bv-for="contact[tel]" data-bv-result="NOT_VALIDATED"
                                                        style="display: none;">Please enter a value with valid
                                                        length</small></div>
                                            </div>
                                            <div class="form-group has-feedback">
                                                <label for="dg-fax" class="col-sm-3 control-label">Fax</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" id="dg-fax"
                                                        name="contact[fax]" maxlength="30"
                                                        data-bv-field="contact[fax]"><i class="form-control-feedback"
                                                        data-bv-icon-for="contact[fax]" style="display: none;"></i>
                                                    <small class="help-block" data-bv-validator="stringLength"
                                                        data-bv-for="contact[fax]" data-bv-result="NOT_VALIDATED"
                                                        style="display: none;">Please enter a value with valid
                                                        length</small></div>
                                            </div>
                                            <div class="form-group has-feedback">
                                                <label for="dg-website" class="col-sm-3 control-label">Website</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" id="dg-website"
                                                        name="contact[website]" placeholder="http://"
                                                        data-bv-field="contact[website]"><i
                                                        class="form-control-feedback"
                                                        data-bv-icon-for="contact[website]" style="display: none;"></i>
                                                    <small class="help-block" data-bv-validator="uri"
                                                        data-bv-for="contact[website]" data-bv-result="NOT_VALIDATED"
                                                        style="display: none;">The website address is not valid</small>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="dg-country" class="col-sm-3 control-label">Country</label>
                                                <div class="col-sm-6">
                                                    <select name="country" id="dg-country" class="form-control">
                                                        <option value="AF">Afghanistan</option>
                                                        <option value="AL">Albania</option>
                                                        <option value="DZ">Algeria</option>
                                                        <option value="AS">American Samoa</option>
                                                        <option value="AD">Andorra</option>
                                                        <option value="AO">Angola</option>
                                                        <option value="AI">Anguilla</option>
                                                        <option value="AQ">Antarctica</option>
                                                        <option value="AG">Antigua and Barbuda
                                                        </option>
                                                        <option value="AR">Argentina</option>
                                                        <option value="AM">Armenia</option>
                                                        <option value="AW">Aruba</option>
                                                        <option value="AU">Australia</option>
                                                        <option value="AT">Austria</option>
                                                        <option value="AZ">Azerbaijan</option>
                                                        <option value="BS">Bahamas</option>
                                                        <option value="BH">Bahrain</option>
                                                        <option value="BD">Bangladesh</option>
                                                        <option value="BB">Barbados</option>
                                                        <option value="BY">Belarus</option>
                                                        <option value="BE">Belgium</option>
                                                        <option value="BZ">Belize</option>
                                                        <option value="BJ">Benin</option>
                                                        <option value="BM">Bermuda</option>
                                                        <option value="BT">Bhutan</option>
                                                        <option value="BO">Bolivia</option>
                                                        <option value="BA">Bosnia and Herzegovina
                                                        </option>
                                                        <option value="BW">Botswana</option>
                                                        <option value="BV">Bouvet Island</option>
                                                        <option value="BR">Brazil</option>
                                                        <option value="IO">British Indian Ocean
                                                            Territory</option>
                                                        <option value="BN">Brunei Darussalam
                                                        </option>
                                                        <option value="BG">Bulgaria</option>
                                                        <option value="BF">Burkina Faso</option>
                                                        <option value="BI">Burundi</option>
                                                        <option value="KH">Cambodia</option>
                                                        <option value="CM">Cameroon</option>
                                                        <option value="CA">Canada</option>
                                                        <option value="CV">Cape Verde</option>
                                                        <option value="KY">Cayman Islands</option>
                                                        <option value="CF">Central African Republic
                                                        </option>
                                                        <option value="TD">Chad</option>
                                                        <option value="CL">Chile</option>
                                                        <option value="CN">China</option>
                                                        <option value="CX">Christmas Island</option>
                                                        <option value="CC">Cocos (Keeling) Islands
                                                        </option>
                                                        <option value="CO">Colombia</option>
                                                        <option value="KM">Comoros</option>
                                                        <option value="CG">Congo</option>
                                                        <option value="CD">Congo, the Democratic
                                                            Republic of the</option>
                                                        <option value="CK">Cook Islands</option>
                                                        <option value="CR">Costa Rica</option>
                                                        <option value="CI">Cote D'Ivoire</option>
                                                        <option value="HR">Croatia</option>
                                                        <option value="CU">Cuba</option>
                                                        <option value="CY">Cyprus</option>
                                                        <option value="CZ">Czech Republic</option>
                                                        <option value="DK">Denmark</option>
                                                        <option value="DJ">Djibouti</option>
                                                        <option value="DM">Dominica</option>
                                                        <option value="DO">Dominican Republic
                                                        </option>
                                                        <option value="EC">Ecuador</option>
                                                        <option value="EG">Egypt</option>
                                                        <option value="SV">El Salvador</option>
                                                        <option value="GQ">Equatorial Guinea
                                                        </option>
                                                        <option value="ER">Eritrea</option>
                                                        <option value="EE">Estonia</option>
                                                        <option value="ET">Ethiopia</option>
                                                        <option value="FK">Falkland Islands
                                                            (Malvinas)</option>
                                                        <option value="FO">Faroe Islands</option>
                                                        <option value="FJ">Fiji</option>
                                                        <option value="FI">Finland</option>
                                                        <option value="FR">France</option>
                                                        <option value="GF">French Guiana</option>
                                                        <option value="PF">French Polynesia</option>
                                                        <option value="TF">French Southern
                                                            Territories</option>
                                                        <option value="GA">Gabon</option>
                                                        <option value="GM">Gambia</option>
                                                        <option value="GE">Georgia</option>
                                                        <option value="DE">Germany</option>
                                                        <option value="GH">Ghana</option>
                                                        <option value="GI">Gibraltar</option>
                                                        <option value="GR">Greece</option>
                                                        <option value="GL">Greenland</option>
                                                        <option value="GD">Grenada</option>
                                                        <option value="GP">Guadeloupe</option>
                                                        <option value="GU">Guam</option>
                                                        <option value="GT">Guatemala</option>
                                                        <option value="GN">Guinea</option>
                                                        <option value="GW">Guinea-Bissau</option>
                                                        <option value="GY">Guyana</option>
                                                        <option value="HT">Haiti</option>
                                                        <option value="HM">Heard Island and Mcdonald
                                                            Islands</option>
                                                        <option value="VA">Holy See (Vatican City
                                                            State)</option>
                                                        <option value="HN">Honduras</option>
                                                        <option value="HK">Hong Kong</option>
                                                        <option value="HU">Hungary</option>
                                                        <option value="IS">Iceland</option>
                                                        <option value="IN">India</option>
                                                        <option value="ID">Indonesia</option>
                                                        <option value="IR">Iran, Islamic Republic of
                                                        </option>
                                                        <option value="IQ">Iraq</option>
                                                        <option value="IE">Ireland</option>
                                                        <option value="IL">Israel</option>
                                                        <option value="IT">Italy</option>
                                                        <option value="JM">Jamaica</option>
                                                        <option value="JP">Japan</option>
                                                        <option value="JO">Jordan</option>
                                                        <option value="KZ">Kazakhstan</option>
                                                        <option value="KE">Kenya</option>
                                                        <option value="KI">Kiribati</option>
                                                        <option value="KP">Korea, Democratic
                                                            People's Republic of</option>
                                                        <option value="KR">Korea, Republic of
                                                        </option>
                                                        <option value="KW">Kuwait</option>
                                                        <option value="KG">Kyrgyzstan</option>
                                                        <option value="LA">Lao People's Democratic
                                                            Republic</option>
                                                        <option value="LV">Latvia</option>
                                                        <option value="LB">Lebanon</option>
                                                        <option value="LS">Lesotho</option>
                                                        <option value="LR">Liberia</option>
                                                        <option value="LY">Libyan Arab Jamahiriya
                                                        </option>
                                                        <option value="LI">Liechtenstein</option>
                                                        <option value="LT">Lithuania</option>
                                                        <option value="LU">Luxembourg</option>
                                                        <option value="MO">Macao</option>
                                                        <option value="MK">Macedonia, the Former
                                                            Yugoslav Republic of</option>
                                                        <option value="MG">Madagascar</option>
                                                        <option value="MW">Malawi</option>
                                                        <option value="MY">Malaysia</option>
                                                        <option value="MV">Maldives</option>
                                                        <option value="ML">Mali</option>
                                                        <option value="MT">Malta</option>
                                                        <option value="MH">Marshall Islands</option>
                                                        <option value="MQ">Martinique</option>
                                                        <option value="MR">Mauritania</option>
                                                        <option value="MU">Mauritius</option>
                                                        <option value="YT">Mayotte</option>
                                                        <option value="MX">Mexico</option>
                                                        <option value="FM">Micronesia, Federated
                                                            States of</option>
                                                        <option value="MD">Moldova, Republic of
                                                        </option>
                                                        <option value="MC">Monaco</option>
                                                        <option value="MN">Mongolia</option>
                                                        <option value="MS">Montserrat</option>
                                                        <option value="MA">Morocco</option>
                                                        <option value="MZ">Mozambique</option>
                                                        <option value="MM">Myanmar</option>
                                                        <option value="NA">Namibia</option>
                                                        <option value="NR">Nauru</option>
                                                        <option value="NP">Nepal</option>
                                                        <option value="NL">Netherlands</option>
                                                        <option value="AN">Netherlands Antilles
                                                        </option>
                                                        <option value="NC">New Caledonia</option>
                                                        <option value="NZ">New Zealand</option>
                                                        <option value="NI">Nicaragua</option>
                                                        <option value="NE">Niger</option>
                                                        <option value="NG">Nigeria</option>
                                                        <option value="NU">Niue</option>
                                                        <option value="NF">Norfolk Island</option>
                                                        <option value="MP">Northern Mariana Islands
                                                        </option>
                                                        <option value="NO">Norway</option>
                                                        <option value="OM">Oman</option>
                                                        <option value="PK">Pakistan</option>
                                                        <option value="PW">Palau</option>
                                                        <option value="PS">Palestinian Territory,
                                                            Occupied</option>
                                                        <option value="PA">Panama</option>
                                                        <option value="PG">Papua New Guinea</option>
                                                        <option value="PY">Paraguay</option>
                                                        <option value="PE">Peru</option>
                                                        <option value="PH">Philippines</option>
                                                        <option value="PN">Pitcairn</option>
                                                        <option value="PL">Poland</option>
                                                        <option value="PT">Portugal</option>
                                                        <option value="PR">Puerto Rico</option>
                                                        <option value="QA">Qatar</option>
                                                        <option value="RE">Reunion</option>
                                                        <option value="RO">Romania</option>
                                                        <option value="RU">Russian Federation
                                                        </option>
                                                        <option value="RW">Rwanda</option>
                                                        <option value="SH">Saint Helena</option>
                                                        <option value="KN">Saint Kitts and Nevis
                                                        </option>
                                                        <option value="LC">Saint Lucia</option>
                                                        <option value="PM">Saint Pierre and Miquelon
                                                        </option>
                                                        <option value="VC">Saint Vincent and the
                                                            Grenadines</option>
                                                        <option value="WS">Samoa</option>
                                                        <option value="SM">San Marino</option>
                                                        <option value="ST">Sao Tome and Principe
                                                        </option>
                                                        <option value="SA">Saudi Arabia</option>
                                                        <option value="SN">Senegal</option>
                                                        <option value="CS">Serbia and Montenegro
                                                        </option>
                                                        <option value="SC">Seychelles</option>
                                                        <option value="SL">Sierra Leone</option>
                                                        <option value="SG">Singapore</option>
                                                        <option value="SK">Slovakia</option>
                                                        <option value="SI">Slovenia</option>
                                                        <option value="SB">Solomon Islands</option>
                                                        <option value="SO">Somalia</option>
                                                        <option value="ZA">South Africa</option>
                                                        <option value="GS">South Georgia and the
                                                            South Sandwich Islands</option>
                                                        <option value="ES">Spain</option>
                                                        <option value="LK">Sri Lanka</option>
                                                        <option value="SD">Sudan</option>
                                                        <option value="SR">Suriname</option>
                                                        <option value="SJ">Svalbard and Jan Mayen
                                                        </option>
                                                        <option value="SZ">Swaziland</option>
                                                        <option value="SE">Sweden</option>
                                                        <option value="CH">Switzerland</option>
                                                        <option value="SY">Syrian Arab Republic
                                                        </option>
                                                        <option value="TW">Taiwan, Province of China
                                                        </option>
                                                        <option value="TJ">Tajikistan</option>
                                                        <option value="TZ">Tanzania, United Republic
                                                            of</option>
                                                        <option value="TH">Thailand</option>
                                                        <option value="TL">Timor-Leste</option>
                                                        <option value="TG">Togo</option>
                                                        <option value="TK">Tokelau</option>
                                                        <option value="TO">Tonga</option>
                                                        <option value="TT">Trinidad and Tobago
                                                        </option>
                                                        <option value="TN">Tunisia</option>
                                                        <option value="TR">Turkey</option>
                                                        <option value="TM">Turkmenistan</option>
                                                        <option value="TC">Turks and Caicos Islands
                                                        </option>
                                                        <option value="TV">Tuvalu</option>
                                                        <option value="UG">Uganda</option>
                                                        <option value="UA">Ukraine</option>
                                                        <option value="AE">United Arab Emirates
                                                        </option>
                                                        <option value="GB">United Kingdom</option>
                                                        <option value="US">United States</option>
                                                        <option value="UM">United States Minor
                                                            Outlying Islands</option>
                                                        <option value="UY">Uruguay</option>
                                                        <option value="UZ">Uzbekistan</option>
                                                        <option value="VU">Vanuatu</option>
                                                        <option value="VE">Venezuela</option>
                                                        <option value="VN">Viet Nam</option>
                                                        <option value="VG">Virgin Islands, British
                                                        </option>
                                                        <option value="VI">Virgin Islands, U.s.
                                                        </option>
                                                        <option value="WF">Wallis and Futuna
                                                        </option>
                                                        <option value="EH">Western Sahara</option>
                                                        <option value="YE">Yemen</option>
                                                        <option value="ZM">Zambia</option>
                                                        <option value="ZW">Zimbabwe</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-group has-feedback">
                                                <label for="dg-checkcode" class="col-sm-3 control-label">
                                                    <small style="color:red">*</small> Verification
                                                    Code
                                                </label>
                                                <div class="col-xs-9 col-sm-4">
                                                    <div class="input-group" style="display:flex;">
                                                        <!-- <input type="text" class="form-control" name="checkcode" id="dg-checkcode" required=""
                                                  data-bv-field="checkcode"> -->
                                                        <input type="text" class="col-sm-12 form-control"
                                                            placeholder="verifyCode" name="verifyCode" id="verifyCode"
                                                            size="6" value="" maxlength="4" data-bv-field="verifyCode">
                                                        <img src="/Public/www/images/code.gif"
                                                            onclick="javascript:resetVerifyCode();" class="checkcode"
                                                            align="absmiddle" title="RESETVERIFYCODE" id="verifyImage">

                                                        <!-- <span class="input-group-addon" style="margin:0px;padding:0px;width:70px;">
                                                  <img class="media-object" src="static/picture/d29e7c07f84c422f81d507fd073639cb.gif"
                                                    width="70" height="30" id="dg-imgObj">
                                                </span> -->
                                                        <span class="input-group-btn">
                                                            <button class="btn btn-default" type="button"
                                                                onclick="javascript:resetVerifyCode();"
                                                                data-toggle="tooltip" data-placement="top"
                                                                title="Click on the picture to change it"
                                                                id="dg-reloadimg">
                                                                <span class="glyphicon glyphicon-refresh"></span>
                                                            </button>
                                                        </span>
                                                    </div><i class="form-control-feedback" data-bv-icon-for="verifyCode"
                                                        style="display: none; top: 0px; z-index: 100;"></i><i
                                                        class="form-control-feedback" data-bv-icon-for="checkcode"
                                                        style="display: none; top: 0px; z-index: 100;"></i>


                                                    <small class="help-block" data-bv-validator="notEmpty"
                                                        data-bv-for="checkcode" data-bv-result="NOT_VALIDATED"
                                                        style="display: none;">The verification code is
                                                        required</small>
                                                    <small class="help-block" data-bv-validator="stringLength"
                                                        data-bv-for="verifyCode" data-bv-result="NOT_VALIDATED"
                                                        style="display: none;">Please enter a value with valid
                                                        length</small>
                                                </div>
                                                <p class="help-block small  hidden-sm  hidden-xs">
                                                    Please enter a correct
                                                    verification code.</p>
                                            </div>
                                            <hr>

                                            <!-- 
                                          产品URL 
                                          示例：
                                          <input name="products[]" value="http://www.domain.com/product1.html">
                                          <input name="products[]" value="http://www.domain.com/product2.html">
                  
                  
                                          自定义内容 
                                          示例：
                                          <input name="custom[Size]" value="60*120">
                                          <input name="custom[Weight]" value="120kg">
                                          -->
                                            <!-- products 字段：咨询的产品页面-->
                                            <!-- page 字段：来源页面，也是提交成功后返回的页面 -->
                                            <input name="page" type="hidden"
                                                value="http://inquiry.digoodcms.com/form/demo">


                                            <input id="dg-ipAddress" name="geoip[ipAddress]" type="hidden"
                                                value="120.84.219.81">
                                            <input id="dg-countryName" name="geoip[countryName]" type="hidden"
                                                value="China">
                                            <input id="dg-countryCode" name="geoip[countryCode]" type="hidden"
                                                value="CN">
                                            <input id="dg-regionName" name="geoip[regionName]" type="hidden"
                                                value="Guangdong">
                                            <input id="dg-cityName" name="geoip[cityName]" type="hidden"
                                                value="Dongguan">
                                            <input id="dg-zipCode" name="geoip[zipCode]" type="hidden" value="110128">
                                            <input id="dg-latitude" name="geoip[latitude]" type="hidden"
                                                value="23.0489">
                                            <input id="dg-longitude" name="geoip[longitude]" type="hidden"
                                                value="113.745">
                                            <input id="dg-timeZone" name="geoip[timeZone]" type="hidden" value="+08:00">

                                            <input name="useragent[browser]" type="hidden"
                                                value="Chrome[66.0.3359.139]">
                                            <input name="useragent[platform]" type="hidden" value="Windows 10">
                                            <input name="useragent[lang]" type="hidden"
                                                value="zh-CN,zh;q=0.9,zh-TW;q=0.8">
                                            <input name="useragent[mobile]" type="hidden" value="No">
                                            <input name="useragent[agent_string]" type="hidden"
                                                value="Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36">

                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-4  col-md-8">
                                                    <button type="submit" class="dg-btn dg-theme btn-lg btn-block">
                                                        <!-- <span class="glyphicon glyphicon-send"></span>
                                                        &nbsp;&nbsp;Send
                                                        Inquiry</button> -->
                                                        <i class="fa fa-send" aria-hidden="true"></i>
                                                        SendInquiry
                                                </div>
                                            </div>
                                        </form>

                                        <div class="row">
                                            <div class="col-sm-offset-2 col-sm-4  col-md-8">
                                                <p class="well well-sm help-block small">
                                                    Please make sure your contact information is
                                                    correct. Your message will
                                                    be sent directly to the recipient(s) and will
                                                    not
                                                    be publicly displayed. We will never distribute
                                                    or sell your personal
                                                    information to third parties without
                                                    your express permission.
                                                </p>
                                            </div>
                                        </div>

                                        <link href="css/bootstrapvalidator.min.css" rel="stylesheet">
                                        <script src="js/bootstrapvalidator.min.js"></script>
                                        <script src="js/jquery.form.js"></script>
                                        <script src="js/my.js"></script>
                                        <script>
                                            $(document).ready(function () {
                                                //表单验证
                                                $('#dg-InquiryForm').bootstrapValidator({
                                                    // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
                                                    feedbackIcons: {
                                                        valid: 'glyphicon glyphicon-ok',
                                                        invalid: 'glyphicon glyphicon-remove',
                                                        validating: 'glyphicon glyphicon-refresh'
                                                    },
                                                    fields: {
                                                        email: {
                                                            validators: {
                                                                emailAddress: {
                                                                    message: 'The value is not a valid email address'
                                                                },
                                                                notEmpty: {
                                                                    message: 'The email address is required'
                                                                }
                                                            }
                                                        },
                                                        message: {
                                                            validators: {
                                                                notEmpty: {
                                                                    message: 'The message is required'
                                                                },
                                                                stringLength: {
                                                                    min: 20,
                                                                    max: 2000,
                                                                    message: 'The message must be between 20 and 2000 characters'
                                                                }
                                                            }
                                                        },
                                                        'contact[website]': {
                                                            validators: {
                                                                uri: {
                                                                    message: 'The website address is not valid'
                                                                }
                                                            }
                                                        },
                                                        checkcode: {
                                                            validators: {
                                                                notEmpty: {
                                                                    message: 'The verification code is required'
                                                                }
                                                            }
                                                        }
                                                    }
                                                });
                                            });

                                            //刷新验证码
                                            function changeImg() {
                                                var imgSrc = $("#dg-imgObj");
                                                var src = imgSrc.attr("src");
                                                imgSrc.attr("src", src + "?" + Math.random());
                                            }

                                            //获取GEOIP信息
                                            // var YOUR_KEY = "4f21d3e89231c93599ff1f8b7a82a008d03beed6ce46978d8e2816f13ad7e5c1";
                                            // var theURL = "//api.ipinfodb.com/v3/ip-city/?key=" + YOUR_KEY + "&format=json&callback=?";

                                            $.ajax({
                                                type: "POST",
                                                url: theURL,
                                                contentType: "application/json; charset=utf-8",
                                                dataType: "json",
                                                method: 'GET',

                                                success: function (data) {
                                                    $("#dg-country").val(data.countryCode);
                                                    $("#dg-ipAddress").val(data.ipAddress);
                                                    $("#dg-countryName").val(data.countryName);
                                                    $("#dg-countryCode").val(data.countryCode);
                                                    $("#dg-regionName").val(data.regionName);
                                                    $("#dg-cityName").val(data.cityName);
                                                    $("#dg-zipCode").val(data.zipCode);
                                                    $("#dg-latitude").val(data.latitude);
                                                    $("#dg-longitude").val(data.longitude);
                                                    $("#dg-timeZone").val(data.timeZone);
                                                }
                                            });
                                        </script>
                                    </div>

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