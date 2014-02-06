<?php
class Download
{
    public $db;
    public function __construct($db) 
    {
        $this->db = new db($db);
    }

    public function insertiOS()
    {
        $sql = "insert into t_log_client_dl (log_dt,phone_os,dl_num) values('" . date("Y-m-d") . "',0,1) ON DUPLICATE KEY 
                  UPDATE dl_num=dl_num+1 ";
        $this->db->exec($sql);
    }
    public function insertAndroid()
    {
        $sql = "insert into t_log_client_dl (log_dt,phone_os,dl_num) values('" . date("Y-m-d") . "',1,1) ON DUPLICATE KEY 
                  UPDATE dl_num=dl_num+1 ";
//        echo $sql;exit;
        $this->db->exec($sql);
    }
}
?>