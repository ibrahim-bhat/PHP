<?php
    echo "Functions <br>";

    //A function in PHP is a block of code that can be called to perform a task and return a value. Functions can be built-in or user-defined:

    //built-in functions are pre-defined functions that are part of the core language and can be used without any special requirements or installation. They are provided by PHP to perform common tasks, such as manipulating strings. Some core built-in functions, such as string and variable functions, are included in every version of PHP . For example, you can use functions like var_dump, fopen(), print_r(), and gettype(). 


    /* User-defined functions are created by programmers to meet specific requirements. There are four types of user-defined functions, which are divided based on the arguments they accept and the value they return:
        Function with no arguments and a return value
        Function with no arguments and no return value
        Function with arguments and with return value 
        Function with arguments and no return value
    */

//function example
function sumNumbers(int $a, int $b) {  //this is only defined not calling
  return $a + $b;
}
echo sumNumbers(5, 20);

//another function example
function add_some_extra($string)
{
    $string .= '<br>Add something.';
}

$str = 'I have added this';
add_some_extra($str);

echo $str;

//another example

function processMarks($marksArr)
{
    $sum = 0;
    foreach ($marksArr as $value) {
        $sum += $value;
    }
    return $sum;
}

function avgMarks($marksArr)
{
    $sum = 0;
    $i = 1;
    foreach ($marksArr as $value) {
        $sum += $value;
        $i++;
    }
    return $sum / $i;
}

$rohanDas = [34, 98, 45, 12, 98, 93];
// $sumMarks = processMarks($rohanDas);
$sumMarks = avgMarks($rohanDas);

$harry = [99, 98, 93, 94, 17, 100];
// $sumMarksHarry = processMarks($harry);
$sumMarksHarry = avgMarks($harry);
echo "Total marks scored by Rohan out of 600 is $sumMarks <br>";
echo "Total marks scored by Harry out of 600 is $sumMarksHarry";
?>