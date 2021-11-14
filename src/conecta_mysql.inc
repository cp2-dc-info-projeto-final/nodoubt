<?php
    $mysqli = mysqli_connect("localhost","estudante","12345","nodoubt");

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
      }

?>
