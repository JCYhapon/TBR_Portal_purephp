<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>This is admin page</h1>
    <?php echo $_SESSION ["email"] ?>

    <?php echo $_SESSION ["fullname"] ?>

    <a href="logout.php">logout</a>
</body>
</html>