<!DOCTYPE html>
<?php
include_once './connection.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>UploadImage</title>
    </head>
    <body>
        <h2>
            <?php
            callconnec();
            ?>
        </h2>
        <form method="post" action="" autocomplete="off" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Enter Name" required="">
            <br><br><br><br><br>
            <input type="file" name="image" accept=".jpg,.jpeg,.png" required=""><br><br>
            <button type="submit" name="submit" >UploadImage</button>
        </form>
        <a href="data.php">Show info Image</a>

    </body>
</html>
