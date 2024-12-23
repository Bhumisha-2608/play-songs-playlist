<?php

if (isset($_GET['search'])) {
  
    $searchQuery = htmlspecialchars($_GET['search']);

    $songs = [
        ["title" => "Legacy", "artist" => "Raftaar", "src" => "6.mp3", "poster" => "poster2.jpg"],
        ["title" => "Hawa banke", "artist" => "Darshan Raval", "src" => "8.mp3", "poster" => "poster4.jpg"],
        ["title" => "Zaalima", "artist" => "Shreya Ghosal", "src" => "9.mp3", "poster" => "poster5.jpg"],
        ["title" => "Oddhni", "artist" => "Udit Narayan", "src" => "10.mp3", "poster" => "poster6.jpg"]
    ];

    $filteredSongs = array_filter($songs, function ($song) use ($searchQuery) {
        return stripos($song['title'], $searchQuery) !== false || stripos($song['artist'], $searchQuery) !== false;
    });
} else {
    $filteredSongs = [];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results | PSP Music Streaming</title>
    <style>
   body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: black;
}

header {
    background-color: #d72222;
    color: #fff;
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
    color: #fff;
    text-decoration: none;
}

.search {
    padding: 2em;
    color: #fff;
    text-align: center;
}

.search h1 {
    margin-bottom: 1em;
    color: #d72222;
}

.search-bar {
    display: flex;
    justify-content: center;
    margin-bottom: 2em;
}

.search-bar input[type="text"] {
    width: 50%;
    padding: 0.5em;
    border: 2px solid #d72222;
    border-radius: 5px 0 0 5px;
    outline: none;
}

.search-bar button {
    padding: 0.5em 1em;
    background-color: #d72222;
    border: none;
    color: #fff;
    cursor: pointer;
    border-radius: 0 5px 5px 0;
}

.search-bar button:hover {
    background-color: #b91d1d;
}

.results {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 20px;
    padding: 1em;
}

.result-card {
    background-color: #333;
    padding: 1em;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.result-card img {
    width: 100%;
    height: 150px;
    object-fit: cover;
    border-radius: 10px 10px 0 0;
}

.result-card h3 {
    margin: 0.5em 0;
    color: #fff;
}

.result-card audio {
    width: 100%;
    margin-top: 1em;
}

footer {
    background-color: #333;
    color: #fff;
    padding: 1em;
    text-align: center;
    clear: both;
} 
    </style>
</head>

<body>
   
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


    <main class="search">
        <h1>Search Results</h1>
        <div class="search-bar">
            <form action="search.php" method="get">
                <input type="text" name="search" placeholder="Search for songs, artists, albums..." value="<?php echo $searchQuery ?? ''; ?>">
                <button type="submit">Search</button>
            </form>
        </div>

        <?php if (!empty($filteredSongs)): ?>
        <div class="results">
            <?php foreach ($filteredSongs as $song): ?>
            <div class="result-card">
                <img src="<?php echo $song['poster']; ?>" alt="Result Image">
                <h3><?php echo $song['title']; ?></h3>
                <p><?php echo $song['artist']; ?></p>
                <audio controls>
                    <source src="<?php echo $song['src']; ?>" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
            </div>
            <?php endforeach; ?>
        </div>
        <?php else: ?>
            <p>No results found for "<?php echo $searchQuery; ?>"</p>
        <?php endif; ?>
    </main>

   
    <footer>
        <p>&copy; 2024 PSP Music Streaming</p>
    </footer>
</body>

</html>
