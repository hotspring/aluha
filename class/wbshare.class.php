<?php
/*
 * 微博分享功能
 */
class WbShare
{
    public $db;
    public $iwsUrl;
    public $iwfsUrl;
    public $type;

    public function __construct($db,$iws,$iwsfs,$type)
    {
        $this->db = new db($db);
        $this->iwfsUrl=$iwsfs;
        $this->iwsUrl=$iws;
        $this->type=$type;
    }

    public function getThreadInfo($thread_id)
    {
        $arr=array("op_type"=>1038,"ver"=>"","user_id"=>"","c_type"=>"","thread_id"=>$thread_id,"sid"=>"ipengsid");
//        print_r($arr);exit;
        $json=json_encode($arr);
//        echo $json;exit;
        $result=$this->curl($this->iwsUrl,array('json'=>$json));
        $list=json_decode($result);
        $data=$list->attach_list;
//        print_r ($data[0]->attach_type);exit;
        if($data[0]->attach_type)
            $this->mp4Toflv($data);
//        print_r($data);exit;
//        var_dump($list);exit;;;
//        $url=$list->list->ad_link;
        return $list;
    }
    private function curl($url,$data)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $val=curl_exec($ch);
        curl_close($ch);
        return $val;
    }
    public function insertShowLog($data,$user_id)
    {
		if(!is_numeric($user_id)||empty($user_id)||$user_id=="image")
			return ;
        $type=$data[0]->attach_type==3?1:2;
        $sql="insert into t_log_share_click (thread_id,author_id,user_id,type,share_channel,ip_addr,log_dt)
        values ('".$data[0]->thread_id."','".$data[0]->user_id."','".$user_id."','".$data[0]->attach_type."','".$this->type."','".$this->getIp()."',now());";
        $this->db->exec($sql);
//        echo $sql;exit;
    }
    private function mp4Toflv($data)
    {
        $arr=array("op_type"=>4017,"thread_id"=>$data[0]->thread_id,"attach_name"=>$data[0]->attach_name,"attach_type"=>6,"commit_dt"=>$data[0]->commit_dt);
        $jsonArr=json_encode($arr);
        $json=json_encode($arr);
//        echo $json;exit;
        $result=$this->curl($this->iwfsUrl,array('json'=>$json));
        return 0;
/*        $fp = fsockopen("127.0.0.1",
            80, $errno, $errstr, 30);
        if (!$fp) {
            echo "$errstr ($errno)<br />\n";
        } else {
            $out = "GET /web/iws/?json=$jsonArr HTTP/1.1\r\n";
            $out .= "Host: $url\r\n";
            $out .= "Connection: Close\r\n\r\n";

            fwrite($fp, $out);
            fclose($fp);
        }*/
    }
    private  function getIp(){
        if($HTTP_SERVER_VARS["HTTP_X_FORWARDED_FOR"])
        {
            $ip = $HTTP_SERVER_VARS["HTTP_X_FORWARDED_FOR"];
        }
        elseif($HTTP_SERVER_VARS["HTTP_CLIENT_IP"])
        {
            $ip = $HTTP_SERVER_VARS["HTTP_CLIENT_IP"];
        }
        elseif ($HTTP_SERVER_VARS["REMOTE_ADDR"])
        {
            $ip = $HTTP_SERVER_VARS["REMOTE_ADDR"];
        }
        elseif (getenv("HTTP_X_FORWARDED_FOR"))
        {
            $ip = getenv("HTTP_X_FORWARDED_FOR");
        }
        elseif (getenv("HTTP_CLIENT_IP"))
        {
            $ip = getenv("HTTP_CLIENT_IP");
        }
        elseif (getenv("REMOTE_ADDR"))
        {
            $ip = getenv("REMOTE_ADDR");
        }
        else
        {
            $ip = "Unknown";
        }
        return $ip;
    }
}
?>