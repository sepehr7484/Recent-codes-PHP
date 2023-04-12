<?php
$str1=array('name','family','age','tell');
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="indexcss.css" >
</head>
<body>
<table id="table1">
    <tr>
        <?php foreach ($str1 as $vals)?>
        <td><?php echo $vals ?></td>
        <php endif;?>
    </tr>
</table>

</body>
</html>
