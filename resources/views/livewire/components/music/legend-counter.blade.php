<div id="description">

    <h1> {{ $music->title }} </h1>

    <div class="legend-count">
        <h2> <a href="/music/queryglobal?artist={{$music->artist}}" wire:navigate>{{ $music->artist }}</a>  </h2>
    </div>
    <div class="genere">
        Género: <span class="relce">{{ucfirst($music->category)}}</span>  
    </div>

    <div class="down-play">

        <button wire:click="download" wire:loading.attr="disabled" @click="download= true" class="btn-download">
            <span wire:loading.remove>
                @if (!$count == 0)
                    {{ $count }}
                @endif
                @if (!$count == 0)
                    Downloads
                @else
                    Download
                @endif

            </span>
            {{-- Load do careegamento --}}
            <div wire:loading class="loader"></div>
            <span wire:loading>Processando</span>
        </button>
        {{--
        <button class="btn-play">
            <span class="material-symbols-outlined">play_arrow</span>
        </button> --}}

    </div>

    <p>Publicado há {{ $music->created_at->diffForHumans() }} </p>
    <x-app.download-poup :link="$music" />
</div>
