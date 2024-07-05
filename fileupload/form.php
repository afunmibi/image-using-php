<?php
if(isset($_POST['upload'])){
	// echo "<pre>";
	// print_r($file);
	$file_name = $_FILES['file']['name']; //from image data
	$file_type = $_FILES['file']['type']; //from image data
	$file_size = $_FILES['file']['size']; //from image data
	$file_tem_loc = $_FILES['file']['tmp_name']; //from image data
	$file_store = "upload/".$file_name;
	if(move_uploaded_file($file_tem_loc, $file_store)){
		echo "Image uploaded";
	} else{
		echo 'Image not uploaded';
	}
	

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
	<h1>File Upload</h1>
	<input type="file" name="file">
	<input type="submit" name="upload" value="Upload Image">
	<img src="upload/IMG_20220524_181611.jpg" width="300px" height="300px">

</form>
</body>
</html>