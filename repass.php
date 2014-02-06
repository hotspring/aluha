<?php 
ob_start();
if(empty($_GET['dt']))
    $dt=time();
else
    $dt=abs(time()-$_GET['dt']);
if($dt>1800)
    header("location:" . "setpass.php?key=2");    
?>﻿
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta id="viewport" name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="black" name="apple-mobile-web-app-status-bar-style" />
<meta content="telephone=no" name="format-detection" />
<title>重置啊噜哈账户密码</title>
<style type="text/css">
body,h1,p,blockquote,dl,dt,dd,ul,ol,li,form{margin:0;padding:0}
body{ font-size:14px;font-family:'XinGothic-SinaWeibo','Microsoft Yahei','Simsun'; color:#333; line-height:150%; background:#fff}
.h1-title{font-size:16px; color:#ff7e00; height:47px; line-height:47px; border-bottom:1px dashed #ccc; text-indent:20px;}
ul,ol{list-style:none}

.s_fong{ font-size:12px; color:#999; text-indent:120px; display:block;}
dt{ width:120px; height:32px; float:left; text-align:right;}
img{vertical-align:middle;border:0;-ms-interpolation-mode:bicubic;}
.alter-phone{ padding-top:30px;}
.alter-phone li{ line-height:32px; height:32px; text-align: left;}
.waiguang{width:100%; height:320px; margin-top:12px; border:none;}
.clear{clear:both;}
.no_bg{border:0 none;padding:0;background-color:transparent;cursor:pointer;display:block; border: 1px solid #ccc;}
.sub_bg input{width:100px;height:32px;}
.sub_bg1 input{width:160px;height:20px;}
.header{height:60px; background: url(images/bgpass.jpg) repeat-x center center; width:100%;}
.logo{height:60px; background: url(images/logopass.png) no-repeat 10px center; background-size:80%; width:120px;}
.footer{ width:100%; height:78px;background:#eee;line-height:24px; text-align:center; padding-top:12px; color:#999;font-size:12px;}
</style>
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script language="javaScript">
    $(document).ready(function(){
        $("#submit").click(function(){
            if($("#pass").val()!=$("#pwd").val())
            {
                alert("两次密码不相同!");return false;
            }                
            if($("#pass").val().length<6)
            {
                alert("新密码不能少于6位!");return false;
            }
            if($("#pass").val().length>20)
            {
                alert("新密码不能大于20位!");return false;
            }
            if(checkRege($("#pass").val(),/[^A-Za-z0-9]+/))
            {
                alert("新密码中不能有特殊字符!");return false;
            }
        })
    })
function checkRege(o,regeop){
        var regNum= regeop;
        var flag=regNum.test(o);
        return flag;
}    
</script>

</head>
<body>
<div class="header">
<div class="logo"></div>
</div>

<div class="waiguang">
<form id=form1 name="theForm" method = "post" action="resetpass.php" onsubmit="return check()">
    <h2 class="h1-title">重置啊噜哈账户密码</h2>
	<ul class="alter-phone">
    <li class="sub_bg1"><dt>新 密 码：</dt> <input type="password" name="pass" id="pass" maxlength="24"/></li>
    <li><span class="s_fong">密码长度6～20位，由数字、字母组成</span></li>
    <li class="sub_bg1"><dt>确认密码：</dt> <input  type="password" name="pwd" id="pwd" maxlength="24" /></li>
    <li style="padding-left:120px; margin-top:20px;">  
    <div class="sub_bg">  <input  type="submit" value="提交" name="submit" id="submit"/> </div>
    </li>
    <li class="clear"></li>
    <input style="visibility:hidden" name="key" id="key" maxlength="24" value="<?php echo $_GET['key'] ?>"/>
    </ul>
</form>
</div>

<div class="footer">
朗玛公司 版权所有<br /><span style="font-family:Arial, Helvetica, sans-serif;">Copyright &copy; 2013 Longmaster Inc. All Right Reserved.</span>
</div>
</body>
</html>
