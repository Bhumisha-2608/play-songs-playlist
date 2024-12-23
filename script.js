// JavaScript Code for Music Player and Slider

// Song Data
const songs = [
    { title: "Song 1", artist: "Arijit Singh", artwork: "song1.jpg" },
    { title: "Song 2", artist: "Shreya Ghoshal", artwork: "song2.jpg" },
    { title: "Song 3", artist: "Udit Narayan", artwork: "song3.jpg" },
    { title: "Song 4", artist: "Kishore Kumar", artwork: "song4.jpg" },
    { title: "Song 5", artist: "Raftaar", artwork: "song5.jpg" },
];

let currentSongIndex = 0;
let isPlaying = false;

// DOM Elements
const playPauseBtn = document.getElementById("play-pause-btn");
const songTitle = document.getElementById("current-song-title");
const artistName = document.getElementById("current-artist");
const songArtwork = document.getElementById("song-artwork");

// Functions for Music Player
function updatePlayer() {
    const song = songs[currentSongIndex];
    songTitle.textContent = song.title;
    artistName.textContent = song.artist;
    songArtwork.src = song.artwork;
}

function togglePlayPause() {
    isPlaying = !isPlaying;
    playPauseBtn.textContent = isPlaying ? "Pause" : "Play";
    // Add logic for actual audio playback if needed
    if (isPlaying) {
        console.log(`Playing: ${songs[currentSongIndex].title}`);
    } else {
        console.log("Paused");
    }
}

function nextSong() {
    currentSongIndex = (currentSongIndex + 1) % songs.length;
    updatePlayer();
    console.log(`Next: ${songs[currentSongIndex].title}`);
}

function prevSong() {
    currentSongIndex =
        (currentSongIndex - 1 + songs.length) % songs.length;
    updatePlayer();
    console.log(`Previous: ${songs[currentSongIndex].title}`);
}

// Initialize Player
updatePlayer();

// Slider Auto-Rotate
const slides = document.querySelectorAll(".slider .slide");
let slideIndex = 0;

function autoRotateSlides() {
    slides.forEach((slide, index) => {
        slide.style.left = `${100 * (index - slideIndex)}%`;
    });
    slideIndex = (slideIndex + 1) % slides.length;
}

setInterval(autoRotateSlides, 5000);

// Pause Slider on Hover
const slider = document.querySelector(".slider");
slider.addEventListener("mouseenter", () => {
    clearInterval(autoRotateSlides);
});

slider.addEventListener("mouseleave", () => {
    setInterval(autoRotateSlides, 5000);
});

// Add Hover Effects for Slider Images
slides.forEach(slide => {
    slide.addEventListener("mouseover", () => {
        slide.style.filter = "grayscale(0)";
    });
    slide.addEventListener("mouseout", () => {
        slide.style.filter = "grayscale(1)";
    });
});
