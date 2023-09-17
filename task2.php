<?php
// assign by value

$x=7;
$y =$x;
$x=9;
echo $y ;
echo '<br>';
//assign by reference

$x =22;
$y =&$x;
$x=33;

//comments types
//
/*   */
#   used in documents
/**   dockblock comment    */   

//constants
define('name','amr');        //mostly used any where and works in run time
const host='localhost';      //mostly used with oop and works in compiling time
echo host.'<br>';

num();  //it is global
function num(){
     global  $x;
     echo 'my num is '.$x;      echo '<br>';
     echo 'my name is '.name; 

}
//num();
echo '<br>';

//some magic const.
echo __LINE__.')';
echo __DIR__;
echo __FILE__;
echo '<br>';

//variable variable
$i='ali';
$$i ='osama';
$$$i='ahmed';
echo $ali;echo '<br>';  //osama
echo $osama;echo '<br>';  //ahmed
echo "hi {$$$i}";echo '<br>';  //ahmed

//soft debuggers
    var_dump($i) ;                              //return the type and value
    echo '<br>';  print_r($$i);               //return only the value
    echo '<br>';  echo gettype($$$i);      // return type only
    echo '<br>'; 

//data types
$float=3.44;
$bool = true;
$null=null;

var_dump($ali,$y,$float,$bool,$null);

//truthy , falsy
$text = '';  $num=0 ; $arr=array();  $null=null; $f=false;

if($text || $num || $arr ||$null || $f){    //if any of these has a value
    echo '<br>these are truthy values';

}else{
  echo  '<br>these are falsy  values';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 2</title>
    <h1><?= 'hi my name is '.name?>  </h1>
    <h1><?= ' my age is '.$y?>  </h1>
    <h1><?php //echo 'hii my name is '.$$i .' '. $$$i?>  </h1>