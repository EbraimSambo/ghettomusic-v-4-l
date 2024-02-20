<div class="page-container">
    <x-app.music.banner-category :categoryPage="$categoryPage" />
    @unless (count($category)==0)
        <section id="musics">
            <h2 class="heading"> Musicas relacionadas a {{ucfirst($categoryPage)}} </h2>
            <x-app.music.music-container :musics="$category" />
        </section>

        <section id="musics">
            <h2 class="heading"> Outras Categorias</h2>
            <x-app.music.categores-container  />
        </section>   
    @else
        <section id="musics">
            <h2 class="heading"> Não há musicas criada no estilo {{ucfirst($categoryPage)}}, tente proucurar outras a baixo:</h2>
            <x-app.music.categores-container  />
        </section>     
    @endunless
    <livewire:components.tops >
</div>