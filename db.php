<?php 

     $conn = mysqli_connect('localhost', 'root', '', 'phpdevelopers');
     if($conn) {
         //echo "Database Connected Successfully";
     }

     else {

        die("Database Connection fail");
     }
?>