<?php

include "conn_to_database.php";

// Creating a database named mulesoft
$sql = "CREATE DATABASE mulesoft";

if ($conn->query($sql) === TRUE) {
    echo "Database Created";
} else {
    echo "Error: " . $conn->error;
}

// Closing connection
$conn->close();

?>