<?php

function callconnec(){
    $connecting= mysqli_connect('localhost','root','','upload');
    if(!$connecting){
        echo 'Warrning Server.......';
        exit();
    } else {
        echo "<script>alert('Success to Db.');</script>";
        
    }
}