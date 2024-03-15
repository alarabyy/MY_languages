 <?php 
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
    // phpinfo();  //git all information available
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
// echo " hello world ";
// echo "<br />";
// print " hello world2";
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////

// types in php 

// echo gettype("phpinfo");
// echo "<br />";

// echo gettype(5);
// echo "<br />";

// echo gettype(5.2);
// echo "<br />";

// echo gettype(5.7578575778578);
// echo "<br />";

// echo gettype(5414527278278275544545);
// echo "<br />";

// echo gettype(true);
// echo "<br />";

// echo gettype(false);
// echo "<br />";

/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////

// boolen types   true false

// var_dump((bool) "");
// echo "<br />";

// var_dump((bool) 5);
// echo "<br />";

// var_dump((bool) []);
// echo "<br />";

// var_dump((bool) array());
// echo "<br />";

// var_dump((bool) 0);
// echo "<br />";

// var_dump((bool) "hi");
// echo "<br />";

// var_dump((bool) "-100");
// echo "<br />";


/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////

// // the scipe  ||  nl2br()  


// // the scipe
// echo "100 'php' ";
// echo "<br />";

// echo "100 \"php\" ";
// echo "<br />";

// echo '100 "php" ';
// echo "<br />";

// echo '100 \'php\' ';
// echo "<br />";


// // nl2br() 
// echo "welcomeand
//  hello
//   my
//    wordl ";
// echo "<br />";


// echo nl2br("welcomeand
//  hello
//   my
//    wordl ");


/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////

//  Heredoc <<<" "   ||  Nowdoc <<<' '


// $name ="alaraby ";
// //  Heredoc <<<" "
// echo <<<"heredoc"
// welcome ////   \\\\ ****   +++  $name
// heredoc;

// echo "<br />";

// // Nowdoc <<<' '
// echo <<<'Nodoc'
// welcome ////   \\\\ ****   +++  $name
// Nodoc;



/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
//the array

// echo "<pre>";
// print_r ([
//     1=> "alaraby",
//     "m" => "hamo",
//     'k' => "yassser",
//     "ali",
//     "mena",
//     9=>["al","al","al","al","al","al","al"],

//     11=>"
//     <ul>
//         <li>1452</li>
//         <li>1452</li>
//         <li>1452</li>
//         <li>1452</li>
//         <li>1452</li>
//         <li>1452</li>
//         <li>1452</li>
//         <li>1452</li>
//     </ul>"
// ]);
// echo "</pre>";

/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////

//iclude
?>

<?php
//  echo $myname_f  
 ?> 

<?php 
// $myname_f = "alaraby"
 ?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php <?php
    //  echo $myname_f 
     ?>  </title>
</head>
<body> -->
   <!-- <h2> -->
    <?php 
    // echo $myname_f 
    ?>
<!-- </h2> -->
    <?php
    //  include("index.php")
     ?>
    

<!-- </body>
</html> -->
<?php 
/////////////////////////////////////////////////////////////////////////////////
//variables

// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";

// $gpa = "exlante";
// $$gpa = "exlante2";
// $$$gpa = "exlante3";


// echo $gpa;
// echo "<br>";

// echo $$gpa;
// echo "<br>";

// echo $$$gpa;
// echo "<br>";

// echo "good  {$gpa}";
// echo "<br>";
// echo "good  {$$gpa}";
// echo "<br>";
// echo "good  {$$$gpa}";
// echo "<br>";

/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
?>


<?php   
//assign_1

// $a = "hello world";

// $b = &$a ;

// $b = "hello world2";

// echo "<br>";

// echo $b;
// echo "<br>";
// echo $a;

?>
<?php 
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
////pre defeind

//  echo $_GET ["user"];

?>
<!-- <form method="get" action="" >
<input type="text" name="user" />
<input type="submit"  />

</form> -->
<?php 
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
// constants

// define("NAME" , "alaraby"  );
// define("AGE" , 10  );


// echo NAME;
// echo "<br>";
// echo AGE * 10;

?>


<?php 
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
// pre constants

// echo php_uname();
// echo "<br>";
// echo "PHP_VERSION";
// echo "<br>";
// echo "PHP_OS_FAMILY";
// echo "<br>";
// echo __FILE__;
// echo "<br>";
// echo __DIR__;
// echo "<br>";
// echo __LINE__;

?>
<?php 
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
//operator
// $c =1;
// $v =2;
// $x =10 ;
// $z =20 ;

// echo  ($x + $z);
// echo "<br>";

// echo  ($x - $z);
// echo "<br>";

// echo  ($x * $z);
// echo "<br>";

// echo  ($v ** $c);
// echo "<br>";

