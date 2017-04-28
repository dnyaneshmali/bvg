<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/bvg/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
date_default_timezone_set('Asia/Kolkata');
$site_date = date("Y-m-d g:i a");

$query = "INSERT INTO tbl_sites(site_name, site_type, site_city, site_area, site_road, site_pin, site_shift_name, site_shift_time, site_start_date, site_end_date, site_date)
    VALUES('".$data['site_name']."','".$data['site_type']."', '".$data['site_city']."', '".$data['site_area']."', '".$data['site_road']."',  '".$data['site_pin']."', '".$data['siteshift_name']."', '".$data['siteshift_time']."', '".$data['sstart_date']."', '".$data['end_date']."','".$site_date."')";
    if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
    }else{
    	echo"success";
    }
	
echo json_encode($data);

 	?>