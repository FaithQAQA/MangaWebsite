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




$productName = $_REQUEST['productName'];
$productPrice = $_REQUEST['productPrice'];




$query = "insert into tblProducts (productName, productPrice) values ('$productName', $productPrice)";


$result = mysqli_query($conn, $query);


if ($result == 1)
{
    
    header("location:add-product.php?result=success");
} else
{
    header("location:add-product.php?result=fail");
}
?>
