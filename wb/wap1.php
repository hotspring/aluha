<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];
if (strpos($userAgent, "iPhone") || strpos($userAgent, "iPad") || strpos($userAgent, "iPod") || strpos($userAgent, "iOS")) {
//iPhone下载
    $flag=0;
    $url = ' "../dl_info.php?product_type=0"';
} else if (strpos($userAgent, "Android")) {
//Android下载
    $url = ' "../dl_info.php?product_type=1"';
} else {
    $url = ' "../dl_info.php?product_type=1"';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport"/>
    <meta content="yes" name="apple-mobile-web-app-capable"/>
    <meta content="black" name="apple-mobile-web-app-status-bar-style"/>
    <meta content="telephone=no" name="format-detection"/>
    <title>手机Aluha 微视频社交网站</title>
    <style type="text/css">
        body, ul, li, div {
            margin: 0;
            padding: 0;
            border: 0;
        }

        .overflowhidden {
            overflow: hidden;
        }

        .box img {
            margin-top: 0;
            margin-left: 2%;
            display: block;
            float: left;
            width: 11%;
        }

        .box .imgbottom {
            float: right;
            margin-top: 0.5%;
            margin-right: 2%;
            display: block;
            width: 28%;
        }

        .box .imgletter {
            float: left;
            margin-top: 0.5%;
            margin-left: 2%;
            display: block;
            width: 40%;
        }

        body {
            font-size: medium;
            background: #f8f8f8;
            background: url(image/top.jpg) repeat-x left top;
            background-size: 100%;
            background-color: #f8f8f8;
        }

        ul {
            list-style: none
        }

        .clear {
            clear: both;
        }

        .contentall {
            width: 96%;
            margin: 0 auto;
            margin-bottom: 4%
        }

        .content {
            width: 100%;
            height: 88%;
            margin-top: 4%;
            background-color: white;
        }

        .img1 {
            width: 100%;
        }

        .embed1 {
            width: 100%;
            height: 100%;
        }

        .photo {
            margin-top: 8%;
            margin-bottom: 2.5%;
            margin-left: 0;
            <!--border: #b6b6b6 1 solid;-->
        }

        .photo ul {
            float: left;
        }

        .photo ul li div {
            float: left;
        }
	.photo ul li lettercolor2{float:right;}
        .ul1 {
            width: 15.6%;
            <!--margin-left: 1%;-->
        }

        .ul1 img {
            width: 100%;
        }

        .ul2 {
            width: 71%;
            margin-left: 3%;
        }

        .ul2 li {
            width: 100%;
        }

        .lettercolor1 {
            color: #f887b9;
            margin-right: 10%;
            margin-bottom: 2%;
        }

        .lettercolor2 {
            color: #c4c5c9;
            font-size: small;
	    margin-top:2%;
        }

        .lettercolor3 {
            color: #7c7f89;
        }

        .letter {
            color: white;
            background: url(image/normol.png) repeat-x left top;
            width:
        }

        .xiazai {
            background: url(image/normol.png) left right no-repeat;
        }
    </style>
</head>

<body>

<!-- ***************** 左侧区域 *******************-->
<div class="box overflowhidden">
    <img src="image/logo.png"/>
    <img class="imgletter" src="image/logoletter.png"/>
    <a href=<?php echo $url; ?>><img class="imgbottom" src="image/buttom.png"/></a>
</div>

<!-- *****************内容侧区域 *******************-->
<div class="contentall">
    <div class="content">
        <?php
            echo "<video width=\"100%\" height=\"88%\" controls=\"controls\">
                        <source src='".$mp4Attach."' type=\"video/mp4\">
                      </video>";
        ?>
        <div class="photo overflowhidden">
            <ul class="ul1"><img src="<?php echo $picAvata; ?>"/></ul>
            <ul class="overflowhidden ul2">
                <li class="overflowhidden">
                    <div class="lettercolor1"><?php echo $list->threadInfo[0]->user_name ?></div>
                    <div class="lettercolor2"><?php echo date("Y-m-d H:i:s",substr($list->threadInfo[0]->commit_dt,0,10)); ?></div>
                </li>
                <li class="lettercolor3"><?php echo $list->threadInfo[0]->content ?></li>
            </ul>
        </div>
	</br>

    </div>
</div>
<!-- ***************** 倒数第二侧区域 *******************-->


<!-- ***************** 页尾区域 *******************-->
</body>
</html>
