<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/style1.css" />
</head>
<body>
<?php
	include("action/db/db.php");
	$sql = "SELECT * FROM t_guest";
	$result = $conn -> query($sql);
?>
	<div class="add m-3">
		<a href="book.php" class="btn btn-success">Add Guest</a>
	</div>
	<div class="pannel-body">
		<form action="">
			<table class="table table-stripped">
				<tr>
					<th>id</th>
					<th>name</th>
					<th>email</th>
					<th>number of guest</th>
					<th>status</th>
					<th>message</th>
				</tr>
				
				
<?php
	if($result -> num_rows > 0){
		$i=1;
		while($row = $result -> fetch_assoc()){
?>
				<tr>
					<td><?= $i ?></td>
					<td><?= $row['name'] ?></td>
					<td><?= $row['email'] ?></td>
					<td><?= $row['num_of_guest'] ?></td>
					<td><?= $row['status'] ?></td>
					<td><?= $row['message'] ?></td>
					<td><a href="update1.php?id=<?=$row['id']?>" class="btn btn-success">update</a></td>
					<td><a href="action/delete.php?id=<?=$row['id']?>" class="btn btn-success">delete</a></td>
				</tr>
<?php
			$i++;
		}
	}
?>
			</table>
		</form>
	</div>




</body>
</html>