<section id="tops">
    <h2 class="heading">Os mais famosos</h2>
    <div id="music-container">
        @foreach ($tops as $top)
            <x-app.music.music-card :music="$top" />   
        @endforeach
    </div>    
</section>