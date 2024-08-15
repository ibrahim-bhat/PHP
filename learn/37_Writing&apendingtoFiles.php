<?php

echo "<h1>Writing and Apending to file</h1><br>";

//Previously, we used fopen() to open a file; now, we will use fopen() to write into it. We need to change the argument from reading mode to  writing mode. So, we will use a file pointer to open a file in write mode. [Note: If we use fopen() a file that does not exist, it will create it, given that the file is opened for  writing (w)]

// $fptr = fopen("myfile2.txt", "w"); // it creates the file if it is not created
// fwrite($fptr , "this is the best file on this planet\n");
// fwrite($fptr, "this is the 2nd line of this file\n");
// fwrite($fptr, "this is the 3rd line \n");
// fclose($fptr);

//append mode adds content from the end of the file, which means the previous content won't be touch when opening in appending form.
$apend = fopen("myfile2.txt", "a"); 
fwrite($apend , "hello this line is apended\n"); // if we will refesh page many time it will print it multiple times in file
fclose($apend);
?>