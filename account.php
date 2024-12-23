<?php
session_start(); // Start the session
include "config.php";

// Check if the user is logged in
if (!isset($_SESSION['user_name'])) { // Use 'user_name' to store the Name in the session
    header("Location: first.php"); // Redirect to login if not logged in
    exit;
}

// Retrieve Name and Email from session
$user_name = $_SESSION['user_name'];
$user_email = $_SESSION['user_email']; // Retrieve the email from session
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account - PSP Music Streaming</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: black;
            color: white;
        }

        header {
            background-color: #d72222;
            color: white;
            padding: 1em;
            text-align: center;
        }

        header nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: space-between;
        }

        header nav ul li {
            margin-right: 20px;
        }

        header nav a {
            color: white;
            text-decoration: none;
        }

        .account-section {
            padding: 2em;
            text-align: center;
        }

        .profile-card {
            background-color: #222;
            padding: 2em;
            border-radius: 10px;
            display: inline-block;
            text-align: center;
            margin-bottom: 2em;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
        }

        .profile-card h2 {
            margin: 0.5em 0;
        }

        .profile-card button {
            background-color: #d72222;
            color: white;
            padding: 0.5em 1em;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .profile-card button:hover {
            background-color: #a91c1c;
        }

        .logout {
            margin-top: 2em;
        }

        .logout a {
            background-color: #d72222;
            color: white;
            padding: 0.5em 1.5em;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .logout a:hover {
            background-color: #a91c1c;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1em;
        }
    </style>
</head>

<body>
    <!-- Header Section -->
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="search.php">Search</a></li>
                <li><a href="library.php">Library</a></li>
                <li><a href="account.php">Account</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Section -->
    <main>
        <section class="account-section">
            <h1>Your Account</h1>
            <div class="profile-card">
                <h2><?php echo $user_name; ?></h2>
                <p>Email: <?php echo $user_email; ?></p>
            </div>

            <div class="logout">
                <a href="first.php">Logout</a>
            </div>
        </section>
    </main>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 PSP Music Streaming</p>
    </footer>
</body>

</html>
