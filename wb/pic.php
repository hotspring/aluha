<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];
if (strpos($userAgent, "iPhone") || strpos($userAgent, "iPad") || strpos($userAgent, "iPod") || strpos($userAgent, "iOS")) {
//iPhone下载
    $flag_ios=1;
    $url = $baseurl."dl_info.php?product_type=0";
} else if (strpos($userAgent, "Android")) {
//Android下载
    $url =$baseurl."dl_info.php?product_type=1";
} else {
    $url = $baseurl."dl_info.php?product_type=1";
}
//echo $url;exit;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="black" name="apple-mobile-web-app-status-bar-style" />
<meta content="telephone=no" name="format-detection" />
<script type="text/javascript" src="<?php echo $baseurl; ?>js/jquery-1.3.2.min.js"></script>
<title>手机Aluha 微视频社交网站</title>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".imgbottom").click(function(){
                $("#toast").show();
            })
        })
    </script>
<style type="text/css">
body,ul,li,div{margin:0;padding:0; border:0;}
.overflowhidden{overflow: hidden;}
.box img{margin-top:1.5%;margin-left:2%;display:block;float:left;width:11%;}
/*.box li{list-style:none;float:left;display:block;font-size:16px;font-family:"微软雅黑";width:50%;height:100%;}
.box li a:hover{color:#4e9ded;}
.box ul{display:block;float:right;width:30%;margin-top:5%;}
a{text-decoration:none;color:white;}*/
.box .imgbottom{float:right;margin-top:2.5%;margin-right:2%;display:block;width:28%;margin-bottom:3%;}
.box .imgletter{float:left;margin-top:2%;margin-left:2%;display:block;width:40%;}
.tost{position:absolute;left:68.2%;top:0px;width:30%;}
.box{background-color: white;}
body{font-size:medium; background:#f8f8f8;background:url(image/top.jpg) repeat-x left top; background-size:100%;background-color:#f8f8f8;position:relative;}
ul{list-style:none}
.clear{ clear:both;}

.contentall{width:96%;margin:0 auto;margin-bottom:4%;}
.content{width:100%;height:88%;padding-top:2.5%;}
.img1{width:100%;margin-bottom:2%;}
.contentvideo{width:97%;margin:0 auto;}

.photo{margin-bottom:2.5%;margin-left:1.5%;border:#b6b6b6 1  solid;}
.photo ul{float:left;}
.photo ul li{float:left;}
.ul1{width:15.6%;}
.ul1 img{width:100%;}
.ul2{width:71%;margin-left:3%;}
.ul2 li{width:100%;}
.lettercolor1{color:#f887b9;margin-bottom:2%;float:left;}
.lettercolor2{color:#c4c5c9;font-size:small;float:right;margin-top:2%;}
.lettercolor3{color:#7c7f89;}

.letter{color:white;background:url(image/normol.png) repeat-x left top;width:}
.xiazai{background:url(image/normol.png) left right no-repeat;}

</style>
</head>

<body>

<!-- ***************** 左侧区域 *******************-->
<div class="box overflowhidden">
    <a href="http://www.aluha.cn"><img src="<?php echo $baseurl; ?>wb/image/logo.png"  /></a>
    <img class="imgletter" src="<?php echo $baseurl; ?>/wb/image/logoletter.png"  />
    <a href=<?php echo $url; ?>><img class="imgbottom" src="<?php echo $baseurl; ?>wb/image/buttom.png"  /></a>
</div>
    <div id="toast" style="display: none" ><img src="<?php echo $baseurl; ?>wb/image/tost.png" class="tost" /></div>
<!-- *****************内容侧区域 *******************-->
<div class="contentall">
<div class="content">
<!--<div class="contentvideo">
	<img class="img1" src="image/play.jpg" />
</div>-->
	<div class="photo overflowhidden">
		<ul class="ul1"><img src="<?php echo $picAvata; ?>" /></ul>
        <ul class="overflowhidden ul2">
        	<li class="overflowhidden">
        		<div class="lettercolor1"><?php echo $list->threadInfo[0]->user_name ?></div>
            	<div class="lettercolor2"><?php echo date("Y-m-d H:i:s",substr($list->threadInfo[0]->commit_dt,0,10)); ?></div>
       		</li>
        <li class="lettercolor3"><?php echo $list->threadInfo[0]->content ?></li>
       </ul>
    </div>

<div class="contentvideo">
    <?php
    foreach($pics as $eachPic)
        {
            echo "<img class=\"img1\"  src='".$cdn[$key]."4022/".$list->threadInfo[0]->thread_id."/".$eachPic->attach_name."/3/".$eachPic->commit_dt."/123"."' />";
        }
    ?>
<!--	<img class="img1"  src="image/photo.jpg" />-->
</div>

</div>
</div>
<!-- ***************** 倒数第二侧区域 *******************-->


<!-- ***************** 页尾区域 *******************-->
</body>
</html>
