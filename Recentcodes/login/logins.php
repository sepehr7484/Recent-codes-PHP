<?php
include "dbconnect.php";

if(isset($_POST['username'])&&isset($_POST['password'])){

    function validate($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;     
    }
    $username=validate($_POST['username']);

$password=validate($_POST['password']);

        if(empty($username)){
            header("Location: index.php?error=UserName");
            exit();
        }else if(empty($password)){
            header("Location: index.php?error=Password");
            exit();
        }else{
                // echo 'Valid Input';
                $sql="SELECT * FROM login WHERE username='$username' AND password='$password'";
                $result=mysqli_query($connect,$sql);
                    if(mysqli_num_rows($result)===1){
                        echo "Hello";
                    //     $row=mysql_fetch_assoc($result);
                    }
        }

}else{
    header("Location: index.php?error");
    exit();
}

?>
 