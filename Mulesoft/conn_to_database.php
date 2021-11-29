<?php

$servername = "localhost";

$username = "root";

$password = "";

// Creating a connection
$conn = new mysqli(
    $servername,
    $username,
    $password
);

// Check connection
if ($conn->connect_error) {
    die("Connection failure: "
        . $conn->connect_error);
}
else{
    echo "Connection Successfull";
    echo "<br>";
}

// Closing connection
// $conn->close();
