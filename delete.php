<?php
   $server = "localhost";
   $username = "root";
   $password = "root";
   $dbName = "newHotel";
   $id = $_GET["cane"];

   $conn = new mysqli($server,$username,$password,$dbName);

   if ($conn -> connect_errno) {

     echo $conn -> connect_errno;
     return;

   }


   $sql = "


        DELETE FROM paganti
        WHERE id =" . $id;

    $results = $conn -> query($sql);



    $conn -> close(); 
?>
