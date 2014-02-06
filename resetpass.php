<?php
/**
 * 修改密码功能
 */
ob_start();
include_once 'config/config.inc.php';
include_once 'lib/mysqli.class.php';
include_once 'class/repassword.class.php';
$password = new Repassword($databaseinfo['db_query']);
if(empty($_POST['key'])&&empty($_POST['pass']))
    return ;
$result=$password->resetPassword($_POST['key'],$_POST['pass']);
if ($result=='-101')
    header("location:" . "setpass.php?key=2"); 
elseif($result=='0')
    header("location:" . "setpass.php?key=1");
else
    header("location:" . "setpass.php?key=0");

?>