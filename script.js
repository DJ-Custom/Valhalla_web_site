// reproductor de video de Youtube
// Lista de videos de YouTube (IDs)
const videos = [
  // "ZLSFsW0pORU", // Video 1
  // "H6a0dGM-SKY", // Video 2 
];

let currentIndex = 0; // Índice del video actual
let player;

// Carga la API de YouTube y crea el reproductor
function onYouTubeIframeAPIReady() {
  player = new YT.Player('player-container', {
      videoId: videos[currentIndex],
      events: {
          onReady: onPlayerReady
      }
  });
}

// Función cuando el reproductor está listo
function onPlayerReady(event) {
  event.target.playVideo();
}

// Cambiar al video anterior
function prevVideo() {
  if (currentIndex > 0) {
      currentIndex--;
      loadVideo(videos[currentIndex]);
  } else {
      alert("No hay videos anteriores.");
  }
}

// Cambiar al siguiente video
function nextVideo() {
  if (currentIndex < videos.length - 1) {
      currentIndex++;
      loadVideo(videos[currentIndex]);
  } else {
      alert("No hay más videos.");
  }
}

// Cargar un video por ID
function loadVideo(videoId) {
  player.loadVideoById(videoId);
}

// Asignar eventos a los botones
document.getElementById('prev-button').addEventListener('click', prevVideo);
document.getElementById('next-button').addEventListener('click', nextVideo);
