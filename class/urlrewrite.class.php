<?php
class UrlRewrite
{
    public $db;
    
    public function __construct($db) 
    {
        $this->db = new db($db);
    }
    
    /**
     * 写访问日志
     * @param int $_ad_id   广告ID
     * @param string $_ip   IP
     */
    public function insertAdLog($_ad_id, $_ip) {
        $_ad_id = addslashes($_ad_id);
        if (is_numeric($_ad_id)) {
            $sql = "INSERT INTO t_log_advertisement_click(ad_id,click_ip,log_dt)";
            $sql .= " VALUES('" . $_ad_id . "','" . $_ip . "','" . date("Y-m-d H:i:s") . "')";
            $this->db->exec($sql);
        }
    }
    
    public function getUrl($url,$id)
    {
        $arr=array("op_type"=>1066,"ver"=>"","user_id"=>"","c_type"=>"","adid"=>$id,"sid"=>"ipengsid");
//        print_r($arr);exit;
        $json=json_encode($arr);
        $result=$this->curl($url,array('json'=>$json));
        $list=json_decode($result);
//        var_dump($list);exit;;;
        $url=$list->list->ad_link;
        if(!empty($url))
            Header("Location:$url");
//        return $url;
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
}
?>