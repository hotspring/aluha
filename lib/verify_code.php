<?php

//调用控制器的init方法，进行session等验证
session_start();

//获取随机字符
$rndstring = '';
for($i=0; $i<4; $i++) $rndstring .= mt_rand(0,9);
$rndcodelen = strlen($rndstring);

$_SESSION['auth_code'] = $rndstring;

$im = imagecreate(50,20);
ImageColorAllocate($im, 255,255,255);

//背景线
$lineColor1 = ImageColorAllocate($im,240,220,180);
$lineColor2 = ImageColorAllocate($im,250,250,170);
for($j=3;$j<=16;$j=$j+3)
{
	imageline($im,2,$j,48,$j,$lineColor1);
}
for($j=2;$j<52;$j=$j+(mt_rand(3,6)))
{
	imageline($im,$j,2,$j-6,18,$lineColor2);
}

//画边框
$bordercolor = ImageColorAllocate($im, 0x99,0x99,0x99);
imagerectangle($im, 0, 0, 49, 19, $bordercolor);

//输出文字
$fontColor = ImageColorAllocate($im, 48,61,50);
for($i=0;$i<$rndcodelen;$i++)
{
	$bc = mt_rand(0,1);
	$rndstring[$i] = strtoupper($rndstring[$i]);
	imagestring($im, 5, $i*10+6, mt_rand(2,4), $rndstring[$i], $fontColor);
}

header("Pragma:no-cache\r\n");
header("Cache-Control:no-cache\r\n");
header("Expires:0\r\n");

//输出特定类型的图片格式，优先级为 gif -> jpg ->png
if(function_exists("imagejpeg"))
{
	header("content-type:image/jpeg\r\n");
	imagejpeg($im);
}
else
{
	header("content-type:image/png\r\n");
	imagepng($im);
}
ImageDestroy($im);
exit();

//ImageDestroy($im);

?>