const audio = document.getElementById('myAudio');
const playBtn = document.getElementById('playBtn');
const pauseBtn = document.getElementById('pauseBtn');
const volumeRange = document.getElementById('volumeRange');
const timeRange = document.getElementById('timeRange');
const currentTime = document.getElementById('currentTime');
const duration = document.getElementById('duration');


// Carregue a música
audio.addEventListener('loadedmetadata', () => {
    duration.textContent = formatTime(audio.duration);
});

// Atualize o tempo atual
audio.addEventListener('timeupdate', () => {
    currentTime.textContent = formatTime(audio.currentTime);
    timeRange.value = (audio.currentTime / audio.duration) * 100;
});

// Controle de volume
volumeRange.addEventListener('input', () => {
    audio.volume = volumeRange.value;
});

// Controle de reprodução
playBtn.addEventListener('click', () => {
    audio.play();
    playBtn.style.display = 'none'
    pauseBtn.style.display = 'block'
});

pauseBtn.addEventListener('click', () => {
    audio.pause();
    playBtn.style.display = 'block'
    pauseBtn.style.display = 'none'
});

// Controle de duração
timeRange.addEventListener('input', () => {
    const seekTime = (timeRange.value / 100) * audio.duration;
    audio.currentTime = seekTime;
});

// Formate o tempo (ex: 2:30)
function formatTime(seconds) {
    const minutes = Math.floor(seconds / 60);
    const remainingSeconds = Math.floor(seconds % 60);
    return `${minutes}:${remainingSeconds < 10 ? '0' : ''}${remainingSeconds}`;
}
