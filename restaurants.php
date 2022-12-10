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

    $sql2 = "SELECT * FROM menu_links ORDER BY 'DATE' ASC"; // ASC means you're ordering from newest to oldest
    $result2 = $conn->query($sql2);

    $price_txt = "price=";
    if ($result->num_rows > 0 && $result2->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $row2 = $result2->fetch_assoc();
            if ($row['price_range'] == 1) {
            $actual_price = "$";
            }
            else if ($row['price_range'] == 2) {
                $actual_price = "$$";
            }
            else{
                $actual_price = "$$$";
            }


            //echo "<a href='#'><img id='restaurant-image' src=". $row['image'] . "></a>";
            //echo "<a href='#'>" . $row['name'] . "</a>";
            //echo "<a href='#'>" . $row['cuisine'] . "</a>";
            //echo "<a href='#'>" . $row['price_range'] . "</a>";
            //echo "<a href='#'>" . $row['rating'] . "</a>";
            //echo "<a href='#'>" . $row['location'] . "</a>";
            //echo "<a href='#'>" . $row['parking'] . "</a>";
            //echo "<a href='#'>" . $row['number_tables'] . "</a>";
            //echo "<a href='#'>" . $row['contact'] . "</a>";

        
        echo "<div id='Restaurant-Entry'>";
        echo "<a href='#'><img id='restaurant-image' src=". $row['image'] . "></a>";
        echo "<div id='res-heading-container'>";
            echo "<h6 id='restaurant-heading'>" . $row['name'] . "</h6>";
            echo "<a id='restaurant-price-tag'>$actual_price</a><a class='is-hidden'>$price_txt" . $row['price_range'] . "</a>";
            echo "<a class='is-hidden'>" . $row['location'] . "</a>";
            echo "<i class='fa-solid fa-square-parking'></i>";
            echo "<a href=" . $row2['link'] . "' style='color: black;'><i class='fa-solid fa-utensils'></i></a>";
            
        echo "</div>";
          
          echo "<a id='restaurant-cuisines'>" . $row['cuisine'] . "</a>";
          
            echo "<span id='restaurant-stars' style='width:88%'>";
            $rating = $row['rating'];
            for ($i = 0; $i < $rating; $i++) {
                echo "<i class='fa fa-star' aria-hidden='true'></i>";
            }

          
         echo "</span>";
        echo "</div>";

        }
    }
    $conn->close();
?>