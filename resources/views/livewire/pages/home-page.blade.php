<div class="page-container">

    @if (!count($tops) == 0 and !is_null($tops) and !empty($tops))
        <section id="new-musics">
            <h2 class="heading">Os mais baixados</h2>
            <x-app.music.music-container :musics="$tops" />
        </section>
    @endif

    @if (!count($recomended) == 0 and !is_null($recomended) and !empty($recomended))
        <section id="new-musics">
            <h2 class="heading"> Recomendações para si</h2>
            <x-app.music.music-container :musics="$recomended" />
        </section>
    @endif

    @if (!count($new) == 0 and !is_null($new) and !empty($new))
        <section id="new-musics">
            <h2 class="heading"> Ultimos Lançamentos </h2>
            <x-app.music.music-container :musics="$new" />
        </section>
    @endif
    
    <section id="categores">
        <h1 class="heading">Categoriass </h1>
        <x-app.music.categores-container />
    </section>


</div>
