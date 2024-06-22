<?php
$redis = new Redis();
$redis->connect('redis', 6379);

// Create
$redis->set("user:1000", "John Doe");

// Read
echo $redis->get("user:1000");

// Update
$redis->set("user:1000", "Johnathan Doe");

// Delete
$redis->del("user:1000");

$redis->close();
?>
