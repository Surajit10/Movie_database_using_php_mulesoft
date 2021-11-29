<?php 

include "conn_to_database.php";

mysqli_select_db($conn, 'mulesoft');

$sql = "INSERT INTO Movies (movie_name, actor, actress, director, year_of_release)
VALUES ('Udaan', 'Rohan Barmecha', 'Shaunak Sengupta','Vikramaditya Motwane','2021-10-17 17:24:18')";
$sql1 = "INSERT INTO Movies (movie_name, actor, actress, director, year_of_release)
VALUES ('Band Baaja Baaraat', 'Ranveer singh', 'Anushka Sharma','Maneesh Sharma','2017-5-06 12:24:18')";
$sql2 = "INSERT INTO Movies (movie_name, actor, actress, director, year_of_release)
VALUES ('Ishqiya ', 'Naseeruddin Shah', 'Vidya Balan','Abhishek Chaubey','2015-01-01 05:24:18')";
$sql3 = "INSERT INTO Movies (movie_name, actor, actress, director, year_of_release)
VALUES ('Zindagi Na Milegi Dobara', 'Hrithik Roshan', 'Katrina kaif','Zoya Akhtar','2001-09-12 07:13:12')";
$sql4 = "INSERT INTO Movies (movie_name, actor, actress, director, year_of_release)
VALUES ('Rockstar', 'Ranbir kapoor', 'Nargis Fakhri','Imtiaz Ali','2011-11-21 21:22:22')";
$sql5 = "INSERT INTO Movies (movie_name, actor, actress, director, year_of_release)
VALUES ('Delhi Belly', 'Imran Khan', 'Shenaz Treasury','Abhinay Deo','2013-07-11 08:20:20')";
$sql6 = "INSERT INTO Movies (movie_name, actor, actress, director, year_of_release)
VALUES ('Barfi', 'Ranbir Kapoor', 'Ileana DCruz','Anurag Basu','2014-07-17 19:21:01')";
$sql7 = "INSERT INTO Movies (movie_name, actor, actress, director, year_of_release)
VALUES ('Kahaani', 'Nawazuddin Siddique', 'Vidya Balan','Sujoy Ghosh','2015-05-01 12:21:12')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

if ($conn->query($sql1) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
  }

  if ($conn->query($sql2) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
  }

  if ($conn->query($sql3) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql3 . "<br>" . $conn->error;
  }

  if ($conn->query($sql4) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql4 . "<br>" . $conn->error;
  }

  if ($conn->query($sql5) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql5 . "<br>" . $conn->error;
  }

  if ($conn->query($sql6) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql6 . "<br>" . $conn->error;
  }

  if ($conn->query($sql7) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql7 . "<br>" . $conn->error;
  }


$conn->close();

?>