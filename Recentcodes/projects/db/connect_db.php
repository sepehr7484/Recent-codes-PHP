<?php

$host='localhost';
$user='root';
$password='';
$db1='student';
$mysql=new mysqli($host,$user,$password,$db1);
if($mysql->connect_error){
    die("Not Connect :".$mysql->connect_error);
}else{
    echo 'success connect to data base.';
}
//
//
//$displaydata=$mysql->query("SELECT * FROM login");
//if($displaydata -> num_rows>0){
//    while ($row = $displaydata ->fetch_assoc()){
//        echo '<pre>';
//        echo $row["id"].$row["email"];
//        echo '</pre>';
//    }
//}