<?php
   $server = "localhost";
   $username = "root";
   $password = "root";
   $dbName = "newHotel";
   $id = $_GET["id"];
   $title = $_GET["title"];
   $conn = new mysqli($server,$username,$password,$dbName);

   if ($conn -> connect_errno) {

     echo $conn -> connect_errno;
     return;

   }


   $sql = "


        DELETE FROM " . $title
        . "WHERE id =" . $id;

    $results = $conn -> query($sql);



    $conn -> close(); 
?>
