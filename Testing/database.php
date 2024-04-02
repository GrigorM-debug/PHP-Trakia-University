<?php
    $connection = mysqli_connect("MySQL", "root", "testdatabase");

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    $query = mysqli_query($connection, "SELECT * FROM users");

    // Fetch data into an associative array
    $row = mysqli_fetch_assoc($query);

    // Close connection
    mysqli_close($connection);
?>
