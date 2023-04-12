<!DOCTYPE html>
<?php
  $con= mysqli_connect ('localhost','root','','img');
if(isset($_POST['upload'])){
    $file=$_FILES['image']['name'];
    $query="INSERT INTO info(image) values ('$file') ";
    $res= mysqli_query($con, $query);
    
    if ($res) {
        move_uploaded_file($_FILES['image']['tmp_name'],"$file");
        
    }
    
}


?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
     <?php
      
        if(!$con){
            echo 'Do NotSuccess.';
        } else {
            echo ' Success.';
        }
        
        
        
        ?>
        <h2>Upload Image</h2>
        <form enctype="multipart/form-data" action="" method="post">
            
             <input type="file" name="image" required=""><br>
             <input type="submit" name="upload" value="OnClick" >
        </form>
        
        
        <h3> Display Image</h3>
        <?php
        $sel="SELECT * FROM info";
        $query_sel= mysqli_query($con, $sel);
        $output="";
        if (mysqli_num_rows($query_sel)<1) {
            echo "<h3>not Upload Image</h3>";
        }else{
               echo "<h3>The photo is available.</h3>";
        }
        while($row= mysqli_fetch_array($query_sel)){
            $output .="<img src='".$row['image']."' style='width:150px;height:150px;' alt='dsadsad'>";
            echo $output;
            
        }
        ?>
  
    </body>
</html>
