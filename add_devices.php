<?php
	include 'connection.php';
    
	$serial = $_POST["serial"];
    $room = $_POST["room"];
    $floor= $_POST["floor"];
    $email= $_POST["email"];

    
    $query = mysqli_query($conn, "SELECT * FROM `users` WHERE `email`='$email'");
				$fetch = mysqli_fetch_array($query);
 
				$email =$fetch['email'];
        $sql = ("UPDATE `users` SET `serials`='$serial',`roomName`='$room',`floor`='$floor' WHERE `email`='$email'");
        $update=mysqli_query($conn, $sql);
    
        if($update){
        echo json_encode("Success");
    }else{
        echo json_encode("Error");
    }
        
   

?>
