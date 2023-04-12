<?php
?>


<html>
<head></head>
<body>
<!--<form method="post" action="index.php">-->
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<label>Name:</label>
    <input type="text" name="fname">
<!--    <input type="submit" value="OnClick">-->

    CODEMELI:<input type="tel" name="codeid">


    <input type="submit" value="Send">

    <?php
    if ($_SERVER['REQUEST_METHOD']==='POST'){
        $fname=$_POST['fname'];
        $codeid=$_POST['codeid'];

        print_r($fname);
        print_r($codeid);

    }else{
        echo 'WARRNING METHOD';
    }
    ?>

</form>
</body>
</html>
