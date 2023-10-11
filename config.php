<?php
    $host = 'dev.fast.sheridanc.on.ca';                   
    $user = 'maynajal_maynajal';                  
    $pswd = 'H4j4hjIqtQr3';                  
    $dbName = 'maynajal_myDatabase1';                   

    $conn = mysqli_connect($host, $user, $pswd, $dbName);

    if (empty($conn))
    {
        die("Connection failed: " . mysqli_connect_error());
    }
    ?>