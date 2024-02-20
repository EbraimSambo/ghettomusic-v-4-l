@props(['link'])
<template x-teleport="body">
    <div x-show="download" x-transition id="download-pop">
        <x-app.icons.close  :action="__('download')" :color="__('#111')" />
        <h3>O Seu Download iniciará em breve</h3>
        <P>Caso não iniciar em 4 segundos <br> <a href="{{('/storage/'.$link->audio_path)}}" download="{{$link->title. ' - ' . $link->artist  . ' - ' . 'Ghetto Music'}}" >clique aqui</a> </P>
    </div>
</template>
    
