<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>TestDB</title>
    </head>
    <body>
        <?php
            $host='localhost';
            $root='root';
            $password='';
            
            $connect= mysqli_connect($host,$root,$password);
            if(!$connect){
                die('NotConnect'. mysqli_connect_error());
            }
            $crtdb="CREATE DATABASE `store`";
            if(mysqli_query($connect, $crtdb)){
                die('Success');
            } else {
                echo  'Warning'.mysqli_connect_error($connect) ;
            }
            
        ?>
    </body>
</html>
