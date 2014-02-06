<?php
ob_start();
include_once('../lib/xml2array.php');
$xmlArray = new Xml2Array('../config/version.xml');
$xml2Array = $xmlArray->createArray();
$dlInfo = $xml2Array['whatsnew']['Module'];
if ($dlInfo['ios']['url'] == "#")
    $ios_url = '';
else
    $ios_url = ' "../dl_info.php?product_type=0"';

if ($dlInfo['android']['url'] == "#")
    $android_url = '';
else
    $android_url = ' "../dl_info.php?product_type=1"';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="black" name="apple-mobile-web-app-status-bar-style" />
<meta content="telephone=no" name="format-detection" />
<title>手机Aluha 微视频社交网站</title>
<style type="text/css">
body,ul,li,div{margin:0;padding:0; border:0;}
.overflowhidden{overflow: hidden;}
.box img{margin-top:20px;margin-left:20px;display:block;float:left;width:20%;margin-top:4%;}
.box li{list-style:none;float:left;display:block;font-size:16px;font-family:"微软雅黑";width:50%;height:100%;}
.box li a:hover{color:#4e9ded;}
.box ul{display:block;float:right;width:30%;margin-top:5%;}
a{text-decoration:none;color:white;}
.box a:hover{background-color:none;}
body{font-size:medium; background:#efefef;background:url(images/bg1.jpg) repeat-x left top; background-size:100%;}
ul{list-style:none}
.clear{ clear:both;}

.left{ width:40%; float:left; margin-top:10%;}
.left li{width:86%; margin:0 auto;margin-top:8%;}
.left li img{width:100%; margin:0 left;}
.left1{padding-bottom:8%;}

.right{ width:60%; float:right; margin-top:10%;}
.right li{ width:86%; margin:0 auto;}
.right li img{ width:100%;}



.photo1 img{margin:0 auto;width:100%;}
.photo2 img{margin:0 auto;width:100%;}
.photo1{margin:0 auto;width:100%;}
.photo2{margin:0 auto;width:100%;background-color:white;}



.foot{background-color: #e6e6e6;width: auto;margin-top: 0px;padding-top:10px;}
.footbeizhu3{margin:0 auto;font-size:12px;font-fimily:"宋体";color:#898989;width:150px;text-align:center;}
.footbeizhu1{margin:0 auto;font-size:12px;font-fimily:"宋体";color:#898989;width:300px;margin-top:10px;padding-bottom:10px;text-align:center;}



.footer{ width:98%; line-height:24px;color:#757575; text-align:center; margin:0 auto;}
</style>
</head>

<body>

<!-- ***************** 左侧区域 *******************-->
<div class="box overflowhidden">
	<img src="images/Aluhalogo1.png" />
    <ul class="overflowhidden">
    	<li><a href="#">首页</a></li>
        <li><a href="help.php">帮助</a></li>
        
    </ul>
        
</div>
<ul class="left" >
  <li class="left1"> <img src="images/letter1.png"/></li>
  <li ><a href=<?php echo $ios_url; ?>><img src="images/appstore1.png"/></a></li>
  <li class="left1" ><a href=<?php echo $android_url;?>> <img src="images/appstore_android 2.png"/></a></li>
</ul>

<!-- ***************** 右侧区域 *******************-->
<ul class="right" >
  <!--<li > <img src="images/phone1.png" /> </li>-->
</ul>
<div class="clear"></div>

<!-- ***************** 倒数第二侧区域 *******************-->

<div class="photo1"><img src="images/photo3.jpg"  />
</div>

<div class="photo2"><img src="images/letter2.png" /></div>
<!-- ***************** 页尾区域 *******************-->
<div class="foot">
	<div class="footbeizhu3">朗玛公司&nbsp;&nbsp; 版权所有</div>
	<div class="footbeizhu1">Copyright © 2013 Longmaster Inc. All Rights Reserved.&nbsp;网站备案：黔B2-20090050-4</div>
    
</div>


</body>
</html>