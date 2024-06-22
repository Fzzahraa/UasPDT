<?php
require 'vendor/autoload.php';

$client = new MongoDB\Client("mongodb://mongodb:27017");
$collection = $client->mydatabase->mycollection;

// Create
$insertOneResult = $collection->insertOne(['name' => 'John Doe', 'email' => 'john@example.com']);
echo "Inserted with Object ID '{$insertOneResult->getInsertedId()}'";

// Read
$result = $collection->find();
foreach ($result as $entry) {
    echo $entry['name'], ': ', $entry['email'], "<br>";
}

// Update
$collection->updateOne(['name' => 'John Doe'], ['$set' => ['email' => 'john.doe@example.com']]);

// Delete
$collection->deleteOne(['name' => 'John Doe']);
?>
