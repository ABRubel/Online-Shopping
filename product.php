<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	 <form action="insertPhoto.php" method="Post" enctype="multipart/form-data">
   <input type="file" name="image"><input type="submit" name="submit" value="Upload">
  </form>
 <?php
 include 'db_connection.php';
 $imageName='';
 if(isset($_POST['submit']))
 {
 $imageName= mysql_real_escape_string($_FILES['image']['name']);
 $imageData=mysql_real_escape_string(file_get_contents($_FILES['image']['tmp_name']));
 $imageType=mysql_real_escape_string($_FILES['image']['type']);
 if(substr($imageType,0,5)=='image')
 {
  if(mysql_query("INSERT INTO Product values('','$imageName','$imageData')"))
  { 
		echo'file uploaded<br>';
  }
  else
  {
  	echo mysql_error();
  }
 }
 else
 {
 	 echo 'its not an image<br>';
 }
}
?>
<img src="showImage.php?name=<?php echo $imageName?>">

 </body>
 
 </html>