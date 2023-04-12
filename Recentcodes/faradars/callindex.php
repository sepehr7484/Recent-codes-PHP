<?php
$nameerr="";
$name='';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if (empty($_POST["name"])){
        $nameerr="Name is Requird";
    }else{
        $names=$_POST['name'];
        echo $names;
    }
}
?>