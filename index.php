<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include 'header.php';
    ?>

    <h1>Login</h1>

    <form action="process.php" method="post">
        <label for="username">Email:</label>
        <input type="text" name="email" required> <br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required> <br><br>

        <input type="submit" value="Login" name="login">
    </form>

</body>
</html>