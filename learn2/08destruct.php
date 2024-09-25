<?php
    class abc {
        private $conn ;
         public function __construct()
         {
            $this->conn = mysqli_connect();
         }

         public function insert(){
            echo "helo world ";
         }

         public function __destruct()
         {
            mysqli_close($this->conn);
         }
    }

    $test = new abc();

?>