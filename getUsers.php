<?php
include "connection.php";

$email="adwoa@gmail.com";


//$email=$_POST['Fs_email'];
$query = $conn-> query("SELECT * FROM new_users WHERE FK_email='$email' ");
$result=array();
$fetchData=$query->fetch_assoc();

echo json_encode($fetchData);
 //echo $result[0]['id'];

?>
