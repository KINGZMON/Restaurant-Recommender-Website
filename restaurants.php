<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "restaurants";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM restaurant_info ORDER BY 'DATE' ASC"; // ASC means you're ordering from newest to oldest
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {

            echo "<a href='#'><img id='restaurant-image' src=". $row['image'] . "></a>";
            echo "<a href='#'>" . $row['name'] . "</a>";
            echo "<a href='#'>" . $row['cuisine'] . "</a>";
            echo "<a href='#'>" . $row['price_range'] . "</a>";
            echo "<a href='#'>" . $row['rating'] . "</a>";
            echo "<a href='#'>" . $row['location'] . "</a>";
            echo "<a href='#'>" . $row['parking'] . "</a>";
            echo "<a href='#'>" . $row['number_tables'] . "</a>";
            echo "<a href='#'>" . $row['contact'] . "</a>";

        }
    }
    $conn->close();
?>