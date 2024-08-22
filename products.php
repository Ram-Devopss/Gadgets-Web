<?php
    session_start();
    require 'check_if_added.php';
?>
    <!DOCTYPE html>
    <html>

    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Gadget World</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>

    <body>
        <div>
            <?php
                require 'header.php';
            ?>
                <div class="container">
                    <div class="jumbotron">
                        <h1>Welcome to our Gadget World!</h1>
                        <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
                    </div>
                </div>

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
            echo '<div class="container">
               <div class="row">';

            // Loop through each row of the result set
            while ($row = $result->fetch_assoc()) {

                $count = $row['id'];
                $name = $row['product'];
                $price = $row['price'];
                $des = $row['des'];
                $url = $row['url'];

                echo' <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="'.$url.'" alt="Camera">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">'.$name.'</p>
                                        <p>'.$des.'</p>
                                        <p>PRICE '.$price.'</p>
                                </div>

     <a href="cart_add.php?id='.$row['id'].'" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>

                           </center>
                       </div>
                   </div>';
            }

         
        } else {
            echo "0 results";
        }
        echo'</div></div>';

        $conn->close();
        ?>


                    <br><br><br><br><br><br><br><br>

                    <br>
                    <br>
                    <br>
                    <br>
                    <hr>

                    <footer class="footer">
                        <div class="container">
                            <center>
                                <p>Copyright &copy Gadget World. All Rights Reserved. | Contact Us: ramdevops2005@gmail.com</p>
                            </center>
                        </div>
                    </footer>
        </div>
    </body>

    </html>