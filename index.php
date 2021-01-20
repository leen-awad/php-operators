<?php
// 1. Write a PHP script to see if the specified year is a leap year or not

function year_check($my_year)
{
   if ($my_year % 400 == 0)
      print("It is a leap year");
   if ($my_year % 4 == 0)
      print("It is a leap year");
   else if ($my_year % 100 == 0)
      print("It is not a leap year");
   else
      print("It is not a leap year");
}
$my_year = 2024;
year_check($my_year);


// 2. Write a PHP script to check the season depending on set temperature if the
// temperature is below 20 we are in winter otherwise the season is summer
$X=40;
if($x>=20){
    echo('summer');
}
else{
    echo('winter');  
}


// 3. Write a PHP script to calculate the sum of the two mapped integers. If the two
// values are the same, then three times their sum is returned
function test1($x, $y) 
{
    return $x == $y ? ($x + $y)*3 : $x + $y;
}
echo test1(1, 2)."\n";
echo test1(3, 2)."\n";
echo test1(2, 2)."\n";



// 4. Write a PHP script to get the absolute difference between n and 100. If n is
// greater than 100, return triple the absolute difference.


// 5. Write PHP script to check two integers, and return true if one is 30 or if their sum
// is 30.

$x=30;
$y=5;
if($x=30||$Y=30||$x+$Y=30){
    echo('true');
}


// 6. Write a PHP script to check an integer and return an integer if it is within 10 of
// 100 or 200.
function test($x) 
{
   if(abs($x - 100) <= 10 || abs($x - 200) <= 10)
            return true;
     return false;
}

var_dump(test(103));
var_dump(test(90));
var_dump(test(89));  



// 7. Write in PHP script to check if the given positive number is a multiple of 3 or a
// multiple of 7
function test2($n) 
{
   return $n % 3 == 0 || $n % 7 == 0;
}

var_dump(test2(3));
var_dump(test2(14));
var_dump(test2(12));
var_dump(test2(37));


// 8. Write a PHP script to create a new string where "if" is added to the front of a
// particular string. If the series really begins with "if," then return the string
// unchanged.



// 9. Write a PHP script to remove the character in a specific position from a specific
// string. The position selected in range 0..1 string length inclusive


// 10. Write PHP script to check two integers if either is in the range 100..200 inclusive.
$D=25;
if($D>100 && $D<200){
    echo('true');
}

// 11. Write a PHP script to check if two valid values are in the range of 20.50
// inclusive. Returns true if 1 or another in the listed range is false.
$p=20;
if($p>20 && $p<25){
    echo('true');
}
else{
    echo('false');  
}

// 12. Write PHP script to check for the largest number among three integers
$x=1000;
$Y=120;
$z=20;
if($x>$Y && $x>$z){
    echo($x);
}
elseif($Y>$x && $Y>$z){
    echo($Y);
}
else{
    echo($z);
}

// 13. Write in PHP script to check the number closest to 100 between two integers.
// Return 0 if the two numbers are equal
$x=12;
$Y=96;

if($x>95 && $x<100){
    echo($x);
}
elseif($Y>90 && $Y<100){
    echo($Y);
}
elseif($x==$Y){
    echo("0");

}

// 14. Write a PHP script that accepts two integers and returns an integer if one of them
// is 5, their sum, or difference between them is 5.
$x=2;
$Y=3;
$z=5;

if($x==$z){
    echo($x);
}
elseif($x+$y=$z){
    echo($x.$y);
}
elseif($x-$y=$z){
    echo($x.$y);
}
?>

