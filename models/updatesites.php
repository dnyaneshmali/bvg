<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/bvg/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
$query = "UPDATE tbl_sites SET site_name='".$data['site_name']."', site_type='".$data['site_type']."',site_city='".$data['site_city']."',site_pin='".$data['site_pin']."' WHERE site_id='".$data['site_id']."'";

    if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
    }else{
    	echo"success";
    }
	

 	?>