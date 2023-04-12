<?php
require_once '../db/connect_db.php';
$email1=$_POST['email'];
$password1=$_POST['password'];
$resultdata=$mysql-> query("SELECT * FROM  login WHERE email='$email1'");
if (mysqli_num_rows($resultdata)>0 ) {
    echo 'success';
}else{
    echo 'do not success....';
}