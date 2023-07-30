const { simplyCountdown } = require("./simplyCountdown");

const audioPlayer = document.getElementById('audioPlayer');
const playPauseButton = document.getElementById('playPauseButton');

playPauseButton.addEventListener('click', () => {
  if (audioPlayer.paused) {
    audioPlayer.play();
    playPauseButton.innerHTML = '&#10074;&#10074;'; // Tampilkan ikon jeda
  } else {
    audioPlayer.pause();
    playPauseButton.innerHTML = '&#9658;'; // Tampilkan ikon play
  }
});


simplyCountdown('.countdown', {});