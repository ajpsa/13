<?php

require 'vendor/autoload.php';
  
$m = new MongoDB\Client("mongodb://localhost:27017");
   echo "\n Connection to database successfully \n";

   $db = $m->Library_Management;
   echo "\n Database Library_Management selected \n";

   $collection = $db->library;
   echo "\n Collection selected succsessfully \n";


   $collection->insertMany([
       ["BookName"=>"The Alchemist","Author"=>"Paulo Coelho","Publisher"=>"HarperCollins"],
       ["BookName"=>"The Immortals of Meluha","Author"=>" Amish Tripathi","Publisher"=>"Westland Press"],
       ["BookName"=>"War and Peace","Author"=>"Leo Tolstoy","Publisher"=>"The Russian Messenger"],
       ["BookName"=>"The Lord of the Rings","Author"=>"J.R.R. Tolkien","Publisher"=>"Allen & Unwin"],
       ["BookName"=>"The Satanic Verses","Author"=>"Salman Rushdie","Publisher"=>"Viking Penguin"]
   ]);

   echo "Books inserted sucessfully";
?>