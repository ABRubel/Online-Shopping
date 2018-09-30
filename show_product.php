<?php

include 'db_connection.php';

if(isset($_GET['name']))
{
 $name=mysqli_real_escape_string($_GET['name']);
 $query_run=mysqli_query("SELECT * FROM `images` WHERE `name`='$name'");
 while($row=mysql_fetch_assoc($query_run)){
  $imageData = $row['image'];
 }
 header('content-type:image/jpeg');
 echo $imageData;

}
?>﻿