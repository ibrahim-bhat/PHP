<?php

    /* 
    
    fgetc(): Returns a single character from an open file. The function reads the character at the current position of the file pointer, and then moves the pointer to the next character. The syntax for fgetc() is fgetc($file). fgetc() is not recommended for large files because it's slow and can take a long time to read the entire file. If you need to read a large file one character at a time, you can use fgets() to read lines of data, and then use fgetc() to process each line one character at a time.
    
   fgetc(): Reads a line from a file pointer. 

    */

    echo "<h1> fgetc() , fgetc() </h1> <br>";


    $fprt = fopen("file" , "r");
    // echo fgets($fprt);
    // echo fgets($fprt);
    // echo fgets($fprt);

    while($a = fgets($fprt)){
        echo $a;
        echo "<br>";
    }
        echo "<br>";





    $fgetc = fopen("file" , "r");

    echo fgetc( $fgetc);
    // echo fgetc( $fgetc);
    // echo fgetc( $fgetc);
    // echo fgetc( $fgetc);
    // echo fgetc( $fgetc);
    // echo fgetc($fgetc);

    while($b= fgetc($fgetc)){
        echo $b;
        // break;
        if($b == "."){
            break;
        }
    }
?>