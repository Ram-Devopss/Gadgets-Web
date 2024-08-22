<?php
        // PHP code to fetch and display dishes
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "gatgets";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // SQL query to retrieve all dishes
        $sql = "SELECT id, product, des, price,  url FROM products";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<div class="tab-content">';
            echo '<div id="tab-1" class="tab-pane fade show p-0 active">';
            echo '<div class="row g-4">';

            // Loop through each row of the result set
            while ($row = $result->fetch_assoc()) {

                $name = $row['product'];
                $price = $row['price'];
                echo '<div class="col-lg-6">';
                echo '<div class="d-flex align-items-center">';
                echo '<img class="flex-shrink-0 img-fluid rounded" src="' . $row["url"] . '" alt="" style="width: 80px;">';
                echo '<div class="w-100 d-flex flex-column text-start ps-4">';
                echo '<h5 class="d-flex justify-content-between border-bottom pb-2">';
                echo '<span>' . $row['product'] . '</span>';
                echo '<span class="text-primary">₹' . $row['price'] . '</span>';

                echo '</h5>';
                echo '<small class="fst-italic">' . $row['des'] . '</small>';
                echo '<button class="btn btn-primary mt-3 order-btn" onclick="addtocart(\'' . $name . '\',' . $price . ')" data-name="' . $name . '" data-price="' . $price . '">Order</button>';

                echo '</div>';
                echo '</div>';
                echo '</div>';
            }

            echo '</div>'; 
            echo '</div>'; 
            echo '</div>'; 
        } else {
            echo "0 results";
        }

        $conn->close();
        ?>