<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PSP Music Streaming - Welcome</title>
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
    background-image: url(waves.gif) ;
    background-size: 100% 800px;
}


.container {
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    background: url('gif.gif') no-repeat center center/cover; 
}


.logo-container {
    margin-bottom: 22px;
}

.logo {
    width: 300px;
    height: auto;
}


main .content {
    background: rgba(0, 0, 0, 0.7);
    padding: 20px 40px;
    border-radius: 15px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
}

main h1 {
    font-size: 2.5rem;
    margin-bottom: 15px;
}

main p {
    font-size: 1.2rem;
    margin-bottom: 25px;
}



.button-container {
    display: flex;
    gap: 20px;
    padding-left: 200px;
    align-items: center;
}

.btn {
    font-size: 1.2rem;
    font-weight: bold;
    padding: 15px 30px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
}

.login-btn {
    background-color: #d72222;
    color: #fff;
}

.signup-btn {
    background-color: #fff;
    color: #d72222;
    border: 2px solid #d72222;
}

.btn:hover {
    transform: scale(1.1);
}

.login-btn:hover {
    background-color: #b91d1d;
}

.signup-btn:hover {
    background-color: #d72222;
    color: #fff;
}

  </style>
</head>

<body>
    <div class="container">
        <header>
            <div class="logo-container">
                <img src="image.jpg" alt="PSP Logo" class="logo">
            </div>
        </header>

        <main>
            <div class="content">
                <h1>Welcome to PSP Music Streaming</h1>
                <p>Your favorite music, anytime, anywhere.</p>
                <div class="button-container">
                    <a href="login.php"><button class="btn login-btn">Login</button></a>
                   <a href="singup.php"> <button class="btn signup-btn">Signup</button></a>
                </div>  
                    
               
            </div>
        </main>
    </div>
</body>

</html>
