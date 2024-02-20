@props(['cover'])
<div class="cover">
    <img src="{{ asset('storage/'.$cover->cover_path) }}" alt="{{$cover->title}}">
</div>