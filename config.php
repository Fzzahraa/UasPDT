<?php
// MySQL
$mysql_host = 'mysql-master';
$mysql_user = 'root';
$mysql_pass = 'rootpassword';
$mysql_db = 'mydatabase';

$mysqli = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
echo "Connected to MySQL successfully.";

// Redis
$redis = new Redis();
$redis->connect('redis', 6379);

if ($redis->ping()) {
    echo "Connected to Redis successfully.";
}

// MongoDB
require 'vendor/autoload.php';
$client = new MongoDB\Client("mongodb://mongodb:27017");
$collection = $client->mydatabase->mycollection;
echo "Connected to MongoDB successfully.";
?>
