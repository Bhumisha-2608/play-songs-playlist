<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PSP Login</title>
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

        .login-form {
            background: rgba(0, 0, 0, 0.8);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
            width: 100%;
            max-width: 400px;
        }

        .login-form h1 {
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

        input[type="varchar"],
        input[type="password"] {
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

        .login-btn {
            background-color: #d72222;
            color: #fff;
            margin-right: 10px;
        }

        .login-btn:hover {
            background-color: #b91d1d;
        }

        .signup-btn {
            background-color: #fff;
            color: #d72222;
            border: 2px solid #d72222;
        }

        .signup-btn:hover {
            background-color: #d72222;
            color: #fff;
        }

        .error-message {
            color: #ff4d4d;
            font-size: 0.9rem;
            margin-top: -10px;
            margin-bottom: 10px;
            display: none;
        }

    
    </style>
</head>

<body>
    <div class="container">
       
    <form class="login-form" id="loginForm" action="login1.php" method="POST">
    <h1>Login</h1>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="varchar" name="email" id="username" placeholder="Enter your Email" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="userpassword" id="password" placeholder="Enter your password" required>
        <div id="error" class="error-message">Invalid username or password</div>
    </div>
    <div class="btn-container">
        <button type="submit" name="submit" class="btn login-btn">Login</button>
        <button type="button" class="btn signup-btn" onclick="window.location.href='singup.php'">Signup</button>
    </div>
    </div>
</form>

    

  <script>

        function login() {
    const form = document.getElementById('loginForm');
    const errorDiv = document.getElementById('error');

    // Optionally validate fields here (client-side validation)
    if (form.checkValidity()) {
        form.submit(); // Submit the form
    } else {
        errorDiv.style.display = 'block';
    }
}

    </script>
</body>

</html>
