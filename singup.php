<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PSP Signup</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body, html {
            font-family: Arial, sans-serif;
            height: 100%;
            background: #000;
            color: white;
            background-image: url(waves.gif);
            background-size: 100% 800px;
        }

        .container {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            background: rgba(0, 0, 0, 0.7);
        }

        .signup-form {
            background: rgba(0, 0, 0, 0.8);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
            width: 100%;
            max-width: 400px;
            justify-content: center;
        }

        .signup-form h1 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        label {
            display: block;
            font-size: 1rem;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="tel"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }

        .btn-container {
            text-align: center;
        }

        .btn {
            font-size: 1.2rem;
            font-weight: bold;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }

        .signup-btn {
            background-color: #d72222;
            color: #fff;
        }

        .signup-btn:hover {
            background-color: #b91d1d;
        }

        .login-link {
            margin-top: 15px;
            display: block;
            color: #fff;
            text-decoration: underline;
            cursor: pointer;
        }
    </style>
</head>

<body>
<div class="container">
<form class="signup-form" id="signupForm" method="POST" action="insert.php">
    <h1>Signup</h1>
    <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" required name="name" id="name" placeholder="Enter your full name" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" required name="email" id="email" placeholder="Enter your email" required>
    </div>
    <div class="form-group">
        <label for="phone">Phone Number</label>
        <input type="tel" required name="phone" id="phone" placeholder="Enter your phone number" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" required name="password" id="password" placeholder="Enter your password" required>
    </div>
    <div class="btn-container">
        <button type="submit" class="btn signup-btn" name="submit">Signup</button>
    </div>
    <a href="login.php" class="login-link">Already have an account? Login here</a>
</form>
</div>

    
<script>
        function signup() {
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const password = document.getElementById('password').value;

            if (name && email && phone && password) {
                alert("Signup successful! Welcome, " + name + "!");
                window.location.href = "index.php"; // Redirect to homepage
            } else {
                alert("Please fill in all the fields.");
            }
        }
    </script>
</body>

</html>
