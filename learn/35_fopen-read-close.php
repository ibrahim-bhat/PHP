<?php

    echo "fopen(), fread() & fclose() <br>";

//fopen(): Opens a file or URL for reading, writing, or appending. The syntax for fopen() is fopen(filename, mode), where filename specifies the file's name and mode specifies how the file should be opened. For example, r is read-only mode, r+ is read and write mode, w is write-only mode, and so on. If the file doesn't exist, fopen() can create it. On success, fopen() returns a file pointer, and on failure, it returns a Boolean value of FALSE.

//fread(): Reads data from a file that has been opened using fopen(). fread() takes two arguments and reads up to the specified number of bytes from the file pointer. Reading stops when the specified number of bytes have been read, the end of file is reached, or a packet becomes available.


//fclose(): Closes an open file


$fprt = fopen("file" , "r"); //open file
if(!$fprt){
    die ("unable to open the file");
}


$cont = fread($fprt , filesize("file"));
echo $cont;

fclose($fprt);

?>