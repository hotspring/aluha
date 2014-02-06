<?php
class Repassword
{
    public $db;
    public function __construct($db) 
    {
        $this->db = new Database($db);
    }

    public function resetPassword($key,$password)
    {
        $sql = "call pr_user_pwd_reset('".$key."','".md5($password)."')";
        $result=$this->db->ReturnDataTable($sql);
        return $result[0][0];
//        return $this->db->exec($sql);
    }
}
?>