<?php
require_once '../config/config.inc.php';
require_once '../lib/mysql.class.php';
require_once '../class/wbshare.class.php';
$params = explode('show.php',$_SERVER['REQUEST_URI']);
//print_r($params);exit;
$arr =explode('/',trim($params[1],"/"));
$user_id=explode('?',trim($arr[2]));
$info=new WbShare($databaseinfo['db_log_blog'],$iwsurl,$iwsfsurl,$arr[1]);
//$id=str_replace("|","$",$arr['0']);
$list=$info->getThreadInfo($arr['0']);
$info->insertShowLog($list->attach_list,trim($user_id[0]));
$picAvata=$cdn[$key]."4020/".$list->threadInfo[0]->user_id;
if(empty($list->attach_list))
    require_once 'error.php';
elseif($list->threadInfo[0]->type==2)
{
    $attach_name = str_replace('.mp4', '.flv', $list->attach_list[0]->attach_name);
    $pic_name=str_replace('.mp4', '.jpg', $list->attach_list[0]->attach_name);
//    print_r ($list->attach_list[0]->commit_dt);exit;
    $cdnUrl=$cdn[$key]."4022/".$list->threadInfo[0]->thread_id."/".$attach_name."/6/".$list->attach_list[0]->commit_dt;
    $picCdnUrl=$cdn[$key]."4022/".$list->threadInfo[0]->thread_id."/".$pic_name."/6/".$list->attach_list[0]->commit_dt;
    $mp4Attach=$cdn[$key]."4022/".$list->threadInfo[0]->thread_id."/".$list->attach_list[0]->attach_name."/6/".$list->attach_list[0]->commit_dt;
//    echo $cdnUrl;exit;
    require_once 'web.php';
}elseif($list->threadInfo[0]->type==1)
{
    $pics=$list->attach_list;
    require_once 'webpic.php';
//    require_once 'pic.php';
//    print_r($list->attach_list);exit;
//    echo 1;exit;
}
?>