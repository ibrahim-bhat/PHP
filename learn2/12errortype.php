<!-- 
 
Notices: These are non-critical errors that typically indicate potential issues or inconsistencies in your code. They don't usually prevent your script from executing, but they can be helpful in identifying potential problems.

Warnings: Warnings are more severe than notices and often indicate potential issues that could lead to unexpected behavior or errors. They may not prevent your script from executing, but they should be addressed to ensure proper functionality.

Fatal Errors: Fatal errors are critical errors that prevent your script from executing further. They usually occur due to syntax errors, undefined functions, or missing files. 

Syntax Errors

Syntax errors occur when the code violates the grammatical rules of the PHP language. These errors typically prevent the script from executing and are usually caused by:

Missing or misplaced punctuation: For example, missing semicolons or parentheses.
Incorrect variable names or keywords: Using invalid characters or reserved words.
Unbalanced quotes or brackets: Not properly closing strings or arrays.
Incorrect function or method calls: Passing incorrect arguments or using invalid methods.

Parse Errors

Parse errors occur when the PHP parser cannot understand the structure of the code. These errors are often caused by syntax errors, but they can also be due to other issues like unexpected tokens or missing elements.
-->


<?php
// Notice error
$undefinedVariable;
echo $undefinedVariable; // Notice: Undefined variable: undefinedVariable

// warning 
$result = 10 / 0; // Warning: Division by zero
include 'nonexistent_file.php'; // Warning: include(nonexistent_file.php): Failed to open stream: No such file or directory
// myNonexistentFunction(); // Warning: myNonexistentFunction() is not defined

//    .................... syntax


// echo "Hello; // Missing closing quote

// function myFunction() {
//     // Function body
// }

// myNonexistentFunction(); // Fatal error: Call to undefined function myNonexistentFunction()

require 'nonexistent_file.php'; // Fatal error: require(): Failed opening required 'nonexistent_file.php' (include_path='.:/usr/local/lib/php')


//........................parse error 
// if (condition) {

// } // Missing closing parenthesis


//.............................logical error 
// function calculateArea(length, width) {
//     return length + width; // Incorrect calculation for area
// }




error_reporting() // Function

// The error_reporting() function allows you to control the level of error reporting in your PHP scripts. It takes an integer value as an argument, which determines which types of errors are reported.

// Here are some common error reporting levels:

// E_ALL: Reports all errors (notices, warnings, fatal errors).
// E_ERROR: Reports only fatal errors.
// E_WARNING: Reports only warnings.
// E_NOTICE: Reports only notices.
// E_STRICT: Reports strict standards, such as using undefined variables.

// Report all errors
// error_reporting(E_ALL);

// Report only fatal errors
// error_reporting(E_ERROR);

// Report notices, warnings, and fatal errors
// error_reporting(E_ALL & ~E_NOTICE);


// .........................
// Error Logging in PHP
// Error logging is a crucial practice in PHP development to track and analyze issues that may arise during the execution of your scripts. It helps in debugging, identifying performance bottlenecks, and maintaining the overall health of your application.        This built-in function allows you to log errors to various destinations, including files, syslog, email, and more.

// error_log("An error occurred!", 0, "error.log"); // Logs to a file
?>