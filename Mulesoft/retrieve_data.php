<?Php

include "conn_to_database.php";

mysqli_select_db($conn, 'mulesoft');

$sql = "select * from movies"; // retireve all data from movies table

$sql1 = "select movie_name,actor,director from movies";  // retrieve movie name, actor and director from all rows

$sql2 = 'SELECT * FROM `movies` WHERE actor="Ranbir Kapoor"';  // retrieve movie details where actor name is Ranbir Kapoor


$run_sql = mysqli_query($conn, $sql);

$run_sql = mysqli_query($conn, $sql1);

$run_sql = mysqli_query($conn, $sql2);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>


    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="navbar.css" />

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
</head>

<body>


    <!-- Page Content  -->
    <div id="content">
        <div class="container">
            <br>
            <h2>View Movies</h2>
            <hr>
            <br>

            <!-- add code here -->

            <div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Movie id</th>
                            <th>Name</th>
                            <th>Actor</th>
                            <th>Actress</th>
                            <th>Director</th>
                            <th>Year of Release</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $select = "SELECT * FROM movies";
                        $run = mysqli_query($conn, $select);

                        while ($row_user = mysqli_fetch_array($run)) {

                            $m_id = $row_user['id'];
                            $m_name = $row_user['movie_name'];
                            $m_actor = $row_user['actor'];
                            $m_actress = $row_user['actress'];
                            $m_director = $row_user['director'];
                            $m_year_of_release = $row_user['year_of_release'];
                        ?>
                            <tr>
                                <td style="text-align:center"><?php echo $m_id; ?></td>
                                <td style="text-align:center"><?php echo $m_name; ?></td>
                                <td style="text-align:center"><?php echo $m_actor; ?></td>
                                <td style="text-align:center"><?php echo $m_actress; ?></td>
                                <td style="text-align:center"><?php echo $m_director; ?></td>
                                <td style="text-align:center"><?php echo $m_year_of_release; ?></td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>

            </div>

        </div>
    </div>
</body>

</html>


<?php
$conn->close();
?>