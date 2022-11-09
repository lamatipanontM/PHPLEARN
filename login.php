<!doctype html>
<html>
    <head>
        <title>Login</title>

    </head>
    <body>
    <?php
    session_start();
    ?>

    <form action="loginprocess.php" method = "POST">
        User name:<input type="text" name="Username"><br>
        Password:<input type="password" name="Pword"><br>
        <input type = "submit" value="Login">
    </form>

    </body>
</html>