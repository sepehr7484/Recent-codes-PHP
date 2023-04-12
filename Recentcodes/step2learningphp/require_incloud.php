<?php

$call_mysql=new mysqli('localhost','root','','student');
if($call_mysql->connect_error){
    die("Not Connect :".$call_mysql->connect_error);
}else{
    echo 'success connect to data base.';
}
 