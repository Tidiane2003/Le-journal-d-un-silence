// Toggle thème sombre/clair
const toggleThemeBtn = document.getElementById("toggle-theme");
const body = document.body;

if (toggleThemeBtn) {
  toggleThemeBtn.addEventListener("click", () => {
    body.classList.toggle("light-theme");
  });
}

// Musique de fond
const music = document.getElementById("background-music");
const toggleMusicBtn = document.getElementById("toggle-music");
let isPlaying = false;

if (toggleMusicBtn) {
  toggleMusicBtn.addEventListener("click", () => {
    if (!isPlaying) {
      music.play();
      toggleMusicBtn.textContent = "⏸️ Pause musique";
    } else {
      music.pause();
      toggleMusicBtn.textContent = "🎵 Musique";
    }
    isPlaying = !isPlaying;
  });
}
