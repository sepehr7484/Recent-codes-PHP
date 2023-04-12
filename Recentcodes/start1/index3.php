


<html lang="us-fa">
<head>
    
</head>
<body style="background: aqua">
<form method="post" action="">
NAME:<input type="text" name="fname">
    <input type="submit" value="Onclick">
    <?php
    if ($_SERVER['REQUEST_METHOD']=='POST'){
        $name=$_REQUEST['fname'];
        if (empty($name)){
            echo 'ISEmpty';
        }else{
            echo '<h1>'.'Is Not Empty'.'</h1>';
//            echo 'Is Not Empty';
            echo '<h2>'.$name.'</h2>';
        }
    }
    ?>
</form>

<hr>
<form method="get" action="">
    Family:<input type="text" name="family">
    <input type="submit" value="Onclick">
    <?php
    if ($_SERVER['REQUEST_METHOD']=='GET'){
        $famliy=$_GET['family'];
        echo $famliy;




    }



    ?>
</form>


</body>
</html>
