<html>
    <head>
        
       
            <link href="css1.css" rel="stylesheet">
        <body>
            <h1 id=""></h1>
        <?php
        $arz=12;
        $tool=15;
        $result=$arz*$tool;
        echo "<h1 >"."Result:". $result."/h1";
        if($result >=150){
            echo "<br>"."Ziyad";
        }else{
            echo "<br>"."Kam";
        }

         ?>
        </body>
    </head>
</html>