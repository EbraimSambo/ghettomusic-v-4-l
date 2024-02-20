@props(['sound'])
<div id="container-player">
    <div class="player">
    @persist('player')
        <audio id="myAudio" controls>
            <source src="{{ asset('storage/' . $sound->audio_path) }}" type="audio/mpeg">
            Seu navegador não suporta o elemento de áudio.
        </audio>
        @endpersist
        <div class="controls">

            <div class="init">
                <button id="playBtn">
                    <i class="bi bi-play-circle-fill"></i>
                </button>
                <button id="pauseBtn">
                    <i class="bi bi-pause-circle-fill"></i>
                </button>
            </div>

            <div class="time">
                <span id="currentTime">0:00</span>
                <input type="range" id="timeRange" min="0" max="100" value="0">
                <span id="duration"></span>
            </div>

            <div class="volume">
                <input type="range" id="volumeRange" min="0" max="1" step="0.01" value="1">
            </div>
        </div>
    </div>
