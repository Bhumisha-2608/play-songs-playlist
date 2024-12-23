<?php
include 'config.php';

// Check if form is submitted
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = md5($_POST['password']);

    // Check if email already exists
    $dup_email = mysqli_query($con, "SELECT * FROM `users` WHERE Email = '$email'");
    if (mysqli_num_rows($dup_email)) {
        echo "<script>alert('This email is already taken');
        window.location.href = 'first.php';
        </script>";
    } else {
        // Insert record into database
        $insert_query = "INSERT INTO `users`(`Name`, `Email`, `Phoneno`, `Password`) VALUES ('$name', '$email', '$phone', '$password')";
        if (mysqli_query($con, $insert_query)) {
            echo "<script>alert('Signup successful!');
              window.location.href = 'first.php';
            </script>";
        } else {
            echo "<script>alert('Error: " . mysqli_error($con) . "');
             window.location.href = 'first.php';
             </script>";
        }
    }
}
?> 


