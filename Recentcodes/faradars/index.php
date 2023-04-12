<?php

$names='Sajjad';
$numbers=123;
$floating=123.54;
$doubels=0.24;
$bools=true;
echo "$names,$bools,$floating    ,$numbers".'<br>';
echo  gettype($bools).'<br>';
echo  is_int($numbers);
echo  is_bool($bools);
echo  is_int($names).'<br>';
echo $numbers**2;


echo '<br>';
$getname=$_POST['name'];
if ($getname==null){
    echo 'Null';
}
else{
    echo $getname;
}
?>

