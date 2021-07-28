<?php
$server="localhost";
$username="eagle";
$password="addy";
$database="zalego";

$conn=mysqli_connect($sever,$username,$password,$database);
if(!$conn){
    die('No connection'.mysqli_connect_error());
}
?>