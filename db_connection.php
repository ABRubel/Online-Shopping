<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'cse411';

$con = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);

if($con == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
echo "Connect Successfully. Host info: " . mysqli_get_host_info($con);

?>