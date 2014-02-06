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
.alter-phone{padding-top:80px; width:100%; text-align:center; font-size:14px;}
.waiguang{width:100%; height:320px; margin-top:12px; border:none;}
.header{height:60px; background: url(images/bgpass.jpg) repeat-x center center; width:100%;}
.logo{height:60px; background: url(images/logopass.png) no-repeat 10px center; background-size:80%; width:120px;}
.footer{ width:100%; height:78px;background:#eee;line-height:24px; text-align:center; padding-top:12px; color:#999;font-size:12px;}
</style>

</head>
<body>
<div class="header">
<div class="logo"></div>
</div>

<div class="waiguang">
    <h2 class="h1-title">操作结果</h2> 
    <dd class="alter-phone"><?php if($_GET['key']==1)  echo "密码修改成功";elseif($_GET['key']==2) echo "链接已失效，请重新找回密码"; else echo "密码修改失败"; ?></dd>
</div>

<div class="footer">
朗玛公司 版权所有<br /><span style="font-family:Arial, Helvetica, sans-serif;">Copyright &copy; 2013 Longmaster Inc. All Right Reserved.</span>
</div>
</body>
</html>
