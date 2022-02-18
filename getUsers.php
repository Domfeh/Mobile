<?php
include "connection.php";

$email="adwoa@gmail.com";


//$email=$_POST['Fs_email'];
$query = $conn-> query("SELECT * FROM new_users WHERE FK_email='$email' ");
$result=array();

while($fetchData=$query->fetch_assoc()){
	$result[]=$fetchData;
}
echo json_encode($result);
 //echo $result[0]['id'];

?>
