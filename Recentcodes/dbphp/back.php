<?php

pdoconnect();

function getmethod() {
    $name = $_GET['name'];
    $email = $_GET['email'];
    print_r($name . '\n');
    print_r($email);
    var_dump($name);
    var_dump($email);
    echo '<hr>';
    if (is_string($name)) {
        echo 'String';
    } elseif (is_int($name)) {
        echo 'Numberic';
    } else {
        echo 'Other';
    }
}

function postmethod() {
    $name = $_POST['name'];
    echo'salam'. $name;
    
    
    
    
}
function filemethod(){
    echo 'LocalAddress:'.$_FILES['img1']['tmp_name'];
    echo '<br>';
    //*******************
    echo '<pre>';
    var_dump($_FILES);
        echo '</pre>';
        //********************
        $direct=__DIR__; 
        $img1=move_uploaded_file($_FILES['img1']['tmp_name'],$direct.'/img/'.$_FILES['img1']['name']);
//        $img2=move_uploaded_file($_FILES['img2']['tmp_name'],$direct.'/img/'.$_FILES['img1']['name']);
        if ($img1  ) {
            echo 'Success';
        } else {
            echo 'Warning';
        }

      
        

    
}
function pdoconnect(){
    $s='localhost';
    $u='root';
    $p='';
    try {
        $connnectpdo=new PDO("mysql:host=$s",$u,$p);
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "CREATE DATABASE myDBPDO";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Database created successfully<br>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
    }
$connnectpdo=null;
}