// echo  ($x / $z);
// echo "<br>";

// echo  ($x % $z);
// echo "<br>";

?>

<?php
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
//assignment opertor

// $x =1;
// $z =2;

// echo $x += $z;

?>

<?php
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
//comparison opertor
// ==
// !=
// <>
// ===
// !===
// <
// <=
// >
// >=
// <=>

// var_dump(100 == 100);
// echo "<br>";
// echo(100 == 100);
// echo "<br>";

// var_dump(100 != 100);
// echo "<br>";
// echo(100 != 100);
// echo "<br>";


// var_dump(100 <> 100);
// echo "<br>";
// echo(100 <> 100);
// echo "<br>";


// var_dump(100 === 100);
// echo "<br>";
// echo(100 === 100);
// echo "<br>";


// var_dump(100 !== 100);
// echo "<br>";
// echo(100 !== 100);
// echo "<br>";


// var_dump(100 < 100);
// echo "<br>";
// echo(100 < 100);
// echo "<br>";


// var_dump(100 > 100);
// echo "<br>";
// echo(100 > 100);
// echo "<br>";


// var_dump(100 >= 100);
// echo "<br>";
// echo(100 >= 100);
// echo "<br>";



// var_dump(100 <= 100);
// echo "<br>";
// echo(100 <= 100);
// echo "<br>";



// var_dump(100 <=> 100);
// echo "<br>";
// echo(100 <=> 100);
// echo "<br>";



?>
<?php
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
//increment and decrement

// $x = 0;
// $z = 0;


// // x++
// echo $x++;
// echo "<br>";
// echo $x++;
// echo "<br>";

// echo "================================";

// echo "<br>";

// // x--
// echo $x--;
// echo "<br>";
// echo $x--;
// echo "<br>";

// echo "================================";

// echo "<br>";

// // z--
// echo --$z;
// echo "<br>";
// echo --$z;
// echo "<br>";

// echo "================================";
// echo "<br>";

// // z--
// echo ++$z;
// echo "<br>";
// echo ++$z;
?>

<?php
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
//logiacl operator
/////////////////////
// and 
// &&
// ||
// or
// xor
// !
//////////////////////
// var_dump(100 > 50 and 100 > 70  and  100 > 90);
//  echo"<br>";
//  var_dump(100 > 50 && 100 > 70  &&  100 > 90);
//  echo"<br>";


//  var_dump(100 > 50 || 100 > 700  ||  100 > 90);
//  echo"<br>";
//  var_dump(100 > 50 or 100 > 700  or  100 > 90);
//  echo"<br>";


//  var_dump(100 > 50 xor 100 > 700 );
//  echo"<br>";
?>

<?php
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
//concatinate string
/////////////////////

// $x ="hello";
// $x .= " wep";
// $x .= " school";

// echo $x;
// echo "<br>";
// $x ="hello";
// $z ="hello2";
// $c ="hello3";

// echo $x.$z.$c;
?>

<?php
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
//operator array
// +
// ==
// !=
// <>
// ===
// !==
/////////////////////

// echo "<pre>";
// $arr1 =[1=> 100 ,2=> 200];
// $arr2 =[1=> 100 ,2=> 200];

// print_r($arr1+$arr2);
// echo"<br>";

// var_dump($arr1==$arr2);
// var_dump($arr1==$arr2);
// echo"<br>";

// var_dump($arr1!=$arr2);
// var_dump($arr1!=$arr2);
// echo"<br>";

// var_dump($arr1<>$arr2);
// var_dump($arr1<>$arr2);
// echo"<br>";

// var_dump($arr1===$arr2);
// var_dump($arr1!==$arr2);
// echo"<br>";
// echo "</pre>";

?>

<?php
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
// //the eror
// /////////////////////
// //var
// // $x = 0;
// $y = @$x or die("not found");
// echo $y;
// echo"<br>";


// echo"<br>";
?>


<?php
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
// //if __ else
// /////////////////////

// if(10<20){
//     echo "right";
// }else{
//     echo "not right";
// }
// echo"<br>";




?>

<?php
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
//project
////////////////////
////// echo $_POST["username"];
////// echo "<br>";
////// echo $_POST["lang"];

// if ($_SERVER["REQUEST_METHOD"] === "POST") {

//     if($_POST["lang"] == "ar") {
//         header("Location: ar.php");

//     }elseif($_POST["lang"] == "en") {
//         header("Location: en.php");
//     }elseif($_POST["lang"] == "sp") {
//         header("Location: sp.php");
//         exit();
// }}
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="username">
        <select name="lang">
            <option value="ar">araby</option>
            <option value="en">english</option>
            <option value="sp">spanesh</option>
        </select>
        <input type="submit" value="GO">
    </form>
