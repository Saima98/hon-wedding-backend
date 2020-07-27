<?php
include('db/db.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM t_guest WHERE id = ".$id;
    $result = $conn->query($sql);
    if($result){
        header('Location: http://localhost/admin/update.php');
    }
	else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>