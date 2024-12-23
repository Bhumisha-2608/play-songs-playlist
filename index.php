<?php


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PSP Music Streaming</title>
   
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

.hero {
    background-image: url('back2.jpg');
    background-size: 100% 800px;
    background-repeat: no-repeat;
    background-position: 0% 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
    flex-direction: column;

}

.slider{
    width: 100%;
    border: 1px solid rgb(52, 19, 19);
    height: var(--height);
    background: url(gif.gif) ;
    background-size: 100% 300px;
}
.slider .list{
    display: flex;
    width: 100%;
    min-width: calc(var(--width) * var(--quantity));
    position: relative;
}

.slider .list .slide{
    width: var(--width);
    height: var(--height);
    position: absolute;
    left: 100%;
    animation: autoRun 10s linear infinite;
    transition: filter 0.5s;
    animation-delay: calc((10s/ var(--quantity) ) *(var(--position) - 1));
}
.slider .list .slide img{
    width: 100%;
}

@keyframes autoRun {
    from{
        left:100% ;
    }to{
        left: calc(var(--width) * -1);
    }
    
}
.slider:hover .slide{
    animation-play-state: paused!important;
    filter: grayscale(1);
}
.slider .slide:hover{
    filter: grayscale(0);

}

.featured-artists{
    color: #ddd;
}

.artist-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 20px;
}

.artist-card {
    background-color: #e2dddd ;
    padding: 1em;
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    color:black;
}

.artist-card img {
    width: 100%;
    height: 150px;
    object-fit: cover;
    border-radius: 10px 10px 0 0;
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

  
    <main>
        <!-- Hero Section -->
        <section class="hero">
            <img src="image.jpg" alt="image" height="300px" width="300px">
            <h1>Welcome to PSP</h1>
            <p>PLAY | SONGS | PLAYLIST</p>
            
            
   
        </section>

        <!-- Image slider Section -->
      
        <div class="slider" style="
        --width: 300px;
        --height: 300px;
        --quantity:20; ">
            <div class="list">
                <div class="slide" style="--position: 1">
                    <img src="pic1.jpg" height="300" width="250" alt="" />
                </div>
                <div class="slide" style="--position: 2">
                    <img src="pic2.jpg" height="300" width="250" alt="" />
                </div>
                <div class="slide" style="--position: 3">
                    <img src="pic3.jpg" height="300" width="250" alt="" />
                </div>
                <div class="slide" style="--position: 4">
                    <img src="pic4.jpg" height="300" width="250" alt="" />
                </div>
                <div class="slide" style="--position: 5">
                    <img src="pic5.jpg" height="300" width="250" alt="" />
                </div>
                <div class="slide" style="--position: 6">
                    <img src="pic6.jpg" height="300" width="250" alt="" />
                </div>
                <div class="slide" style="--position: 7">
                    <img src="pic7.jpg" height="300" width="250" alt="" />
                </div>
                <div class="slide" style="--position: 8">
                    <img src="pic8.jpg" height="300" width="250" alt="" />
                </div>
                <div class="slide"style="--position: 9">
                    <img src="pic10.jpg" height="300" width="250" alt="" />
                    
            </div>
        </div>
       
            </div>
      


        <!-- Featured Artists Section -->
        <section class="featured-artists">
            <h2>Featured Artists</h2>
            <div class="artist-grid">
                <div class="artist-card">
                    <img src="artist1.jpg" alt="Artist 1">
                    <a href="player1.html"><h3>Arijit singh</h3></a>
                </div>
                <div class="artist-card">
                    <img src="artist2.jpg" alt="Artist 2">
                    <a href="player2.html"><h3>Shreya Ghosal</h3></a>
                </div>
                <div class="artist-card">
                    <img src="artist3.jpg" alt="Artist 3">
                    <a href="player3.html"><h3>Udit Narayan</h3></a>
                </div>
                <div class="artist-card">
                    <img src="artist4.jpg" alt="Artist 4">
                    <a href="player4.html"><h3>Kishor Kumar</h3></a>
                </div>
                <div class="artist-card">
                    <img src="artist5.jpg" alt="Artist 5">
                    <a href="player5.html"><h3>Raftaar</h3></a>
                </div>

                <div class="artist-card">
                    <img src="artist6.jpg" alt="Artist 6">
                   <a href="player6.html"><h3>Darshan Raval</h3></a>
                </div>
            </div>

           

            </section>
    </main>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 PSP Music Streaming</p>
    </footer>

    <script src="script.js"></script>
</body>

</html>

