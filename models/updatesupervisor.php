<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/bvg/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
$query = "UPDATE tbl_supervisor SET supervisor_fname='".$data['supervisor_fname']."', supervisor_number='".$data['supervisor_number']."',supervisor_addr='".$data['supervisor_addr']."' WHERE supervisor_id='".$data['supervisor_id']."'";

    if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
    }else{
    	echo"success";
    }
	

 	?>