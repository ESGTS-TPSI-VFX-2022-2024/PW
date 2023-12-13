<?php 
include_once 'loginController.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <h1>LOGIN</h1>

    <form action="login.php" method="post">
        <input type="text" name="txtUsername" placeholder="Username">
        <input type="password" name="txtPassword" placeholder="Password">

        <button name="btnEnviar" type="submit">Login</button>

        <p><?php echo $msg; ?></p>

    </form>

</body>
</html>