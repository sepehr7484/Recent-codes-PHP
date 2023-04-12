<?php
dataString();

function dataString()
{
    $typecar = array('BMW', 'BENZ', 'FORD', 'TOYTA', 'FERARY');

    $str = 'sajjad';
    $str2 = 'sajjad ahmadi';
    echo strlen($str);//for lenght String
    echo count($typecar) . '<br>';//for length array
    echo str_word_count($str) . '<br>';
    echo strrev($str) . '<br>';
    echo strpos($str2, $str) . '<br>';
    echo str_replace($str, 'reza', $str2) . '<br>';
    echo str_word_count($str2) . '<br>';//tedad kalamat dar yek reshteh

    echo str_rot13($str) . '<br>';//in tabe har harfi ra ba 13 harf badi jagozin mikonad
    echo str_shuffle($str) . '<br>';// yek reshteh ra besort random namayesh midahad-->jjasad
    print_r(str_split($str2, 3));// yek reshteh ra tabdil be yek array mikonad bar asas meghdar tooli ke mi midim
    echo '<br>';
    echo strcasecmp($str2, $str) . '<br>';//meghdar tafavoot ro mighe-->7
    echo strchr($str2, $str) . '<br>';//jostejo reshteh dar reshteh digari
    echo strcmp($str2, $str) . '<br>';// reshteh moshtarak ro peyda va as reshteh kam mikonad va meghdar namayesh midahad-->7
    echo strcoll($str2, $str) . '<br>';// moghyeseh bin reshteh anjam midahad-->1
    echo trim($str2, 'saj');//meghdar dadeh aval va akhar ra ke midim ro hazf mikonad-->d ahmadi


}

function datanumber_math()
{
    $n1 = 13245;
    $n2 = 123.45;
    $n3 = -321;
    echo $n1 . '<br>';
    var_dump(is_integer($n1));//baresi mikonad noe dadeh ra va beh true ya false barmigardanad-->true
    var_dump(is_int($n2));
    echo '<br>';

    echo acos($n2);//NaN برای عملیات غیرممکن ریاضی استفاده می شود.
    $converttoint = (int)$n2;
    echo 'ToInt' . $converttoint . '<br>';
    var_dump(is_numeric($n1));
    var_dump(is_numeric($n2));
    echo '<hr>' . '<br>';
    //------------------توابع پایین متد های ریاضی هستن------------
    echo pi() . '<br>';
    echo 'Max Number: ' . max($n1, $n2) . '<br>';
    echo 'Min Number: ' . min($n1, $n2) . '<br>';
    echo 'GHadrMotlagh Number: ' . $n3 . '-------->' . abs($n3) . '<br>';
    echo 'Jazr Number: ' . sqrt($n1) . '<br>';
    echo 'ROund ya Gerd Number: ' . round($n2) . '<br>';
    echo 'RANDOM Number: ' . rand($n1, $n3) . '<br>';


}

function constant1()
{
    //in baray maghadir sabet mi bashad.....

    //define(name,value,case_insensititv:hasas be hrof kochak va bozorg(true,false))


    define('names', 'sajjad');
    echo names . '<br>';

    define('car', 'bmw', false);
    echo car . '<br>';
    define('carname', ['BMW', 'BENZ', 'FORD']);
    echo count(carname) . '<br>';


    for ($i = 0; $i < count(carname); $i++) {
        echo strrev(carname[$i]) . '<br>';
        echo carname[$i] . '<br>';
    }


}

function sharti_if_else()
{
    $name = '';
    $age = 35;
    if ($name !== null and $name !== '') {
        echo 'NOtTOHI';
    } else {
        echo 'TOHI';
    }

    if ($age >= 20 && $age <= 35) {
        var_dump($age);
        echo '<br>' . 'JAVAN';
    } elseif ($age >= 10 && $age <= 19) {
        echo '<br>' . 'Nojavan';
    } elseif ($age >= 1 && $age <= 9)
        echo '<br>' . 'KIDS';
}

function swithc_statmant()
{
    /* Syntex SWITCH
     *$n;
     * switch(n){
     * case value1:
     * action;
     * break;
     * case value2:
     * action;
     * break;
     * defaulte:
     * action;
     *
     * }
     *
     */

    $actor = 6;
    switch ($actor) {
        case 0:
            echo 'OFF';
            break;
        case 1:
            echo 'ON';
            break;
        default:
            echo 'DISABEL';
            break;
    }


}

