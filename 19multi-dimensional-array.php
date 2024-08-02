<?php
echo "Multi Dimensional Array<br>";

//A multidimensional array in PHP is a data structure that allows you to store multiple values in a single variable, including one or more arrays within themselves.


// Creating a 2 dimensional array
$multiDim = array(
    array(2, 5, 7, 8),
    array(1, 2, 3, 1),
    array(4, 5, 0, 1)
);

// echo  print_r($multiDim);  // used to  print the value stored in a variable
// echo "<br>";    
echo var_dump($multiDim);
echo "<br>";
// echo $multiDim[0][2];

// Printing the contents of a 2 dimensional array

for ($i=0; $i < count($multiDim); $i++) { 
    echo var_dump($multiDim[$i]);
    echo "<br>";
}

for ($i = 0; $i < count($multiDim); $i++) {
    for ($j = 0; $j < count($multiDim[$i]); $j++) {
        echo $multiDim[$i][$j];
        echo " ";
    }
    echo "<br>";
}



//Another example

$cars = array(
    array("Volvo" , 22 ,34),
    array("BMW" , 15 , 67),
    array("Land rover" , 17 , 15)
);

// echo $cars[0][0] , [0][1];

for ($i=0; $i< count($cars); $i++){ 
    for ($j=0; $j < count($cars[$i]); $j++){
        echo $cars[$i][$j]; 
        echo " ";
        }
}
//i0 j0 j1 j2   i1 j0 j1 j2  i2 j0 j1 j2  first it will go to index 0 that is array 1 and in i its volvo and ignore i++ and moves to j and there its is 0 and prints i&j that is volvo and do j++ and goes to index i0 j1 that is 22 and print 22 and again j++ and goes to i0 j2 that is 34 and when again count it goes greater thatn cars[i] that is 3 of length present in array 1st and than come out of j loop and goes again to i loop and here it do increament of i++ and now i become 1 and its array 2 means bmw and ignore i++ and moves to j where now i1 and j0 and print bmw and do j++ and i1 j1 it is 15     and do same process again and again until i gets gearter than count of cars that is 4 and by this type it prints all the value inside the 2d array ..



//Example of 3D array
echo "<br><br><h3>3D Arrays</h3> <br>";
$veh = array(
    array(
        array("Volvo", 22, 34),
        array("BMW", 15, 67),
        array("Land Rover", 17, 15)
    ),
    array(
        array("Volvo", 22, 34),
        array("BMW", 15, 67),
        array("Land Rover", 17, 15)
    ),
    array(
        array("Volvo", 22, 34),
        array("BMW", 15, 67),
        array("Land Rover", 17, 15)
    )
);
// print_r($cars);
for ($i = 0; $i < count($veh); $i++) {
    for ($j = 0; $j < count($veh[$i]); $j++){
        for ($k=0; $k<count($veh[$i][$j]); $k++){
            echo $veh[$i][$j][$k];
            echo " ";
        }
    }
    echo "<br>";
}
?>