<?php
/**
 * 文件功能：下载程序并更新数据库
 */
//include '../m/get_dl_app_info.php';
include_once '../config/config.inc.php';
include_once '../lib/mysql.class.php';
include_once'../lib/xml2array.php';
include_once '../lib/file.svr.class.php';
include_once '../class/download.class.php';

$xmlArray = new Xml2Array('../download/version.xml'); 
$xml2Array = $xmlArray->createArray();
$dlInfo= $xml2Array['whatsnew']['Module'];                                     
// 获取时间当前当地时间
$date = date ( "Y-m-d" );

$download = new Download($databaseinfo['db_admin']);
//更新数据库
if(isset($_GET['product_type'])&&$_GET['product_type']==0)
{
   $fileUrl=$dlInfo['ios']['url'];
   $download->insertiOS();
}
elseif (isset($_GET['product_type'])&&$_GET['product_type']==1)
{
   $fileUrl=$dlInfo['android']['url'];
   $download->insertAndroid ();
}
else return 0;

//下载文件
$fileInfo=new fileManage();
$fileInfo->header($fileUrl, "apk");
?>