<?php
	include 'connection.php';
    $oldNum= $_POST["oldNumber"];
    $newNum = $_POST["newNumber"];
        $sql = ("UPDATE `users` SET `phoneNumber`='$newNum' WHERE `phoneNumber`='$newNum'");
        $update=mysqli_query($conn, $sql);
    
        if($update){
        echo json_encode("Success");
    }else{
        echo json_encode("Error");
    }
        
   

?>
