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
        <title>Aluha : 啊噜哈，分享欢乐时光</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <link href="css/video-js.css" rel="stylesheet">
        <!--[if IE 8]>
        <script src="js/vendor/pie.js"></script>
        <link rel="stylesheet" href="css/ie8.css">
        <![endif]-->

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
                    <li><a href="/">首页</a></li> 
                    <li><a href="index.php?cat=9">Aluha GIRLS</a></li>
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
        <div id="androidDownloadBlock">
          <a title="安卓市场" href="<?php echo $android_url; ?>">
            <img src="img/anzhuoshichang.png" alt="">
          </a>
          <a title="91助手" href="#">
            <img src="img/91zhushou.png" alt="">
          </a>
        </div>
        

        <div id="firstScreenWarpper">
          <div id="firstScreen">
          	<div id="slogan">
              <div id="sloganWapper">
                <div id="sloganFont">
                  <div id="homepagelogo"></div>
                  <div id="cheerupfont"></div>
                  <div id="sloganbig"></div>
                </div>
                <div id="appDownload">
                  <a href=<?php echo $ios_url; ?>><img src="img/appstore.png" alt=""></a>
                  <a id="androidDownloadBtn" href="#"><img src="img/googleplay.png" alt=""></a>
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
          	</div>
          	<div id="hand" data-0="top:120px" data-500="top:70px;">
          		<div id="handWapper">
                  <div id="playVideoBtn">
                    <img src="img/playVideo.png" alt="">
                  </div>    
                </div>
          	</div>
          </div>
        	<div id="scrollDownBlock">
        			<img src="img/scrolldown.png" alt="">
        	</div>
        </div>
        
        <div id="secondScreenWarpper">
          <div id="secondScreen">
            <div id="secondLeft">
              <div id="discoveryLayer" data-bottom="background-position:102px 400px;opacity:0" data-top="background-position:102px 44px;opacity:1"></div>
              <div id="threeGirlsLayer" data-700-bottom="background-position:0px -597px" data-top="background-position:0px 325px" data--200-top="background-position:0px 325px" data--800-top="background-position:0px 775px"></div>
              <div id="happymanLayer" data-300-bottom="background-position:0px 758px" data-top="background-position:0px 10px;" data--200-top="background-position:0px 10px" data--300-top="background-position:0px -300px"></div>
            </div>
            <div id="secondRight">
            </div>
          </div>
        </div>
       
        <div id="thirdScreenWarpper">
         	<div id="thirdScreen">
         		<div id="meetLayer" data-600-bottom="top:-100px" data-172-top="top:72px;">
              <div id="meetFont"></div>
              
            </div>
            <div id="giftandmail">
              <div id="meetGirls" data-600-bottom="top:-100px" data-172-top="top:0px;"></div>  

            
              <div id="boyhead"></div>
              <div id="arrow1" data-400-bottom="top:112px;opacity:0;" data-400-top="top:112px;opacity:0;" data-287-top="top:136px;opacity:1;" data-top="top:136px;opacity:0;"></div>

              <div id="arrow2" data-400-bottom="opacity:0;" data-400-top="opacity:0;" data-287-top="opacity:1;" data-50-top="opacity:0"></div>

              <div id="arrow3" data-400-bottom="opacity:0;" data-400-top="opacity:1;" data-357-top="opacity:0;" ></div>

              <div id="arrow4" data-400-bottom="opacity:0;" data-400-top="opacity:1;" data-387-top="opacity:0;" ></div>

              <div id="arrow5" data-50-top="opacity:0" data--100-top="opacity:1" data--250-top="opacity:0"></div>
              <div id="arrow6" data-357-top="opacity:0;" data-250-top="opacity:1;" data-100-top="opacity:0;"></div>
              <div id="arrow7" data-357-top="opacity:0;" data-300-top="opacity:1;" data-100-top="opacity:0;"></div>
              <div id="arrow8" data-357-top="opacity:0;" data-300-top="opacity:1;" data-100-top="opacity:0;"></div>

              <div class="giftFly" id="gf1" data-400-bottom="top:200px;left:388px;width:6px;height:5px;opacity:1;" data-400-top="top:188px;left:250px;width:64px;height:50px;opacity:1;" data-287-top="top:78px;left:140px;width:6px;height:5px;opacity:0;"></div>

              <div class="giftFly" id="gf2" data-400-bottom="top:310px;left:388px;width:6px;height:5px;opacity:1;" data-400-top="top:188px;left:610px;width:64px;height:50px;opacity:1;" data-287-top="top:78px;left:740px;width:6px;height:5px;opacity:0;"></div>

              <div class="giftFly" id="gf3" data-400-bottom="top:300px;left:488px;width:6px;height:5px;opacity:1;" data-400-top="top:340px;left:630px;width:64px;height:50px;opacity:1;" data-287-top="top:408px;left:800px;width:6px;height:5px;opacity:0;"></div>

              <div class="giftFly" id="gf4" data-400-bottom="top:300px;left:450px;width:6px;height:5px;opacity:1;" data-400-top="top:448px;left:450px;width:64px;height:50px;opacity:1;" data-287-top="top:578px;left:500px;width:6px;height:5px;opacity:0;"></div>

              

              <div class="messageFly" id="mf1" data-287-top="top:78px;left:140px;width:20px;height:16px;opacity:0" data-150-top="top:168px;left:230px;width:58px;height:49px;opacity:1" data--50-top="top:200px;left:388px;width:58px;height:49px;opacity:0"></div>

              <div class="messageFly" id="mf2" data-287-top="top:478px;left:40px;width:20px;height:16px;opacity:0" data-150-top="top:373px;left:230px;width:58px;height:49px;opacity:1" data--50-top="top:280px;left:388px;width:58px;height:49px;opacity:0"></div>

              <div class="messageFly" id="mf3" data-287-top="top:618px;left:520px;width:20px;height:16px;opacity:0" data-150-top="top:478px;left:470px;width:58px;height:49px;opacity:1" data--50-top="top:310px;left:448px;width:58px;height:49px;opacity:0"></div>

              <div class="messageFly" id="mf3" data-287-top="top:428px;left:840px;width:20px;height:16px;opacity:0" data-150-top="top:358px;left:610px;width:58px;height:49px;opacity:1" data--50-top="top:310px;left:468px;width:58px;height:49px;opacity:0"></div>

            </div>
         	</div>
        </div>
       	
        <div id="fourthScreenWarpper">
         	<div id="fourthScreen">
            <div id="interactiveGirlsWarpper">
           		<div id="interactiveGirls" data-top="background-position:right 0px" data--800-top="background-position:right 600px">
           			<div id="outfitGirl" data-300-bottom="height:436px" data-101-top="height:0px"></div>
           			<div id="xphone" data-300-bottom="background-position:0px 380px" data-51-top="background-position:0px 0px"></div>
              </div>
            </div>
         		
         		<div id="interactiveFont">
         				<img src="img/interactive_font.png" alt="">
         		</div>
         	</div>
        </div>
        <div id="fifthScreen"></div>
       	
       	<div id="footer">
       		<div id="letsstart">
           <img src="img/letsstart.png" alt=""> 
          </div>
          <div id="websitemenu">
            <a class="siteFeature" href="index.php?cat=9" id="feature1"></a>
            <a class="siteFeature" href="index.php?cat=2" id="feature2"></a>
            <a class="siteFeature" href="index.php?cat=3" id="feature3"></a>
          </div>
          <h2>
            <img src="img/slogan_small.png" alt="">
          </h2>
          
          <p id="copyrightCHN">
            <img src="img/copyright.png" alt="">
          </p>
          
       	</div>
       
        <script src="js/vendor/jquery-1.10.2.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/vendor/video.js"></script>

        <script type="text/javascript" src="js/vendor/skrollr.min.js"></script>
        <script type="text/javascript" src="js/vendor/skrollr.menu.min.js"></script>

        <!--[if lt IE 9]>
        <script type="text/javascript" src="js/vendor/skrollr.ie.min.js"></script>
        <![endif]-->
        
        <script src="js/main.js"></script>
    </body>
</html>
