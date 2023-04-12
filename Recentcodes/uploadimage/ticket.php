<?php
 $testconnect= mysqli_connect('localhost','root','','ticket7');
$name="";
$discreption="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name.=$_POST['name'];
    $discreption.=$_POST['discreption'];
    $insert="INSERT INTO request(name,discreption) values($name,$discreption) ";
    $res_query= mysqli_query($testconnect, $insert);
    if (mysqli_query($testconnect, $insert)) {
        echo 'WAringn';
    } else {
        
        echo 'success';
//        echo '<div style="background: greenyellow;width: 650px;height: 40px">
//            Success.
//        </div>';
    }
    mysqli_close($testconnect);

}




?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        
        <?php
       
        if(!$testconnect){
            echo 'Warning to Connect.';
        }else{
            echo 'Success To Connect.';
        }
        ?>
        <h2>Ticket</h2>
        <form action="" method="post">
            <input type="text" name="name" placeholder="EnterName"><br><br>
            <textarea rows="9" cols="70" name="discreption" placeholder="Enter Request">
               
            </textarea>
            <br><br><br>
            
            <input type="submit" name="submit" value="      Click      ">
        </form>
        <h4>
            <?php echo $name.'<br>';                    echo $discreption;?>
        </h4>
        
    </body>
</html>
