<?php
	include 'connection.php';
    $oldNum= $_POST["oldNumber"];
    $newNum = $_POST["newNumber"];
    $email = $_POST["Fs_email"];

    $query = mysqli_query($conn, "SELECT * FROM `users` WHERE `email`='$email'");
				$fetch = mysqli_fetch_array($query);

		$email =$fetch['email'];
        $sql = ("UPDATE `users` SET `phoneNumber`='$newNum' WHERE `phoneNumber`='$oldNum' and `Fs_email`='$email' ");
        $update=mysqli_query($conn, $sql);
    
        if($update){
        echo json_encode("Success");
    }else{
        echo json_encode("Error");
    }
        


?>
