<?php
include('db/db.php');

	$name = $_POST['name'];
	$email = $_POST['email'];
	$guest = $_POST['guest'];
	$status = $_POST['status'];
	$message = $_POST['message'];
	$id = $_POST['id'];
	
	$sql = "UPDATE t_guest SET name='".$name."', email='".$email."', num_of_guest='".$guest."', status='".$status."', message='".$message."' WHERE id=" .$id;
	
	$result= $conn -> query($sql);

	if($result){
        header('Location: http://localhost/wedding/admin/');
    }else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>