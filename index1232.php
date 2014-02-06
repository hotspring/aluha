<?php
ob_start();
include_once('lib/xml2array.php');
include_once ('lib/wap_check.php');                     //引用检测手机wap检测文件
$wapurl = "./m";
$is_wap = mobile_device_detect(true, true, true, false, false);
if ($is_wap) {
    header("location:" . $wapurl);
}
$xmlArray = new Xml2Array('config/version.xml');
$xml2Array = $xmlArray->createArray();
$dlInfo = $xml2Array['whatsnew']['Module'];
if ($dlInfo['ios']['url'] == "#")
    $ios_url = '';
else
    $ios_url = ' "dl_info.php?product_type=0"';

if ($dlInfo['android']['url'] == "#")
    $android_url = '';
else
    $android_url = ' "dl_info.php?product_type=1"';
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="icon" type="image/x-icon" href="/favicon.ico" />
        <title>Aluha啊噜哈</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <link href="css/video-js.css" rel="stylesheet">
        
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <nav>
            <!-- Brand and toggle get grouped for better mobile display -->
            <div id="navbar-wapper">
              <div class="navbar-header">
                  <a class="navbar-brand" href="/">
                      <img src="img/aluha_logo.png" alt="">
                  </a>
              </div>
     
              <div class="navbar-collapse">
                  <ul class="nav navbar-nav">
                    <li><a href="index.php?cat=2">产品动态</a></li>
                    <li><a href="index.php?cat=3">关于我们</a></li>
                    <li><a href="index.php?page_id=2">帮助中心</a></li> 
                    <li><a href="charge.php">充值中心</a></li>        
                  </ul>    
              </div>
            </div>
        </nav>

        <div class="navPoints">
        	<ul>
        		<li><a href="#firstScreen"></a></li>
        		<li><a href="#secondScreen"></a></li>
        		<li><a href="#thirdScreen"></a></li>
        		<li><a href="#fourthScreen"></a></li>
        		<li><a href="#fifthScreen"></a></li>
        	</ul>
        </div>
        <div id="videoPopup">
          <div id="videoWarp">
            <video id="my_video_1" class="video-js vjs-default-skin" controls preload="none" width="800" height="451" data-setup="{}">
            <source src="http://mgcfilm.qiniudn.com/aluhasuxia.mp4?avthumb/mp4/ab/1600k/r/24/vcodec/libx264" type='video/mp4'>
              <!-- http://mgcfilm.qiniudn.com/aluhasuxia.mp4?avthumb/mp4/ab/1600k/r/24/vcodec/libx264 -->
              <!-- http://mgcfilm.qiniudn.com/aluhasuxia.mp4?avthumb/ipad_high -->
          </video>
          </div>
        </div>

        <div id="firstScreen">
        	<div id="firstScreenBg" data-0="top:0px" data-500="top:-50px;">
        		<div ></div>
        	</div>
        	<div id="slogan" data-0="top:75px" data-300="top:0px;">
            <div id="sloganFont">
              <img src="img/logo.png" alt="">
            </div>
            <div id="appDownload">
              <a href=<?php echo $ios_url; ?>><img src="img/appstore.png" alt=""></a>
              <a href=<?php echo $android_url; ?>><img src="img/googleplay.png" alt=""></a>
            </div>
            <div id="code">
              <img src="img/code.png" alt="">
            </div>
            <div class="sociallogo">
              <a href="http://weibo.com/lmipeng">
                <img src="img/weibo_icon.png" alt="">
              </a>
              <a id="wxlogohover" href="#">
                <img src="img/wechat_icon.png" alt="">
                <div class="weixingTooltip">
                    <img src="img/weixintanchu.png" alt="">
                </div>
              </a>
            </div>
        	</div>
        	<div id="hand" data-0="top:120px" data-500="top:70px;">
        		<div id="playVideoBtn">
        			<img src="img/playVideo.png" alt="">
        		</div>
        	</div>
        	<div id="scrollDownBlock" data-0="top:0px" data-500="top:-50px;">
        		<div id="scrollDown">
        			<img src="img/scrolldown.png" alt="">
        		</div>
        	</div>
        </div>
        
				<div id="secondScreen">
					<div id="discoveryLayer" data-bottom="background-position:102px 400px;opacity:0" data-top="background-position:102px 44px;opacity:1"></div>
					<div id="threeGirlsLayer" data-700-bottom="background-position:0px -597px" data-top="background-position:0px 325px" data--200-top="background-position:0px 325px" data--800-top="background-position:0px 775px"></div>
					<div id="happymanLayer" data-300-bottom="background-position:0px 758px" data-top="background-position:0px 10px;" data--200-top="background-position:0px 10px" data--300-top="background-position:0px -300px"></div>
				</div>
       
       	<div id="thirdScreen">
       		<div id="meetLayer" data-600-bottom="top:-100px" data-172-top="top:72px;">
       			<div id="meetFont"></div>
       			<div id="meetGirls"></div>
       		</div>
       		<div id="boyhead"  ></div>
       		<!--<div id="meetGifts" data-300-bottom="opacity:0;top:100px" data-287-top="opacity:1;top:187px"></div>-->
       		<!--<div id="meetMail" data--100-bottom="opacity:0;" data-top="opacity:1;"></div>-->
          <div class="giftFly" id="gf1" data-400-bottom="top:272px;left:988px;width:6px;height:5px;opacity:1;" data-400-top="top:260px;left:850px;width:64px;height:50px;opacity:1;" data-287-top="top:150px;left:740px;width:6px;height:5px;opacity:0;"></div>

          <div class="giftFly" id="gf2" data-400-bottom="top:272px;left:988px;width:6px;height:5px;opacity:1;" data-400-top="top:260px;left:1250px;width:64px;height:50px;opacity:1;" data-287-top="top:150px;left:1340px;width:6px;height:5px;opacity:0;"></div>

          <div class="giftFly" id="gf3" data-400-bottom="top:372px;left:988px;width:6px;height:5px;opacity:1;" data-400-top="top:520px;left:1050px;width:64px;height:50px;opacity:1;" data-287-top="top:650px;left:1100px;width:6px;height:5px;opacity:0;"></div>

          <div class="giftFly" id="gf3" data-400-bottom="top:372px;left:1088px;width:6px;height:5px;opacity:1;" data-400-top="top:392px;left:1230px;width:64px;height:50px;opacity:1;" data-287-top="top:480px;left:1400px;width:6px;height:5px;opacity:0;"></div>

          <div class="messageFly" id="mf1" data-287-top="top:150px;left:740px;width:20px;height:16px;opacity:0" data-150-top="top:240px;left:830px;width:58px;height:49px;opacity:1" data--50-top="top:272px;left:988px;width:58px;height:49px;opacity:0"></div>

          <div class="messageFly" id="mf2" data-287-top="top:550px;left:640px;width:20px;height:16px;opacity:0" data-150-top="top:470px;left:830px;width:58px;height:49px;opacity:1" data--50-top="top:352px;left:988px;width:58px;height:49px;opacity:0"></div>

          <div class="messageFly" id="mf3" data-287-top="top:690px;left:1140px;width:20px;height:16px;opacity:0" data-150-top="top:550px;left:1090px;width:58px;height:49px;opacity:1" data--50-top="top:382px;left:1068px;width:58px;height:49px;opacity:0"></div>

          <div class="messageFly" id="mf3" data-287-top="top:500px;left:1440px;width:20px;height:16px;opacity:0" data-150-top="top:430px;left:1210px;width:58px;height:49px;opacity:1" data--50-top="top:382px;left:1068px;width:58px;height:49px;opacity:0"></div>
       	</div>
       	
       	<div id="fourthScreen">
       		<div id="interactiveGirls" data-top="background-position:40px 0px" data--800-top="background-position:40px 600px">
       			<div id="outfitGirl" data-300-bottom="height:436px" data-101-top="height:0px"></div>
       			<div id="xphone" data-300-bottom="background-position:0px 380px" data-51-top="background-position:0px 0px"></div>
       		</div>
       		<div id="interactiveFont">
       				<img src="img/interactive_font.png" alt="">
       		</div>
       	</div>
        <div id="fifthScreen"></div>
       	
       	<div id="footer">
       		<div id="letsstart">
           <img src="img/letsstart.png" alt=""> 
          </div>
          <div id="websitemenu">
            <img src="img/footer_img_1.png" alt="">
            <img src="img/footer_img_2.png" alt="">
            <img src="img/footer_img_3.png" alt="">
          </div>
          <h2>
            啊噜哈，分享欢乐时光
          </h2>
          <div class="sociallogo">
            <a href="http://weibo.com/lmipeng">
              <img src="img/weibo_icon.png" alt="">
            </a>
            <a id="wxlogohover" href="#">
                <img src="img/wechat_icon.png" alt="">
                <div class="weixingTooltip">
                    <img src="img/weixintanchu.png" alt="">
                </div>
              </a>
          </div>
          <p id="copyrightCHN">朗视科技传媒 Starvision 版权所有</p>
          <p id="copyrightEN">Copyright © 2014 Starvision tech-media Co.Ltd All Rights Reserved.</p>
          <p id="beian">网站备案：黔ICP备13004739号</p>
       	</div>
       
        <script src="js/vendor/jquery-1.10.2.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/vendor/video.js"></script>

        <script type="text/javascript" src="js/vendor/skrollr.min.js"></script>
        <script type="text/javascript" src="js/vendor/skrollr.menu.min.js"></script>
        
        <script src="js/main.js"></script>
    </body>
</html>