function loops()
{
    $languge = array('C#', 'C++', 'JAVA', 'DART', 'Python', 'PHP', 'C', 'Ruby', 'GO');
    $info = array("sajjad" => 'Ahmadi', "arsalan" => 'Majlesi', 'reza' => 'mohmadi');
    /*four type Loops
     * for(){}
     * while(){}
     * do{}while()
     * foreach($array as $value){}
     * */


//1:while LOOP--------------

    $s1 = 1;
    while ($s1 <= 20) {

        if ($s1 % 2 == 0) {
            if ($s1 === 14) {
                break;
            }
            echo $s1 . '<br>';
        }
        $s1++;
    }
    //2:doWhile Loop--------
    $x = 0;
    do {
        if ($x == 3) {
            break;
        }
        echo 'hi sajjad' . "$x" . '<br>';
        $x++;

    } while ($x <= 5);
//3:FOR Loops..............
    for ($i = 0; $i < 8; $i++) {
        echo '<br>' . $i;
    }
//4:foreach Loops .........
    foreach ($languge as $vals) {
        echo '<pre>' . $vals . '</pre>';
    }
    foreach ($info as $callinfo => $infoval) {
        echo "$callinfo => $infoval <br>";
    }

}

function tables()
{

    $names = array('name', 'family', 'age', 'tell');


    echo '<tabel border="1px" >';
    echo '<tr >';
    foreach ($names as $value) {

        echo '<th>' . $value . '</th>' . '          ';

    }
    echo '</tr>';

    echo '</tabel>';


}

function syntex_function($w, $l, $h = null)
{
    if ($h === null) {
        echo $w * $l;
    } else if ($h != null) {
        echo $w * $l * $h;
    }
    echo '<br>';
}

function syntex_Array()
{
    $array1 = array('sajjad', 'reza', 'arsalan', 'zahra', 'sahar');
    for ($i = 0; $i < count($array1); $i++) {
        echo $array1[$i] . '<br>';
    }
    //-------- array anjomani------------------
    $framwork = array('Php' => 'Laravel', 'C#' => 'Asp.Net', 'Dart' => 'Flutter', 'JavaScript' => 'Vue.js');
    foreach ($framwork as $namelang => $nameframework) {
        echo "$namelang: $nameframework <br> ";
    }
//------------multiarray-----------------------
    echo '<hr>';
    $languges = array(
        array('Java', 'SpringBoot', 19975),
        array('Php', 'Laravel', 1998),
        array('Python', 'Django', 1980),
        array('C#', 'Xamarin', 1990),
        array('JavaScript', 'React', 2001)

    );
    for ($x = 0; $x < count($languges); $x++) {
        echo 'Info Languge:' . $x;
        echo "<ul style='color: aqua'>";
        for ($y = 0; $y < 3; $y++) {
            echo '<li>' . $languges[$x][$y] . '</li>';
        }
        echo "</ul>";


    }
//--------------Sorting Array-----------------
    echo '<hr style=" width: 350px;background: blue;">';
    print_r(sort($array1));


}

function meth_array()
{
    $array1 = array('sajjad', 'reza', 'arsalan', 'zahra', 'sahar');
    $array2 = array('ahmadi', 'mohmmadi', 'majlesi', 'ghorbani', 'ahmadi');
    $color = array('RED', 'GREEN', 'BLUE', 'YELLOW', 'PINK', 'ORANGE', 'BROWN', 'PURPLe', 'BLOCK');


    echo count($array1) . '=> MEGHDAR TOOL ARRAY <br>';//meghdar value array
    print_r(array_reverse($array1));//baraks kardan array
    echo '<br>';
    echo 'Edgham array=>';
    print_r(array_combine($array1, $array2));//Edgham array barasas index to index
    array_push($color, 'GREENYellow');//add newvlaue to array
    echo '<br>';
    print_r($color);
}

function super_Global()
{
    //یه سری متغیر هایی وجود دارن به عنوان متغیر های محلی پیش تعریف شده
    /*
    $GLOBALS
    $_SERVER
    $_REQUEST
    $_POST
    $_GET
    $_FILES
    $_ENV
    $_COOKIE
    $_SESSION
 */
//..................SERVER....................
    echo $_SERVER['SERVER_NAME'] . '<br>';
    echo $_SERVER['PHP_SELF'] . '<br>';//masir file code neveshteh shodeh
    echo $_SERVER['HTTP_HOST'] . '<br>';//port local host server
    echo $_SERVER['HTTP_REFERER'] . '<br>';
    echo $_SERVER['HTTP_USER_AGENT'] . '<br>';
    echo $_SERVER['SERVER_SOFTWARE'] . '<br>';
    echo $_SERVER['SERVER_PROTOCOL'] . '<br>';
//.............REQUEST..........................
    echo $_SERVER['REQUEST_METHOD'] . '<br>';
    echo $_SERVER['REQUEST_TIME'] . '<br>';


}

function regex()
{

}

function from_get_post()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $fname = $_POST['fname'];
        $codeid = $_POST['codeid'];
        echo $fname;
        echo $codeid;
    } else {
        echo 'WARRNING METHOD';
    }
}//from_get_post

