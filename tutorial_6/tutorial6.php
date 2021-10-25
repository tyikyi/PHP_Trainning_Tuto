<!DOCTYPE html>
<html>
<head>
	<title>ImageUploadName</title>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
		<label>Username</label>
		<input type="text" name="username">
		<br><br>
		<label>UploadImage</label>
		<input type="file" name='myfile'>
		<br><br>
		<input type="submit" value="upload">
	</form><br>
    <?php

	$user=$_POST['username'];
	$image=$_FILES['myfile'];
	echo "Hello : $user <br/>";
	echo "File Name<b>::</b> ".$image['name'];

	move_uploaded_file($image['tmp_name'],"photos/".$image['name']);

	?>
</body>
</html>