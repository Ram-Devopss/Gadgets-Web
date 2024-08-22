<?php
session_start();
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


           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                   <h1>Discover Your Lifestyle Upgrade</h1>
<p>Enjoy a generous 40% discount across our exclusive range of premium brands.</p>
<a href="products.php" class="btn btn-danger">Explore Our Collections</a>

                   </div>
                   </center>
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
                                </div>
                           </center>
                       </div>
                   </div>';
            }

            echo '<div></div>';
            echo '<div></div>';
            

         
        } else {
            echo "0 results";
        }
        
        echo'</div></div>';

        $conn->close();
        ?>
            <!--<div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/camera.jpg" alt="Camera">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Cameras</p>
                                        <p>Choose among the best available in the world.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/watch.jpg" alt="Watch">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Watches</p>
                                    <p>Original watches from the best brands.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/shirt.jpg" alt="Shirt">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Shirts</p>
                                   <p>Our exquisite collection of shirts.</p>
                               </div>
                           </center>
                       </div>
                   </div>
             -->
            <br><br> <br><br><br><br>
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