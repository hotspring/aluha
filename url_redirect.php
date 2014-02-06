<?php
ob_start();
include_once 'config/config.inc.php';
include_once 'lib/mysql.class.php';
include_once 'lib/file.svr.class.php';
include_once 'class/urlrewrite.class.php';

$info=new UrlRewrite($databaseinfo['db_admin']);
$id=$_GET['id'];
$info->insertAdLog($id, $_SERVER['REMOTE_ADDR']);
$info->getUrl($iwsurl,$id);
?>