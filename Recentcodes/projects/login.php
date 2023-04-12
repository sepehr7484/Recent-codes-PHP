<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="stylw.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="frmlogin" >
        <form method="post" action="db/logindb.php">
            <input type="email" class="inputlogin" placeholder="Enter Email...." name="email"><br>
            <input type="password" class="inputlogin" placeholder="Enter Password...." name="password"><br>
            
            <a id="li_nk" href="page_regeister.php" target="_parent">Create Account?</a><br><br>
            
            
            <input type="submit" id="btnlogin" value="Login"><br>
            
        </form>
    </div>

</body>

</html>