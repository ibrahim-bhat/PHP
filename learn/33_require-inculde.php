<?php

echo "<h1>Require and Inculde </h1><br>";
echo "In PHP, the include and require statements insert the contents of one PHP file into another before the server executes it. They perform similar actions and produce similar results, but differ in how they handle errors:
Error handling: require throws a fatal error (E_COMPILE_ERROR) and stops the script if the file can't be found. include only throws a warning (E_WARNING) and the script continues.
File types: include is used for local files, while require is used for remote files.
Functionality: include executes the code of the included file, while require imports variables and functions from the file.
Recommendation: require is the recommended method for including files in PHP.
Deprecation: include is deprecated";

// include '33.1_dbconnnect.php';

require '33.1_dbconnnect.php';


?>