<div class="container">
    <h2>Menu</h2>
    <ul class="ul-sidebar">
        <li class="mobile"><a href=" {{ route('music.home')}} " wire:navigate>
            <x-app.icons.disc-2 />
            <span>Músicas</span>  
        </a></li>

        <li class="mobile"><a href=" {{ route('music.categores.categores')}} " wire:navigate>
            <x-app.icons.album-2  />
            <span>Géneros</span>  
        </a></li>

        <li><a href=" {{ route('home')}} " wire:navigate>
            <x-app.icons.album-2  />
            <span>Albums</span>  
        </a></li>

        <li><a href=" {{ route('home')}} " wire:navigate>
            <x-app.icons.mic />
            <span>Artistas</span>  
        </a></li>

        <li><a href=" {{ route('home')}} " wire:navigate>
            <x-app.icons.disc-2 />
            <span>Playlists</span>  
        </a></li>

        <li ><a href=" {{ route('music.add-music')}} " wire:navigate>
            <x-app.icons.add />
            <span>Publicar música</span>  
        </a></li>

        <li><a href=" {{ route('home')}} " wire:navigate>
            <x-app.icons.down />
            <span>Os mais baixados</span>  
        </a></li>

    </ul>
</div>
