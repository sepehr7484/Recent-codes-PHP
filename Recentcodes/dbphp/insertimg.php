<!DOCTYPE html>
<?php
$connect= mysqli_connect('localhost','root','','img');
//if(!$connect){
//    echo 'hi FAlse';
//    exit();
//} else {
//    echo 'Hi True';
//    
//}
if(isset($_POST['upload'])){
    $file=$_FILES['uploadimg']['name'];
    $err=array();
    $query="INSERT INTO info(image) VALUES ('$file') ";
    $res= mysqli_query($connect, $query);
    if($res){
        move_uploaded_file($_FILES['uploadimg']['tmp_name'], $file);
    }
    
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="style.css" type="text/css" rel="stylesheet" >
        <title></title>
    </head>
    <body>
        <form method="post" action="" enctype="multipart/form-data" >
            
            <input type="file" name="uploadimg" id="img"><br><br><br>
            <input type="submit" name="upload" value="UploadImage">
            
          
        </form>
        <img width="250px" height="250px">
          <h3>Display Image</h3>
          <?php 
          $sel="SELECT * FROM info";
          $que= mysqli_query($connect, $sel);
          $out="";
          if(mysqli_num_rows($que)<1){
              $out.="<h3>NO IMage</h3>";
              
          }
          while ($row= mysqli_fetch_array($que)){
              $out .="<img src='".$row['image']."' width='250px' height='250px'>";
              
          }
          
          ?>
    </body>
</html>
