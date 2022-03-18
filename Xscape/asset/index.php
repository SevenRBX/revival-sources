<?php
header("Content-Type: text/plain");
if(!empty($_GET['id']))
{
    $id = $_GET['id'];

    if (file_exists("assets/" . $id)) {
        $file = "http://www.xsscape.cf/asset/assets/" . $id;

        header("Content-Description: File Transfer");
        header("Content-Type: application/octet-stream");
        header("Content-Disposition: attachment; filename=\"". basename($id) ."\"");

        readfile($file);
        exit();
    } else {
            if($id == 1368){
            echo file_get_contents("http://www.xsscape.cf/asset/assets/1368");
            }else if($id == 1366){
            echo file_get_contents("http://www.xsscape.cf/asset/assets/1366");
            }
            else if($id == 1359){
            echo file_get_contents("http://www.xsscape.cf/asset/assets/1359");
            }else if($id == 1360){
            echo file_get_contents("http://www.xsscape.cf/asset/assets/1360");
            }else if($id == 1361){
            echo file_get_contents("http://www.xsscape.cf/asset/assets/1361");
            }else if($id == 1365){
            echo file_get_contents("http://www.xsscape.cf/asset/assets/1365");
            }else if($id == 1354){
            echo file_get_contents("http://www.xsscape.cf/asset/assets/1354");
            }else if($id == 1355){
            echo file_get_contents("http://www.xsscape.cf/asset/assets/1355");
            }else if($id == 1364){
            echo file_get_contents("http://www.xsscape.cf/asset/assets/1364");
            }else if($id == 1357){
            echo file_get_contents("http://www.xsscape.cf/asset/assets/1357");
            }else if($id == 1356){
            echo file_get_contents("http://www.xsscape.cf/asset/assets/1356");
            }else if($id == 1362){
            echo file_get_contents("http://www.xsscape.cf/asset/assets/1362");
            }else if($id == 1363){
            echo file_get_contents("http://www.xsscape.cf/asset/assets/1363");
            }else if($id == 1358){
            echo file_get_contents("http://www.xsscape.cf/asset/assets/1358");
            }else{
               header('Location: https://assetdelivery.roblox.com/v1/asset/?id=' . $id);
            }
        exit;
    }
}
