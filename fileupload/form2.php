<?php 
if(isset($_POST['upload'])){
	// echo "<pre>";
	// print_r($_FILES);

	$file_name = $_FILES['file']['name'];
	$file_type = $_FILES['file']['type'];
	$file_tmp_name = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_store = "upload/".$file_name;

	move_uploaded_file($file_tmp_name,$file_store );

}


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>File Upload</title>
</head>
<body>
<form action="?" method="POST" enctype="multipart/form-data">
	<h1>File Upload2</h1>
	<input type="file" name="file">
	<input type="submit" name="upload" value="Upload Image">
	

</form>
</body>
</html>