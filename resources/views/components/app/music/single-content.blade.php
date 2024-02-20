@props(['music'])
<div id="container-single">
    <div id="content">
        <x-app.music.cover-single :cover="$music" />
        <livewire:components.music.legend-counter :music="$music" />
    </div>
</div>    