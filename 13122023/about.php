<?php 
include_once 'aboutController.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>
<body>
    
    <h1>About</h1>

    <p><?php echo $_SESSION["username"]; ?></p>

    <a href="logout.php">Logout</a>

</body>
</html>