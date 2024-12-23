<?php
session_start(); // Start the session
include "config.php";

if (isset($_POST['submit'])) {
    $u_email = $_POST['email'];
    $u_password = md5($_POST['userpassword']); // Ensure the password is hashed for security

    $result = mysqli_query($con, "SELECT * FROM `users` WHERE Email = '$u_email' AND Password = '$u_password'");
    if (mysqli_num_rows($result)) {
        $user = mysqli_fetch_assoc($result);
        // Store user info in session
        $_SESSION['user_name'] = $user['Name'];
        $_SESSION['user_email'] = $user['Email']; // Store the user's email

        echo "<script>
            alert('Login success');
            window.location.href = 'index.php';
        </script>";
        exit; // Ensure no further code executes
    } else {
        echo "<script>
            alert('Incorrect email/password');
            window.location.href = 'first.php';
        </script>";
        exit; // Ensure no further code executes
    }
}
?>
