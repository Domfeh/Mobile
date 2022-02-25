<?php

    include 'connection.php';
    $email='adwoa@gmail.com';
    //$email = $_POST["Fs_email"];
    $result=mysqli_query($conn,"select email, phoneNumber,Name from new_users  WHERE `Fk_email`='$email'");
    $row=mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)>0){
    while($row[]=mysqli_fetch_assoc($result)){
    }
        echo json_encode($row);
}else{
  echo  json_encode("Error");
}
?>    
