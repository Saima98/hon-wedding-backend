<?php
include('db/db.php');
	$name = $_POST['name'];
	$email = $_POST['email'];
	$guest = $_POST['guest'];
	$status = $_POST['status'];
	$message = $_POST['message'];
	//file up
	$target_dir = "../asset/img/uploads/";
	$target_file = $target_dir . basename($_FILES["file_to_up"]["name"]);
	
	
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	
	
	if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
	} else {
		if (move_uploaded_file($_FILES["file_to_up"]["tmp_name"], $target_file)) {
			echo "The file ". basename( $_FILES["file_to_up"]["name"]). " has been uploaded.";
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}
    

	$sql = "INSERT INTO t_guest (name,email,num_of_guest,status,message) VALUES ('".$name."','".$email."','".$guest."','".$status."','".$message."')";
	
	$result = $conn->query($sql);
	
	if($result){
		$t = 3;
		header('location: http://localhost/wedding/admin/');
	}
	else{
		echo "Error" . $sql . "<br/>" . mysqli_error($conn);
	}
	
	
?>