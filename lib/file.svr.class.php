<?php

/**
 * @copyright phoneplus.com
 * @file:
 * @author: lu xingyun
 * @update:2012
 * @version 1.0
 * 对文件操作类，包括下载，删除，上传，复制操作
 * */
class fileManage {

    public $type = "";

    //文件下载
    public function header($filePath, $type) {
        //下载文件$filePath是文件的路径，$type是文件的类型
        //例如header(“../sms/emoji/01-01/static/1f0e3dad99908345f7439f8ffabdffc4.png”, "png")
        $this->type = $this->selectType($type);
            //$fileName=substr($path, strrpos($path, '/')+1);  //返回文件名
        header('Content-Description: File Transfer');
        header('Content-Type: ' . $this->type);
        header('Content-Disposition: attachment; filename=' . basename($filePath));
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filePath));
        header ( "location:" . $filePath );
//            ob_clean();
//            flush();
//            return readfile($filePath);
    }
    public function upload($filePath, $filename) {
        //将文件或者字符串写入到另外一个文件中去 
        //upload("../sms/emoji/01-01/static/1---1f0e3dad99908345f7439f8ffabdffc4.png", "../sms/emoji/01-01/static/1f0e3dad99908345f7439f8ffabdffc4.png")//上传
        $file = $filePath;
        if (file_exists($file))
            $contents = file_get_contents($filePath);
        else
            return "不存在此文件";
        $flag = file_put_contents($filename, $contents);
        if ($flag)
            return TRUE;
        else
            return FALSE;
    }

    public function del($filePath) {
        if (file_exists($filePath))
            $flag = unlink($filePath);
        else
            return "文件{$filePath}不存在";
        if ($flag)
            return TRUE;
        else
            return FALSE;
    }

    public function backUp($source, $destination, $child) {
        //将$source 文件夹中的所有文件移动到另外一个文件夹中去
        //用法：
        // backUp("feiy", "feiy2", 1):拷贝feiy下的文件到 feiy2, 包括子目录
        // backUp("feiy", "feiy2", 0):拷贝feiy下的文件到 feiy2, 不包括子目录
        //参数说明：
        // $source:源目录名
        // $destination:目的目录名
        // $child:复制时，是不是包含的子目录
        if (!is_dir($source)) {
            echo("Error:the $source is not a direction!");
            return FALSE;
        }
        if (!is_dir($destination)) {
            mkdir($destination, 0777);
        }
        $handle = dir($source);
        while ($entry = $handle->read()) {
            if (($entry != ".") && ($entry != "..")) {
                if (is_dir($source . "/" . $entry)) {
                    if ($child)
                        $this->backUp($source . "/" . $entry, $destination . "/" . $entry, $child);
                }else {
                    copy($source . "/" . $entry, $destination . "/" . $entry);
                }
            }
        }
        return TRUE;
    }

    function checkDir($path) {
        //检查并创建多级目录
        //checkDir("sdsd/12/32/84/sds/") 在本级目录下创建 sdsd/12/32/84/sds/ 五个文件夹  
        //如果是sdsd/12/32/84/sds这样的话  只会创建四个文件夹，最后一个不会创建
        $pathArray = explode('/', $path);
        $nowPath = '';
        array_pop($pathArray);
        foreach ($pathArray as $key => $value) {
            if ('' == $value) {
                unset($pathArray[$key]);
            } else {
                if ($key == 0)
                    $nowPath .= $value;
                else
                    $nowPath .= '/' . $value;
                if (!is_dir($nowPath)) {
                    if (!mkdir($nowPath, 0777))
                        return false;
                }
            }
        }
        return true;
    }

    public function selectType($type) {
        switch ($type) {
            case "pdf":
                $ctype = "application/pdf";
                break;
            case "apk":     //也可以换成exe等其他应用程序
                $ctype = "application/octet-stream";
                break;
            case "zip":
                $ctype = "application/zip";
                break;
            case "doc":
                $ctype = "application/msword";
                break;
            case "xls":
                $ctype = "application/vnd.ms-excel";
                break;
            case "ppt":
                $ctype = "application/vnd.ms-powerpoint";
                break;
            case "gif":
                $ctype = "image/gif";
                break;
            case "png":
                $ctype = "image/png";
                break;
            case "jpeg":
            case "jpg":
                $ctype = "image/jpg";
                break;
            default:
                $ctype = "application/force-download";
        }
        return $ctype;
    }

}

//$path="../sms/emoji/01-01/static/1f0e3dad99908345f7439f8ffabdffc4";
//$download=new fileManage();
//echo $download->header($path, "png");
//echo $download->del($path);
//echo $download->upload("../sms/emoji/01-01/static/1 1f0e3dad99908345f7439f8ffabdffc4", "../sms/emoji/01-01/static/1f0e3dad99908345f7439f8ffabdffc4")//上传
//echo $download->backUp("../sms/emoji/01-01", "../sms/emoji/01-04/01-05", 1)   //将文件夹01-01文件夹移动到01-04/01-05中去
//echo $download->checkDir("sdsd/12/32/84/sds/")
?>