<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $server = 'localhost';
        $user = 'root'
                . '';
        $password = '';
        $connect = new mysqli($server, $user, $password);
//        if ($connect) {
//            echo 'True';
//        } else {
//            echo 'False';
//        }
        $code = "CREATE DATABASE `student1`";
        if (mysqli_query($connect, $code)) {
            die('Success Create DB' );
        } else {
            header('location:back.php');
            
                //    die('NOT Success Create DB'.connect_error);
    
        }
        ?>
    </body>
</html>
