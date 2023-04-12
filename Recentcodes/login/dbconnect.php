<?php
$sname="localhost";
$uname="root";
$password="";
$db_name="login";

$connect=mysqli_connect($sname,$uname,$password,$db_name);

if(!$connect){
    echo 'Connection failed!';
}else{
    echo 'Connection Success!';
}
?>