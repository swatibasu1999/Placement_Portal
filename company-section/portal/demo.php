<?php
require_once __DIR__ . '/vendor/autoload.php'; 
//require_once 'C:\Users\Hritika Verma\vendor\autoload.php'; 
$client = new MongoDB\Client('mongodb+srv://admin_project:admin_project@cluster0.gwbjb.mongodb.net/test?retryWrites=true&w=majority');
$db=$client->test;
$collection=$db->mycol;
$document = array( 
      "title" => "dbms", 
      "description" => "subject", 
      "likes" => 100,
      "url" => "http://www.tutorialspoint.com/mongodb/",
      "by" => "igdtuw"
   );
  $collection->insertOne($document);
 $cursor = $collection->find();
   // iterate cursor to display title of documents
	
   foreach ($cursor as $document) {
	  echo "</br>";
      echo $document["title"] . "\n";
	  echo "</br>";  
	  echo $document["description"] . "\n";
	  echo "</br>";
	  echo $document["by"] . "\n";
	  echo "</br>"; 
   }
echo "connected";
?>

