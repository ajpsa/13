<?php

require 'vendor/autoload.php';
  


$m = new MongoDB\Client("mongodb://localhost:27017");
   echo "\n Connection to database successfully \n";

   $db = $m->Library_Management;
   echo "\n Database Library_Management selected \n";

   $collection = $db->library;
   echo "\n Collection selected succsessfully \n";
?>