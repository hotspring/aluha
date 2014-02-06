<?php
//print_r($list->threadInfo[0]);exit;
include_once ('../lib/wap_check.php');                     //引用检测手机wap检测文件
//$wapurl = "./m";
$is_wap = mobile_device_detect(true, true, true, false, false);
if ($is_wap) {
    require_once "wap.php";
    exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta property="og:title" content="啊噜哈点滴生活，分享欢乐！" />
    <meta property="og:image" content="<?php echo $picCdnUrl; ?>" />
    <meta property="og:site_name" content="<?php echo $list->threadInfo[0]->user_name ?>" />

    <script type="text/javascript" src="<?php echo $baseurl; ?>js/swfobject.js"></script>
    <script type="text/javascript" src="<?php echo $baseurl; ?>js/jquery-1.3.2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            // For version detection, set to min. required Flash Player version, or 0 (or 0.0.0), for no version detection.
            var swfVersionStr = "11.1.0";
            // To use express install, set to playerProductInstall.swf, otherwise the empty string.
            var xiSwfUrlStr = "<?php echo $baseurl; ?>js/playerProductInstall.swf";
            var flashvars = {};
            var params = {};
            params.quality = "high";
            params.bgcolor = "#ffffff";
            params.allowscriptaccess = "sameDomain";
            params.allowfullscreen = "false";
            var attributes = {};
            attributes.id = "Bofangqi";
            attributes.name = "Bofangqi";
            attributes.align = "middle";
            swfobject.embedSWF(
                "<?php echo $baseurl; ?>js/Bofangqi.swf?u=<?php echo $cdnUrl ?>", "flashContent",
                "480px", "480px",
                swfVersionStr, xiSwfUrlStr,
                flashvars, params, attributes);
            // JavaScript enabled so display the flashContent div in case it is not replaced with a swf object.
            swfobject.createCSS("#flashContent", "display:block;text-align:left;");
        })
    </script>
    <title>Aluha 微视频社交网站</title>

    <style>
        *{margin:0px;padding:0px;border:0;}
        body{background-color:#f8f8f8;}
        .overflowhidden{overflow:hidden;}
        .box{width:960px;margin:0 auto;margin-top:40px;}
        .left{float:left;border:#b6b6b6 1px solid;padding-bottom:20px;width:480px;margin:0 auto;margin-left:50px;background-color:#ffffff;}
        .right{float:right;width:327px;margin:0 auto;height:480px;margin-right:50px;}

        .ul1{float:left;margin-top:15px;margin-left:15px;}
        .ul2{float:right;list-style:none;width:380px;margin-top:15px;margin-right:15px;}
        .div1{float:left;color:#f65ea5;font-size:24px;font-family:"微软雅黑";}
        .div2{float:right;color:#c4c5c9;font-size:14px;font-family:"微软雅黑";margin-top:8px;}
        .div3{margin-top:20px;}
        .liletter{color:#7c7f89;font-size:16px;font-family:"微软雅黑";margin-top:6px;}
        li{list-style:none;}
        .li1{float:left;}

        .li2{float:right;margin-top:45px;}
        .div5{margin-bottom:16px;margin-top:40px;}
    </style>
</head>

<body>


<div class="overflowhidden box">
    <!--左边-->
    <div class="left overflowhidden">
        <div id="flashContent"></div>
        <div>
            <ul class="ul1">
                <li><img src="<?php echo $picAvata; ?>" width="50" height="50"/></li>
            </ul>
            <ul class="ul2">
                <li class="overflowhidden">
                    <div class="div1"><?php echo $list->threadInfo[0]->user_name ?></div>
                    <div class="div2"><?php echo date("Y-m-d H:i:s",substr($list->threadInfo[0]->commit_dt,0,10)); ?></div>
                </li>

                <li class="liletter" style="word-break: break-all; word-wrap:break-word"><?php if(!empty($list->threadInfo[0]->content)) echo $list->threadInfo[0]->content;else echo "<em style=\"color:#bdbfc4;font-size: 16px\">Ta什么都没有说！ </em>"; ?></li>
            </ul>
        </div>
    </div>
    <!--youbian-->
    <div class="right">
    <div class="div3"><a href="http://www.aluha.cn" ><img src="<?php echo $baseurl; ?>wb/image/aluhalogoletter.png"/></a></div>
    <ul class="overflowhidden">
        <li class="li1">
            <div class="div5"><a href="<?php echo $baseurl; ?>dl_info.php?product_type=0"><img src="<?php echo $baseurl; ?>wb/image/appstore.png" /></a></div>
            <div class="div6"><a href="<?php echo $baseurl; ?>dl_info.php?product_type=1"><img src="<?php echo $baseurl; ?>wb/image/appstore_android.png" /></a></div>
        </li>
        <li class="li2"><div class="div4"><img src="<?php echo $baseurl; ?>wb/image/shaomiao.png" /></div>
        </li>
    </ul>
    </div>
</div>
</body>
</html>
