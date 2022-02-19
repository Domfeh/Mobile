<?php
include "connection.php";

//$email="servicefire.gh@gmail.com";


$email=$_POST['Fs_email'];
$query = $conn-> query("SELECT * FROM users WHERE email='$email' ");
$result=array();

while($fetchData=$query->fetch_assoc()){
	$result[]=$fetchData;
}
echo json_encode($result);
 //echo $result[0]['id'];

?>
