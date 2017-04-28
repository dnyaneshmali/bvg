<?php
$root = $_SERVER['DOCUMENT_ROOT'].'/bvg/';
include($root."/config/config.php");
$data=array();
$query="SELECT * FROM tbl_sites";
$result = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($result)){

	//echo $row['username'];
	 //$data[]=$row;
      array_push($data,$row);
}
print json_encode($data);

?>