function date_time()
{
    echo date('d') . '<br>';
    echo date('m') . '<br>';

    echo date('y') . '<br>';

    echo date('l') . '<br>';
    echo date('y/m/d') . '<br>';// time day years monthay
    echo date('H:i:sa') . '<br>';//time oclock
    $d = mktime(11, 14, 54, 8, 12, 2014);//create manuall dateTime
    echo "Created date is " . date("Y-m-d h:i:sa", $d) . '<br>';
    $d = strtotime("10:30pm April 15 2014");
    echo "Created date is " . date("Y-m-d h:i:sa", $d);


}

function read_fileing()
{
    //   echo  readfile('file.txt'); read file
    /*fopen()
     * یک روش بهتر برای باز کردن فایل ها با تابع ()fopen است.
     *  این تابع گزینه های بیشتری نسبت به تابع readfile() در اختیار شما قرار می دهد.
     * */
    $myfile = fopen('file1.txt', 'r') or die('Unable to open file');
    echo fread($myfile, filesize('file1.txt'));
    fclose($myfile);
    echo '<hr>';
    echo filesize('file.txt');
    var_dump($myfile);
    echo filesize('file1.txt');// barasas byte size ro migeh
    echo '<hr>';
    //........دستور پایین میاد پایان هر خط رو بررسی و براساس حلقه نمایش میدهد..........
        $myfile2=fopen('file1.txt','r') or die("ERROR WARNING FILE !!");
        while (!feof($myfile2)){
            echo  fgets($myfile2).'<br>';
//            echo  fgetc($myfile2).'<br>';
        }


        fclose($myfile2);
        //**************end discription**********************
    echo '<hr>';
    $myfile3=fopen('file1.txt','r') or die("ERROR WARNING FILE !!");
    while (!feof($myfile3)){

        echo  fgetc($myfile3).'<br>';
    }
        fclose($myfile3);





}
function write_file(){

//..........create file AND write file................
$cfile=fopen('f1.txt','w') or die('WARRNING FILE!!');
$gettxt='in the name of GOD.';
fwrite($cfile,$gettxt);
$gettxt2='my name is sajjad.';


fclose($cfile);
//__________________________________________________
    //....write arraye in to file...................
    $numbers = [1, 2, 3, 4, 5];
    $filename = 'f1.txt';

    $f = fopen($filename, 'wb');
    if (!$f) {
        die('Error creating the file ' . $filename);
    }

    foreach ($numbers as $number) {
        fputs($f, $number);
    }
    fclose($f);
}
function uploading_file(){
//*****this function connect to index_upload_file.php*****

    //........ tozihat dar mord file va data ersal shode ra mogoyad....

//var_dump($_FILES['uptofile']['tmp_name']);

//  echo  '</h1>';
//    echo '<pre>';
//    var_dump($_FILES);
//    echo '</pre>';

    //_________________________________________________________
    $basepath=__DIR__;
    $dir= $basepath.'/img/ ';
        if (isset($_POST['Submit'])){
            $titlefile=$_FILES['uptofile']['name'];
            $sizefile=$_FILES['uptofile']['size'];
            $upload_success=true;

            if ($upload_success){
                $checkfile=move_uploaded_file($_FILES['uptofile']['tmp_name'],$dir,$titlefile);
                if($checkfile){
//        echo 'Success Upload File';
                    echo '<h1>'.'Success Upload File'.'</h1>';

                } else {
                    echo '<h1 >'.'Not Success Upload File'.'</h1>';
                }
            }



        }




//    var_dump($basepath.'/img/');
//$f=move_uploaded_file($_FILES['imgfile']['tmp_name'],$basepath.'/img/',$_FILES['imgfile']['name']);




}
function upload_file2(){
    echo '<pre>';
    echo '<h3>';
    var_dump($_FILES);
    echo '</h3>';
    echo '</pre>';
        if (!empty($_FILES)){

            move_uploaded_file($_FILES['file']['tmp_name'],__DIR__.'/img/'.$_FILES['file']['name']);
            echo 'Upload Success.';





        }
}
function uploadstep3(){
//    var_dump($_FILES);
$dirc=__DIR__.'/img/'.$_FILES['file']['name'];
    $fname=$_FILES['file']['name'];
    $fsize=$_FILES['file']['size'];
    $fupload_ok=true;
    $type= strtolower(pathinfo($fname,PATHINFO_EXTENSION));
//echo $dirc;
//echo $type;
    if (isset($_POST['submit'])){




        if($fupload_ok) {
            $checkupload =move_uploaded_file($_FILES['file']['tmp_name'],__DIR__.'/img/'.$_FILES['file']['name']);
            if ($checkupload) {
//        echo 'Success Upload File';
                echo '<h1>' . 'Success Upload File' . '</h1>';

            } else {
                echo '<h1 >' . 'Not Success Upload File' . '</h1>';
            }
        }}


}
function upload4(){
//    $username=$_POST['username'];
//    echo $username;
}
?>
