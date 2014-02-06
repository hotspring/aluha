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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Aluha首页</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<!--请把这段代码放在页面最底部加载-->
<script src="http://zs.91.com/script/api/key121121.js"></script>
<!--代码结束-->
<style>
*{margin:0px;padding:0px;border:0;}
body{background:url(images/bg2.jpg) no-repeat;background-color:#f3f3f3;width:auto;}
.overflowhidden{overflow:hidden;}
.box{margin:0px auto;width:960px;}
.box img{margin-top:28px;margin-left:10px;display:block;float:left;}
.box li{list-style:none;float:left;display:block;margin:20px;font-size:18px;font-family:"微软雅黑";text-align:center;line-height:38px;width:111px;height:38px;margin-top:30px;}
.box ul{display:block;float:right;margin-left:10px;height:100px;}
a{text-decoration:none;color:white;}
.navbotton{background-image:url(images/botton1.png);background-repeat:no-repeat;}


.lettertop{margin-top:184px;}
.contentbox{margin:0px auto;width:960px;}
.contentbox1{float:left;}
.contentbox2{float:right;margin-top:85px;}
.contentbox1 li{float:left;list-style:none;}
.contentboxul2{margin-top:80px;}
.contentboxul1 li{width:122px;height:38px;}

/*.libg{background:url(images/botton2.png) no-repeat;}*/
.contentboxul2 img{margin-right:20px;border:none 0px;}
.contentboxul3 img{margin-right:20px;border:none 0px;margin-top:16px;}
.contentboxul4 img{margin-right:30px;border:none 0px;margin-top:108px;}
.contentboxul1 img{border:none 0px;}
.p1{font-size:55px;color:white;font-family:"Adobe黑体Std";font-weight:bold;margin-top:234px;}
.p2{font-size:20px;color:white;font-family:"Adobe黑体Std";font-weight:bold;margin-top:36px;}
.zhushoutop{padding-top:4px;}


.line{width:400px;margin:0 auto;border-bottom:solid #c1c1c1 1px;}
.foot{background-color:#e6e6e6;margin-top:60px;}
.footbox{margin:0px auto;width:400px;height:52px;position:relative;}
.footbox li{list-style:none;float:left;font-size:12px;font-family:"宋体";color:#898989;height:52px;line-height:52px;}
.lipadding{padding-right:38px;}
.footbox img{float:left;padding-top:5px;border:none 0px;margin:0 auto;}
.footbox ul{margin:0px auto;width:120px;}
.footbeizhu3{margin:0px auto;font-size:12px;font-fimily:"宋体";color:#898989;width:150px;margin-top:20px;text-align:center;}
.footbeizhu1{margin:0px auto;font-size:12px;font-fimily:"宋体";color:#898989;width:330px;margin-top:10px;text-align:center;}
.footbeizhu2{margin:0px auto;font-size:12px;font-fimily:"宋体";color:#898989;width:200px;margin-top:10px;padding-bottom:20px;text-align:center;}
.footbox a{text-decoration:none;color:#898989;}
.padding{padding-right:30px;}
.tanchu{background:url(images/weixintanchu.png) no-repeat;width:458px;height:260px;position:absolute;left:70px;top:-250px;}



</style>
<script type="text/javascript">
    $(document).ready(function(){
        $(".tanchu").hide();
        $(".weibo").mouseover(function(){
            $(".tanchu").show();
        });
        $(".weibo").mouseout(function(){
            $(".tanchu").hide();
        });
        /*$("li:eq(3)").mouseover(function(){
            $(this).addClass("libg");
            $("li:eq(4)").removeClass();
            $("li:eq(5) img").attr("src","images/appstore.png");
            $("li:eq(5) a").attr("href","dl_info.php?product_type=0");
            $("li:eq(6) img").attr("src","images/shaomiao.png");
        });
        $("li:eq(4)").mouseover(function(){
            $(this).addClass("libg");
            $("li:eq(3)").removeClass();
            $("li:eq(5) img").attr("src","images/appstore_android.png");
            $("li:eq(5) a").attr("href","dl_info.php?product_type=1");
            $("li:eq(6) img").attr("src","images/shaomiao_android.png");
        });*/
    })
</script>
</head>

<body>
<div class="box overflowhidden">
	
	<a href="index.php"><img src="images/Aluhalogo1.png" /></a>
    <ul class="overflowhidden">
    	<li class="navbotton"><a href="#">首&nbsp;&nbsp;&nbsp;&nbsp;页</a></li>
        <li><a href="touch.php">联系我们</a></li>
        <li><a href="help.php">用户帮助</a></li>
    </ul>
        
</div>
<div class="contentbox overflowhidden">
    <div class="contentbox1">
        <div class="lettertop"><img src="images/letter.png" /></div>
       
         <ul class="overflowhidden contentboxul2">
        	<li><a href=<?php echo $ios_url; ?>><img src="images/appstore.png" /></a></li>
            <li><img src="images/shaomiao.png" /></li>
        </ul>
       <ul class="overflowhidden contentboxul3">
        	<li><a href=<?php echo $android_url; ?>><img  src="images/appstore_android.png" /></a></li>
            <li><img src="images/shaomiao_android.png" /></li>
      </ul>
      <ul class="overflowhidden contentboxul4">
        	<li><img  src="images/yijiananzhuang.png" /></li>
            <li><a href="http://apk.91.com/soft/Controller.ashx?Action=Download&id=40322909&m=a8f890289db137eb01b0e6cfbbabc2b8&p=Android&f_name=%u554a%u565c%u54c8&f_version=5&f_id=40322909&f_identifier=cn.Longmaster.iPeng.Activity&ext=apk&secure=SAFE&fitto=2.2,2.3,2.3.3%E6%88%96%E8%80%852.3.4,3.0,3.1,3.2,4.0,4.0.3,4.1,4.2,4.3
"  name="啊噜哈" onclick="return Key.Open(this, 'android');" SoftIcon="" title="通过91助手下载" ><img src="images/buttonanzhuang.png" class="zhushoutop" /></a></li>
        </ul>
       
    </div>
    <div class="contentbox2">
    <img src="images/phone1.png"  />
    </div>

        
</div>

	

<div class="foot">
	<div class="line">
	<div class="footbox">
    	<ul class="overflowhidden">
        	
            <a href="http://weibo.com/lmipeng"><img class="padding" src="images/xinlanglogo1.png" /></a>
            <a class="weibo" ><img src="images/weibologo1.png" /></a>
        </ul>
        <div class="tanchu"></div>
    </div>
    </div>
	<div class="footbeizhu3">朗玛公司&nbsp;&nbsp; 版权所有</div>
	<div class="footbeizhu1">Copyright © 2013 Longmaster Inc. All Rights Reserved.</div>
    <div class="footbeizhu2">网站备案：黔B2-20090050-4</div>
    <div style="display: none"><script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1000245305'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s22.cnzz.com/z_stat.php%3Fid%3D1000245305%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
    </div>
</div>

</body>
</html>
