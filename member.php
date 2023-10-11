

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Member's Page - User Registration and Login using PHP</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <style>
            #wrapper
            {
                width:70%;
                margin:auto;
            }
        </style>
    </head>
    <body>
        <div id="wrapper">
            <?php
                require_once 'header.php';
            ?>

            <h2>Welcome <?php echo $_SESSION['username']; ?></h2>

            <p>This is a secure member's page. It can only be accessed once the user has logged in.</p>

            <form action="logout.php" method="post">
                <input type="submit" value="Logout">
            </form>
        </div>
    </body>
</html>
