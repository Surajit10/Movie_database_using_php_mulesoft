<?php

include "conn_to_database.php";

mysqli_select_db($conn, 'mulesoft');

$sql = "CREATE TABLE Movies (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    movie_name VARCHAR(30) NOT NULL,
    actor VARCHAR(30) NOT NULL,
    actress VARCHAR(50) NOT NULL,
    director VARCHAR(50) NOT NULL,
    year_of_release DATETIME
    )";
    
    if ($conn->query($sql) === TRUE) {
      echo "Table Movies created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }

// Closing connection
$conn->close();

?>