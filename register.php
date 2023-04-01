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

    <h1>Register</h1>

    <form action="process.php" method="post">
        <label for="firstname">First Name:</label>
        <input type="text" name="firstname" required> <br><br>

        <label for="lastname">Last Name:</label>
        <input type="text" name="lastname" required> <br><br>

        <label for="username">Username:</label>
        <input type="text" name="username" required> <br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required> <br><br>

        <label for="gender">Gender:</label>
        <select name="gender" required>
            <option value="">Select Gender</option>
            <option value="M">Male</option>
            <option value="F">Female</option>
        </select> <br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required> <br><br>

        <label for="confirm-password">Confirm Password:</label>
        <input type="password" name="confirm_password" required> <br><br>

        <input type="submit" value="Register" name="register">
    </form>

</body>
</html>