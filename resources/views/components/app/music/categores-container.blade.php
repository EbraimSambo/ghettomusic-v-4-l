<ul id="container-categores">
    @foreach (\App\Enums\CategoresType::cases() as $category)
        <li><a href=" {{ route('music.categores.category', $category->value) }}" wire:navigate>
                <img src="{{ asset('assets/' . $category->typeIndex()['cover']) }}"
                    alt="{{ $category->typeIndex()['title'] }}">
                <h3>{{ $category->typeIndex()['title'] }}</h3>
                @if ($music = App\Models\Music::all()->where('category', $category->value))
                    @if (!count($music) < 1)
                        <span class="counter-category">
                         {{ count($music) }} Músicas
                        </span>
                    @endif
                @endif
            </a></li>
    @endforeach
</ul>
