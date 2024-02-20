<article class="card">
    <a href="{{ route('music.show', $music->slug) }}" wire:navigate>
        <picture class="cover">
            <img src="{{ asset('storage/'.$music->cover_path) }}" alt="{{ $music->title }}">
        </picture>
        <div class="legend">
            <h3>{{ Str::words($music->title, 3) }}</h3>
        </div>
        <div class="counter">
            @if (!$music->download ==0)
            <span>{{$music->download}}</span>
            <span>downloads</span>           
            @endif

        </div>
    </a>
</article>