<?php
$server='localhost';
$root='root';
$pas='';
$connect=mysqli_connect($server,$root,$pas);
if($connect){
    echo 'Success';
}else{
    echo 'Not Sucess';
}

?>