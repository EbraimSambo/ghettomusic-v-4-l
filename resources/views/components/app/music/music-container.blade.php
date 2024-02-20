@props(['musics'])
<div id="music-container">
    @foreach ($musics as $music)
        <x-app.music.music-card :music="$music" />   
    @endforeach
</div>    