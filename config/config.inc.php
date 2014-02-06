<?php
//获取admin数据库信息
$databaseinfo=array(
    "db_admin"=>array(
        'host'=>'10.21.64.3',
        'user'=>'root',
        'pwd'=>'7v8aEh3IEH',
        'databasename'=>'db_admin',
        'charset'=>'utf8mb4'
    ),    
   "db_query" => array(
        'host' => '10.21.64.1',
        'user' => 'root',
        'pwd' => '7v8aEh3IEH',
        'databasename' => 'db_query',
        'charset' => 'utf8mb4'
    ),
   "db_log_blog" => array(
        'host' => '10.21.64.2',
        'user' => 'root',
        'pwd' => '7v8aEh3IEH',
        'databasename' => 'db_log_blog',
        'charset' => 'utf8mb4'
    )
);

//iws地址
$iwsurl="http://iws.ipeng.langma.cn";
$iwsfsurl="http://iwsfs.ipeng.langma.cn/";
$baseurl="http://wordpress.aluha.langma.cn/";
$cdn=array(
    $key=2,        //对应杭州或者北京的键值
    1=>"http://hangzhou.cdn.ipeng.langma.cn/iwsfs/",
    2=>"http://cdn.ipeng.langma.cn/",
);


?>