</body>
</html> -->

<?php
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
//////project_2
// $name ="alaraby";
// $student= true;
// $orphen=true;
// $country ="egypt";
// $discount_country=50;
// $price =100;
// $student_discount=15;
// $orphen_discount=20;

// if ($country =="egypt") {
//     if ($student == true) {
//        if ($orphen=true){
//         echo"hello: $name";
//         echo "<br>";
//         echo"price:" .$price - $discount_country - $student_discount -$orphen_discount;
//        }else{
//         echo"hello: $name";
//         echo "<br>";
//         echo"price:" .$price - $discount_country - $student_discount;
//        }
//     }else{
//         echo"hello: $name";
//         echo "<br>";
//         echo"price:" .$price - $discount_country ;
//     }
// }else{
//     echo"hello: $name";
//     echo "<br>";
//     echo"price: $price";

// }

?>

<?php
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
//////turnury  operator

// $name="hamo";
// echo  $name=="hamo" ? "good" : "bad";

?>

<?php
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
//////switch

// $day ="5";

// switch ($day) {
//     case "1":
//         echo "monday";
//         break;
//     case "2":
//         echo "tuesday";
//         break;
//     case "3":
//         echo "wednesday";
//         break;
//     case "4":
//         echo "thursday";
//         break;
//     case "5":
//         echo "friday";
//         break;
//     case "6":
//         echo "saturday";
//         break;
//     case "7":
//         echo "sunday";
//         break;
//     default:
//         echo "error";
//         break;
// }


?>

<?php
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
//////while loop

// $x =0;

// while($x < 5){
//     echo $x;
//     echo "<br>";
//     $x++;
// }


?>

<?php
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
//////do while loop

// $x =0;

// do {
// echo $x;
// echo "<br>";
// $x++;
// }while($x <100)


?>


<?php
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
//////for loop

// for($x  = 0; $x <100 ;$x++){
//     echo$x;
//     echo "<br>";
// }

?>

<?php
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
//////foreach

// $name=["ali","hamo","ahmed","mazen"];

// foreach ($name as $x)
// echo "<pre>;
// echo $x;
// echo </pre>";
// echo "<br>";
?>
<?php
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
//////include and require

// include ("./test.php"); //wehen importfile
// include_once ("./test.php"); //wehen importfile  //did not import again
// require ("./test.php"); //wehen importfile in the run
// require_once ("./test.php"); //wehen importfile in the run  //did not import again

// echo $x ."<br>";

?>


<?php
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
//////function

// function myname($parameters) {
//     return "hello $parameters";
// }

// echo myname("arguments");

// echo "<br>";
//////////////////////////////////////
// function myname_2($parameters) {
//     return "hello $parameters";
// }


// echo myname("arguments");

//////////////////////////////////////
// function myname_3($parameters_1, $parameters_2) {
//     return 
//             "hello $parameters_1 &&
//                hello $parameters_2";
// }


// echo myname_3("arguments_1","arguments_2");

//////////////////////////////////////
//  function deep_flezer($parameters) {
     
//     if ($parameters === "water") {
//      echo "cold water"; 
//     } else if ($parameters === "coca cola") {
//         echo "cold coca cola ";
//     }else{
//         echo "close deep _flezer";
//     }
//  }
//  deep_flezer("water");
// echo "<br>";
//  deep_flezer("coca cola");
//  echo "<br>";
//  deep_flezer("hi");

//////////////////////////////////////
// function data($name="ali" , $age=22 , $address="cairo"){
//     $one = " my name = $name and age = $age and address = $address";
//     return $one;
// } 

// echo data("hamo", 20 ,"alex");
//  echo "<br>";
// echo data("hamo" );
// echo "<br>";
// echo data(); 
// echo "<br>";
// echo data(address:"alex");

// //////////////////////////////////////

// // func_get_arg(0);
// // func_get_args();
// // func_num_args();

// function data(...$nums){
//     echo func_get_arg(5);
//     echo "<br>";
    
//     echo func_num_args();
//     echo "<br>";

//     print_r(func_get_args());
//     $x= 0;
//     foreach($nums as $k ){
//          $x += $k;
// } 
// echo $x;
// }
//  data(10, 20.30,32,325,5656,565 ,1452);
//  echo "<br>";


// //////////////////////////////////////

// $x=["html", "css", "js", "php"];
// function data($name ,...$nums){
  
//     echo "my name: " . $name;
//  echo "<br>";
//     foreach ($nums as $v) {
//         echo  "--$v<br>";
//     }

// }
//  data("alaraby ", ...$x);
//  echo "<br>";


//////////////////////////////////////
//// strlen()
//// function_exists("")


