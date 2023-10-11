<?php
    // check if the session exists, otherwise redirect back to login page
    require_once 'check_session.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>View Manga - </title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <style>
            #wrapper
            {
                width:50%;
                margin:auto;
            }

            table
            {
                border-collapse: collapse;
                width: 50%;
                margin: auto;
            }

            th, td
            {
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even){background-color: #f2f2f2}

            th
            {
                background-color: #4CAF50;
                color: white;
            }

            h2, h3
            {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div id="wrapper">

            <h1>Manga</h1>

            <a href="index.php">Home</a> | 
            <a href="add-product.php">Add Product</a> | 
            <a href="view-products.php">View Products</a>
            <a href="logout.php">Logout</a>


            <hr>

            <h2>View Manga</h2>

            

                <?php
                
                $host = 'dev.fast.sheridanc.on.ca';        
                $user = 'maynajal_maynajal';      
                $pswd = '-cq8,dl@2v;3';      
                $dbName = 'maynajal_myDatabase';      

                $conn = mysqli_connect($host, $user, $pswd, $dbName);

               
                if (empty($conn))
                {
                    die("Connection failed: <br>" . mysqli_connect_error());
                }


                
                $query = "select * from tblProducts";

               
                $result = mysqli_query($conn, $query);

                
                if (mysqli_num_rows($result) > 0) 
                {    
                    
                    echo "<table id='products'>";
                    echo "<tr><th>Row #</th>";
                    echo "<th>Manga Name</th>";
                    echo "<th>Manga Price</th></tr>";
                    
                    $i = 1;     
                    
                   
                    while ($row = mysqli_fetch_assoc($result))
                    {
                        echo "<tr><td>$i</td>";
                        echo "<td>" . $row['productName'] . "</td>";
                        echo "<td>" . $row['productPrice'] . "</td></tr>";

                        $i++;
                    }
                    
                    echo "</table>";
                }
                else
                {
                    echo "<h3>The table is empty.</h3>";
                }
                ?>
        </div>
    </body>
</html>
