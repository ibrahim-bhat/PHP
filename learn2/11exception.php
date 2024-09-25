<!-- Exception Handling in PHP

Exception handling is a mechanism in PHP that allows you to gracefully handle errors that occur during program execution. It helps to prevent your application from crashing and provides a way to recover from unexpected situations.

Throwing Exceptions

To throw an exception, use the throw keyword followed by an instance of a Throwable class or its derived classes: -->

<?php
function divide($dividend, $divisor)
{
    try{
        if ($divisor == 0) {
            throw new Exception("Division by zero is not allowed.");
        }
        echo $dividend / $divisor;

    } catch(Exception $e){
        echo "An error occurred: " . $e-> getMessage();
    }

    
}

divide(12, 0);
?>

<!-- <?php
        try {
            $result = divide(10, 0);
            echo "Result: $result";
        } catch (Exception $e) {
            echo "An error occurred: " . $e->getMessage();
        }
?> -->