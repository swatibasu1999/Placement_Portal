<?php require_once 'connection.php'; 
$cursor = $collection->find();
// iterate cursor to display title of documents

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>demo</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <?php 
    foreach ($cursor as $document) {
       ?>
    <h1 style="color: blue; text-align:center;"> <?php echo $document["title"] . "\n"; ?> </h1>
        <?php
    }
    ?>
        
        <script src="" async defer></script>
    </body>
</html>
