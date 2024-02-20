<div class="page-container">

    @if (!count($musics) == 0 and !is_null($musics) and !empty($musics))
        <section id="new-musics">
            <h2 class="heading">Todas as Músicas</h2>
            <x-app.music.music-container :musics="$musics" />
        </section>
    @endif


    <section id="categores">
        <h1 class="heading">Géneros musicais</h1>
        <x-app.music.categores-container />
    </section>

</div>
