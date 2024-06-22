<?php
$mysqli = new mysqli('mysql-master', 'root', 'rootpassword', 'mydatabase');

// Create
$mysqli->query("INSERT INTO users (name, email) VALUES ('John Doe', 'john@example.com')");

// Read
$result = $mysqli->query("SELECT * FROM users");
while ($row = $result->fetch_assoc()) {
    echo "ID: " . $row['id'] . " - Name: " . $row['name'] . " - Email: " . $row['email'] . "<br>";
}

// Update
$mysqli->query("UPDATE users SET email='john.doe@example.com' WHERE name='John Doe'");

// Delete
$mysqli->query("DELETE FROM users WHERE name='John Doe'");

$mysqli->close();
?>
