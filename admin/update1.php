<html>
	<head>
		<title>update1</title>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="../asset/css/style.css" />
	</head>
	<body>
		
	
<?php

include('action/db/db.php');

$id = $_GET['id'];


$sql = "SELECT * FROM t_guest WHERE id =" .$id;
	
$result = $conn->query($sql);


if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()){
		$name = $row['name'];
		$email = $row['email'];
		$num_of_guest = $row['num_of_guest'];
		$status = $row['status'];
		$message = $row['message'];
	}
}
?>
	<div class="container">
		<section id="rsvp" class="rvsp_area">
			<div class="rvsp container fix pd100">
				<div class="form">
					<h1 class="common_heding">be our guest</h1>
					<p>Please reserve before December 15th, 2018.</p>
					<form action="action/update2.php" method="post" enctype="multipart/form-data">
						<input type="hidden" name="id" value="<?=$id ?>" /><br/><br/>
						<input type="text" name="name" value="<?=$name ?>" required>
						<input type="email" name="email" value="<?=$email ?>" required>
						<select name="guest" type="int" required>
							<option><?= $num_of_guest ?></option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						</select>
						<select name="status" type="text" required >
							<option value="$status"><?= $status ?></option>
							<option value="$status">i am attending</option>
							<option value="$status">all event</option>
							<option value="$status">wedding ceremony</option>
							<option value="$status">reception party</option>
						</select>
						<textarea name="message" placeholder="<?= $message?>" value="<?= $message?>"></textarea>
						<input type="submit" value="send invitation">
					</form>
				</div>
			</div>
		</section>
	</div>
	
	</body>
</html>
