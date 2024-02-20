<div class="container">
    <h2>Categorias</h2>
    <ul class="ul-sidebar">
        @foreach (\App\Enums\CategoresType::cases() as $category)
            <li><a href=" {{ route('music.categores.category', $category->value)}} " wire:navigate>
                <span @class([$category->covers(), ]) ></span>
                <span>{{ucfirst($category->value)}}</span>  
            </a></li>
        @endforeach
    </ul>
</div>