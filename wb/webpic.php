<?php
//print_r($list->threadInfo[0]);exit;
include_once('../lib/wap_check.php'); //引用检测手机wap检测文件
//$wapurl = "./m";
$is_wap = mobile_device_detect(true, true, true, false, false);
if ($is_wap) {
    require_once "pic.php";
    exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <script type="text/javascript" src="<?php echo $baseurl; ?>js/swfobject.js"></script>
    <script type="text/javascript" src="<?php echo $baseurl; ?>js/jquery-1.3.2.min.js"></script>
    <title>Aluha 微视频社交网站</title>
    <script type="text/javascript">
        $(document).ready(function () {
            var pic = $("#pics li:visible");
            if (pic.attr("id") == "pic0")
                $(".jiantouleft").hide();
            if (<?php echo count($pics); ?>==1)
            $(".jiantouright").hide();
            $(".jiantouleft").click(function () {
                var pic = $("#pics li:visible");
                pic.hide();
                pic.prev().show();
                if (pic.prev().attr("id") == "pic0")
                    $(".jiantouleft").hide();
                else
                    $(".jiantouright").show();
            });
            $(".jiantouright").click(function () {
                var pic = $("#pics li:visible");
                pic.hide();
                pic.next().show();
                if (pic.next().attr("id") == "<?php echo "pic".(count($pics)-1); ?>")
                    $(".jiantouright").hide();
                else
                    $(".jiantouleft").show();
            });
        })
    </script>
    <style>
        * {
            margin: 0px;
            padding: 0px;
            border: 0;
        }

        body {
            background-color: #f8f8f8;
        }

        .overflowhidden {
            overflow: hidden;
        }

        .box {
            width: 960px;
            margin: 0 auto;
            margin-top: 40px;
        }

        .left {
            float: left;
            border: #b6b6b6 1px solid;
            padding-bottom: 20px;
            width: 480px;
            margin: 0 auto;
            padding-left: 30px;
            padding-right: 30px;
            background-color: #ffffff;
            margin-right: 20px;

        }

        .right {
            float: right;
            width: 327px;
            margin: 0 auto;
            height: 480px;
            margin-right: 50px;
        }

        .jiantouleft{position:absolute;left:-24px;top:40%;}
        .jiantouright{position:absolute;left:488px;top:40%;}

        .ul1 {
            float: left;
            margin-top: 15px;
            margin-left: 15px;
        }

        .ul2 {
            float: right;
            list-style: none;
            width: 380px;
            margin-top: 15px;
            margin-right: 15px;
        }

        .div1 {
            float: left;
            color: #f65ea5;
            font-size: 24px;
            font-family: "微软雅黑";
        }

        .div2 {
            float: right;
            color: #c4c5c9;
            font-size: 14px;
            font-family: "微软雅黑";
            margin-top: 8px;
        }

        .div3 {
            margin-top: 0px;
        }

        .liletter {
            color: #7c7f89;
            font-size: 16px;
            font-family: "微软雅黑";
            margin-top: 6px;
        }

        li {
            list-style: none;
        }

        .li1 {
            float: left;
        }

        .li2 {
            float: right;
            margin-top: 45px;
        }

        .div5 {
            margin-bottom: 16px;
            margin-top: 40px;
        }

        .juzhong{text-align:center;position:relative;}
        .juzhong1 img{max-width:480px;
            　 　width:480px;
            　 　width:expression(document.body.clientWidth>480?"480px":"auto");
        　 　overflow:hidden;
        }
}
    </style>
</head>

<body>
<div class="overflowhidden box">
    <!--左边-->
    <div class="left overflowhidden">
        <div class="juzhong">
            <div class="juzhong1">
                <ul id="pics">
                    <?php
                    foreach($pics as $pickey=> $eachPic)
                    {
                        $style=$pickey==0?"":"style='display: none'";
                        echo "<li id='pic".$pickey."' ".$style."><img class=\"img1\"  src='".$cdn[$key]."4022/".$list->threadInfo[0]->thread_id."/".$eachPic->attach_name."/3/".$eachPic->commit_dt."/123"."' /></li>";
                    }
                    ?>
                </ul>
            </div>
            <a href="#"><img src="<?php echo $baseurl; ?>wb/image/jiantouleft.png" class="jiantouleft"/></a>
            <a href="#"><img src="<?php echo $baseurl; ?>wb/image/jiantouright.png" class="jiantouright"/></a>

        </div>
        <div>
            <ul class="ul1">
                <li><img src="<?php echo $picAvata; ?>" width="50" height="50"/></li>
            </ul>
            <ul class="ul2">
                <li class="overflowhidden">
                    <div class="div1"><?php echo $list->threadInfo[0]->user_name ?></div>
                    <div
                        class="div2"><?php echo date("Y-m-d H:i:s", substr($list->threadInfo[0]->commit_dt, 0, 10)); ?></div>
                </li>

                <li class="liletter"
                    style="word-break: break-all; word-wrap:break-word"><?php if (!empty($list->threadInfo[0]->content)) echo $list->threadInfo[0]->content; else echo "<em style=\"color:#bdbfc4;font-size: 16px\">Ta什么都没有说！ </em>"; ?></li>
            </ul>
        </div>
    </div>
    <!--youbian-->
    <div class="right">
        <div class="div3"><a href="http://www.aluha.cn"><img src="<?php echo $baseurl; ?>wb/image/aluhalogoletter.png"/></a>
        </div>

        <ul class="overflowhidden">
            <li class="li1">
                <div class="div5"><a href="<?php echo $baseurl; ?>dl_info.php?product_type=0"><img
                            src="<?php echo $baseurl; ?>wb/image/appstore.png"/></a></div>
                <div class="div6"><a href="<?php echo $baseurl; ?>dl_info.php?product_type=1"><img
                            src="<?php echo $baseurl; ?>wb/image/appstore_android.png"/></a></div>
            </li>
            <li class="li2">
                <div class="div4"><a href="#"><img src="<?php echo $baseurl; ?>wb/image/shaomiao.png"/></a></div>
            </li>
        </ul>
    </div>
</div>
</body>
</html>
