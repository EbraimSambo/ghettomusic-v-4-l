<ul id="nav-links">
    <li><a href="{{ route('home') }}" wire:navigate>
            {{-- <span class="material-symbols-outlined">
                home
            </span> --}}
            <x-app.icons.home />
            <span class="ajust desktop">Home</span>
        </a></li>

    <li class="desktop"><a href="{{route('music.home')}}" wire:navigate>
            {{-- <span class="material-symbols-outlined">
                play_circle
            </span> --}}
            <x-app.icons.disc />
            <span class="desktop">Músicas</span>
        </a></li>

    <li class="desktop"><a href="{{ route('music.categores.categores') }}" wire:navigate>
            {{-- <span class="material-symbols-outlined">
                lists
            </span> --}}
            <x-app.icons.album  />
            <span class="desktop">Géneros</span>
        </a></li>

    <li>
        <a href="{{ route('music.search') }}" wire:navigate>
            {{-- <span class="bi-search search-btn"></span> --}}
            <x-app.icons.search />
            <span class="mobile desktop">Pesquisar</span>
        </a>
    </li>

    <li @click="menu= !menu" id="menu-btn" class="logo-mobile">
        <x-app.icons.menu />
    </li>

</ul>
