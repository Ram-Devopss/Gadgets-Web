<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Product</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
       

        <!-- Tab content will be inserted here -->
        <div id="tabContent" class="mt-4"></div>


        <h2>Insert New Product</h2>
        <form action="insert-list.php" method="post">
            <label for="pname">Product Name :</label><br>
            <input type="text" id="pname" name="pname" required><br><br>
    
            <label for="pdesc">Description:</label><br>
            <textarea id="pdesc" name="pdesc" rows="4" required></textarea><br><br>
    
            <label for="pprice">Price:</label><br>
            <input type="number" id="pprice" name="pprice" required><br><br>

    
    
            <label for="url">Enter Product Image Link</label><br>
            <input type="url" id="url" name="url" required><br><br>
    
<button>Insert Product</button>       
 </form>
    
    
        
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
