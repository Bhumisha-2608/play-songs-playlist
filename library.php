<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library - PSP Music Streaming</title>
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

        .library {
            padding: 2em;
        }

        .song-list {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-between;
        }

        .song {
            background-color: #333;
            border-radius: 10px;
            padding: 1em;
            text-align: center;
            width: 200px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        .song img {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .song .song-info h3,
        .song .song-info p {
            margin: 0.5em 0;
        }

        .play-btn {
            background-color: #d72222;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: transform 0.3s ease-in-out;
        }

        .play-btn:hover {
            transform: scale(1.1);
        }

        .music-player {
            background-color: #f4dcdc;
            padding: 20px;
            margin-top: 40px;
            border-radius: 10px;
            color: black;
        }

        .player {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .player-info {
            display: flex;
            align-items: center;
        }

        .player-info img {
            width: 80px;
            height: 80px;
            border-radius: 10px;
            margin-right: 15px;
        }

        footer {
            background-color: #333;
            color: white;
            padding: 1em;
            text-align: center;
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
        <section class="library">
            <h1>Your Library</h1>
            <div class="song-list">
                <!-- Song 1 -->
                <div class="song" data-title="Song 1" data-artist="Arijit singh" data-path="1.mp3">
                    <img src="poster1.jpg" alt="Song Artwork">
                    <div class="song-info">
                        <h3>Agar tum saath ho </h3>
                        <p>Arijit singh</p>
                    </div>
                    <button class="play-btn">Play</button>
                </div>

                <!-- Song 2 -->
                <div class="song" data-title="Song 2" data-artist="raftaar" data-path="2.mp3">
                    <img src="poster2.jpg" alt="Song Artwork">
                    <div class="song-info">
                        <h3>Legacy</h3>
                        <p>raftaar</p>
                    </div>
                    <button class="play-btn">Play</button>
                </div>

                <!-- Song 3 -->
                <div class="song" data-title="Song 3" data-artist="Kishor Kumar" data-path="3.mp3">
                    <img src="poster3.jpg" alt="Song Artwork">
                    <div class="song-info">
                        <h3>Koi humdum na raha</h3>
                        <p>Kishor Kumar</p>
                    </div>
                    <button class="play-btn">Play</button>
                </div>
            </div>
        </section>

        <!-- Music Player Section -->
        <section class="music-player">
            <h2>Now Playing</h2>
            <div class="player">
                <div class="player-info">
                    <img id="song-artwork" src="https://via.placeholder.com/150" alt="Artwork">
                    <div id="song-info">
                        <h3 id="current-song-title">Select a Song</h3>
                        <p id="current-artist">Artist Name</p>
                    </div>
                </div>
                <audio id="audio-player" controls>
                    <source src="10.mp3" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
            </div>
        </section>
    </main>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 PSP Music Streaming</p>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const songs = document.querySelectorAll(".song");
            const audioPlayer = document.getElementById("audio-player");
            const songTitle = document.getElementById("current-song-title");
            const songArtist = document.getElementById("current-artist");
            const songArtwork = document.getElementById("song-artwork");

            songs.forEach((song) => {
                const playButton = song.querySelector(".play-btn");

                playButton.addEventListener("click", () => {
                    // Fetch song details
                    const title = song.dataset.title;
                    const artist = song.dataset.artist;
                    const path = song.dataset.path;
                    const artwork = song.querySelector("img").src;

                    // Update the music player
                    audioPlayer.src = path;
                    songTitle.textContent = title;
                    songArtist.textContent = artist;
                    songArtwork.src = artwork;

                    // Play the song
                    audioPlayer.play();
                });
            });
        });
    </script>
</body>

</html>
