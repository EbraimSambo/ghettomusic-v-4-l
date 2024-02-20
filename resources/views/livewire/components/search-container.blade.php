<section x-data id="search-container">
    <div class="container">
        <div class="top-search">
            <form>
                <input type="text" wire:model.live.throttle.500ms="query" value="{{$query}}" placeholder="Pesqusiar por musicas...">
                <button type="buttom"><x-app.icons.search /></button>
            </form>
       </div>
        <div class="bottom-search">
        @empty(!$query)
            <div class="results">
                @if ($results)
                    @if (count($results)===0)
                        <h1 class="heading">Não Econtramos nenhuma musica com o titulo <span class="relce">{{$query}}</span> </h1>
                    @else
                    <p>Pesquisa <span class="relce">{{$query}}</span>, resultados encontrados ({{count($results)}})</p>
                        <x-app.music.music-container :musics="$results" />
                    @endif
                @endif
            </div>
            @else
            <h1 class="heading text-center">Pesquise ou procure por essas categorias </h1>
            @endempty
            <x-app.music.categores-container />
       </div>
       <livewire:components.tops >
    </div>
</section>