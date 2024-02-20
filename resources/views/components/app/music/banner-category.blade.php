@props(['categoryPage'])
<section class="banner">
    @foreach (\App\Enums\CategoresType::cases() as $category)
        @if ($category->value === $categoryPage)
        <div class="container">
            <h1>O melhor da música {{ucfirst($category->value)}}</h1>
        </div>
            <img src="{{ asset('assets/'. $category->typeIndex()['banner']) }}" alt="{{ $category->typeIndex()['title'] }}">
        @endif
    @endforeach
</section>