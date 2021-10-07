<?php

require 'vendor/autoload.php';
  
$m = new MongoDB\Client("mongodb://localhost:27017");
   

echo "<table border='2'>";
echo "<tr>";
echo "<th>Book Name</th><th>Author</th><th>Publsher</th>";
echo "</tr>";

$db = $m->Library_Management;
$collection = $db->library;
$cursor = $collection->find();
foreach($cursor as $document)
{
    echo "<tr>";

    echo "<td>", $document['BookName']. "</td>";
    echo "<td>", $document['Author']. "</td>";
    echo "<td>", $document['Publisher']. "</td>";

    echo "</tr>";
}
   ?>