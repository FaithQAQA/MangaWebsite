<?php
    require_once 'check_session.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Manga Mania</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <style>
            #wrapper
            {
                width:50%;
                margin:auto;
            }

            table, td, th
            {    
                border: 1px solid #ddd;
                text-align: left;
            }

            table
            {
                border-collapse: collapse;
                width: 50%;
                margin: auto;
            }

            th, td
            {
                padding: 15px;
            }

            h2
            {
                text-align: center;
            }

            #msg
            {
                width:50%;
                margin:auto;
            }
        </style>
    </head>
    <body>
        <div id="wrapper">

            <h1>Manga Mania</h1>

            <a href="index.php">Home</a> | 
            <a href="add-product.php">Add Product</a> | 
            <a href="view-products.php">View Products</a>
            <a href="logout.php">Logout</a>


            <hr>

            <h2>Add Manga</h2>

            <form action="add-product1.php" method="post">
                <table>
                    <tr>
                        <td>Manga Name:</td>
                        <td>
                            <input type="text" name="productName">
                        </td>
                    </tr>
                    <tr>
                        <td>Manga Price:</td>
                        <td>
                            <input type="text" name="productPrice">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="Add Product">
                        </td>
                    </tr>
                </table>
            </form>

            <?php
         
            if (isset($_REQUEST['result']))
            {
                if ($_REQUEST['result'] == "success")
                {
                    echo "<br><div id='msg'>";
                    echo "<div class='alert alert-success alert-dismissable fade in'>";
                    echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
                    echo "<strong>Success!</strong> New product was added.";
                    echo "</div></div>";
                } else if ($_REQUEST['result'] == "fail")
                {
                    echo "<br><div id='msg'>";
                    echo "<div class='alert alert-danger alert-dismissable fade in'>";
                    echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
                    echo "<strong>Fail!</strong> New product was not added.";
                    echo "</div></div>";
                }
            }
            ?>
        </div>
    </body>
</html>
