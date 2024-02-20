<div class="page-container">
    <section id="single-page">
        <x-app.music.single-content :music="$music" />
    </section>

    @if (count($autor) > 1)
        <section id="similares">
            <h2 class="heading">Obras de <span class="relce">{{ $music->artist }}</span> </h2>
            <x-app.music.music-container :musics="$autor" />
        </section>
    @endif

    @if (!count($similars) == 0)
        <section id="similares">
            <h2 class="heading">Similares a <span class="relce">{{ $music->title }}</span> </h2>
            <x-app.music.music-container :musics="$similars" />
        </section>
    @endif

    @if (!count($topSimilars) == 0)
        <section id="similares">
            <h2 class="heading">
                Os mais baixados no género 
                <a href="{{ route('music.categores.category', $music->category)}}" class="relce" wire:navigate >{{ ucfirst($music->category) }}</a> 
            </h2>
            <x-app.music.music-container :musics="$topSimilars" />
        </section>    
    @else
        <x-app.music.categores-container />
    @endif

</div>
