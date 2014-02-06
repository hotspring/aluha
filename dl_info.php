<?php
/**
 * 文件功能：下载程序并更新数据库
 */
//include '../m/get_dl_app_info.php';
ob_start();
include_once 'config/config.inc.php';
include_once 'lib/mysql.class.php';
include_once 'lib/xml2array.php';
include_once 'lib/file.svr.class.php';
include_once 'class/download.class.php';

$xmlArray = new Xml2Array('config/version.xml');
$xml2Array = $xmlArray->createArray();
$dlInfo = $xml2Array['whatsnew']['Module'];
// 获取时间当前当地时间
$date = date("Y-m-d");

$download = new Download($databaseinfo['db_admin']);
//更新数据库
if (isset($_GET['product_type']) && $_GET['product_type'] == 0) {
    $fileUrl = $dlInfo['ios']['url'];
    $download->insertiOS();
} elseif (isset($_GET['product_type']) && $_GET['product_type'] == 1) {
    $fileUrl = $dlInfo['android']['url'];
    $download->insertAndroid();
} else {
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    if (strpos($userAgent, "iPhone") || strpos($userAgent, "iPad") || strpos($userAgent, "iPod") || strpos($userAgent, "iOS")) {
//iPhone
        header("location:http://www.aluha.cn/dl_info.php?product_type=1");;
    } else if (strpos($userAgent, "Android")) {
//Android
        header("location:http://www.aluha.cn/dl_info.php?product_type=0");;
    } else {
        header("location:http://www.aluha.cn");;
    }
}

//下载文件
$fileInfo = new fileManage();
$fileInfo->header($fileUrl, "apk");
?>