// function data($name){
//     echo "my name: " . $name;
// }
//  $func1="data";
//  echo $func1("hamo");
//  echo "<br>";

//  function data2($name2){
//     echo "my name: " . $name2;
// }
//  $func2="data2";
//  echo $func2("hamo2");
//  echo "<br>";



// if(function_exists("dat")){
//     data2("hamo");
//  } else{
//    echo "not found";
// }

// echo "<br>";

// echo strlen("hamo");
?>


<?php
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
//////anonymos functions.

// $name = function($anonymos){
//    return $anonymos;
// };

// echo $name("ali");
// echo "<br>";

// $nums =[10,20,30,40,50];

// $adding_five= array_map(function($item){ return $item +5;},$nums);
// $adding_ten= array_map(function($item){ return $item +10;},$nums);

// echo "<pre>";
// print_r($adding_ten);
// echo "</pre>";


// echo "<br>";

// echo "<pre>";
// print_r($adding_five);
// echo "</pre>";


?>

<?php
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
//////arrow functions.


// $myname= fn($name) => "hello \t world \t $name";

// echo $myname("ali");

// echo "<br>";


?>

<?php
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
////// string declare


// $myname= "hello  araby";
// echo $myname[0];
// echo "<br>";
// echo $myname[1];
// echo "<br>";
// echo $myname[2];
// echo "<br>";
// echo strlen($myname);
// echo "<br>";
// echo $myname[1]="k";
// echo "<br>";
// echo $myname;

?>

<?php
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
////// built in functions

// $names=["hamo","cat","cheese"," Dates"," calendars"];
// $name2="al araby";
// echo implode("<br>",$names);
// echo "<br>";
// echo implode(" || ",$names);
// echo "<br>";
// echo implode("@",$names);
// echo "<br>";



// ECHO "<pre>";
// print_r(explode(" ",$name2));
// ECHO "</pre>";




// ECHO "<pre>";
// print_r(str_shuffle($name2));
// ECHO "</pre>";




// ECHO "<pre>";
// print_r(strrev($name2));
// ECHO "</pre>";




// ECHO "<pre>";
// print_r(trim($name2, "a"));
// ECHO "</pre>";

// $name3="alaraby";

// ECHO "<pre>";
// print_r(chunk_split($name3,3, "@"));
// ECHO "</pre>";


// ECHO "<pre>";
// print_r(str_split("alaraby",3));
// ECHO "</pre>";


// print_r(strip_tags("<h1>alaraby</h1>"));

// echo "<br>";

// print_r(("<h1>alaraby</h1>"));
?>

<?php
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
//////arrays

// $names =["name","name2","name2","alaraby","alarby" ];



// echo "<pre>";     
// print_r(array_chunk($names,2));                                                                                    
// echo "</pre>";




// $name2 = ["a"=>"alaraby","x"=>"alaraby","b"=>"hamo","c"=>"ali","d"=>"hamed"];
// echo "<pre>";     
// print_r(array_chunk($name2,1, true));                                                                                    
// echo "</pre>";

// echo "<pre>";     
// print_r(array_chunk($name2,1));                                                                                    
// echo "</pre>";





// echo "<pre>";     
// print_r(array_change_key_case($name2));                                                                                    
// echo "</pre>";





// $key=["x","y","z"];
// $value=["alaraby","hamo","hamed"];
// echo "<pre>";     
// print_r(array_combine($key,$value));                                                                                    
// echo "</pre>";






// echo "<pre>";     
// print_r(array_count_values($name2));                                                                                    
// echo "</pre>";




// $name4 = ["a"=>"alaraby","x"=>"alaraby","b"=>"hamo","c"=>"ali","d"=>"hamed"];

// echo "<pre>";     
// print_r(array_reverse($name2));                                                                                    
// echo "</pre>";
  





// echo "<pre>";     
// print_r(array_flip($name2));                                                                                    
// echo "</pre>";






// echo "<pre>";     
// print_r(array_keys($name2 ));                                                                                    
// echo "</pre>";





// echo "<pre>";     
// print_r(array_values($name2 ));                                                                                    
// echo "</pre>";




// echo "<pre>";     
// print_r(array_product($name2 ));                                                                                    
// echo "</pre>";



// echo "<pre>";     
// print_r(array_pad($name2,2,"|" ));                                                                                    
?>

<?php
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
//////built-in functions

// current()
// next()
// prev()
// reset()
// end()

$myname = ["alaraby","hamo","malek","ali"];

echo "<br>";
echo current($myname);
echo "<br>";
echo next($myname);
echo "<br>";
echo prev($myname);
echo "<br>";
echo reset($myname);
echo "<br>";
echo end($myname);

?>

