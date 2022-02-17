<?php


include "session.php";
session_start();
if($login_session){

    include 'connection.php';
    $sql="select count(distinct id) from users";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
    $result= "$row[0]";
    echo json_encode($result);
}else{
  echo  json_encode("Error");
}
?>    