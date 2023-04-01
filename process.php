<?php 
    include 'header.php'; 

    // REGISTER USER

    if (isset($_POST['register'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        if ($password != $confirm_password) {
            exit ("<p>Passwords do not match!</p> <a href='register.php'>Go Back</a>");
        }

        $email_exists = mysqli_query($connect, "SELECT * FROM users WHERE email = '$email'");
        $username_exists =  mysqli_query($connect, "SELECT * FROM users WHERE username = '$username'");


        if (mysqli_num_rows($email_exists) > 0 || mysqli_num_rows($username_exists) > 0) {
            exit ("<p>User already exists!</p> <a href='index.php'>Login</a> <a href='register.php'>Go Back</a>");
        }

        $encrypted_password = md5($password);

        $insert_user = mysqli_query($connect, "INSERT INTO users (firstname,lastname,username,email,gender,password) 
        VALUES ('$firstname','$lastname','$username','$email','$gender','$encrypted_password')");

        if ($insert_user) {
            echo "<p>User Registered Successfully!<p/> <a href='index.php'>Login</a>";
        }
    }


    // LOGIN USER
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user_exists = mysqli_query($connect, "SELECT * FROM users WHERE email = '$email'");

        if (!mysqli_num_rows($user_exists)) {
            exit ("<p>User not found!</p> <a href='register.php'>Register</a> <a href='index.php'>Go Back</a>");
        }

        $user_details = mysqli_fetch_assoc($user_exists);

        $encrypted_password = md5($password);

        if ($encrypted_password !== $user_details['password']) {
            exit ("<p>Incorrect Password!</p> <a href='index.php'>Go Back</a> <p>Forgot password?</p> <a href='register.php'>Create New Account</a>");
        } 

        $_SESSION['login'] = true;
        $_SESSION['id'] = $user_details['id'];

        header("Location: welcome.php");

    }









?>