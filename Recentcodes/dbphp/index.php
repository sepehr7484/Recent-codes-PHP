<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $db_name = 'wc';
        $con = new mysqli($host, $user, $pass, $db_name);
        if ($con->connect_error) {

            echo 'Warning';
        } else {
            echo 'Success.';
        }
        echo '<hr>';
        $qurying="SELECT * FROM employee";
        $result= mysqli_query($con, $qurying);
        echo '<Table>';   
          echo '<tr>'; 
          echo '<th>id</th>'; 
           echo '<th>name</th>'; 
            echo '<th>details</th>'; 
             echo '</tr>'; 
            
        while ($row= mysqli_fetch_array($result)){
             echo '<tr>'; 
            echo   '<td>'.  $row['id'].$row['name'].$row['details'].'</td>'.'<br>';
            
              echo '</tr>'; 
        }
       
          echo '</Table>'; 
        ?>
    </body>
</html>
