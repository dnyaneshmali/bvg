<?php
		// check username or password from database
$root = $_SERVER['DOCUMENT_ROOT'].'/bvg/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$dataa = json_decode($jsondata, true);

$adminuname = $dataa['username'];
$adminpass = $dataa['password'];
$encpass = md5($adminpass);

$query="SELECT * FROM tbl_bvgadmin where admin_username = '".$adminuname."' and admin_password = '".$encpass."'";
$result = mysqli_query($connection,$query);

$uname = "";
$upass = "";
$urole = "";
$uid = "";
if(mysqli_num_rows($result)>0){
while ($row = mysqli_fetch_assoc($result)){
	$data[]=$row;
	//$uid .= $row['admin_id'];
	//$uname .= $row['admin_username'];
	//$upass .= $row['admin_password'];
	//$urole .= $row['admin_role'];

}
//echo $uid;
//echo $uname;
//echo $urole;
echo json_encode($data);
}else{
	echo"Error";
}

		     ?>