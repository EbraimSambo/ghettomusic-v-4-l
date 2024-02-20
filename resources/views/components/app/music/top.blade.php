@props(['datas'])
<div class="tops">
    @foreach ($datas as $data)
        <div class="content"> 
                <div class="div-1">
                    <div class="cover">
                    <a href="{{route('music.show', $data->slug)}}" wire:navigate>
                        <img src="{{asset('storage/'.$data->cover_path)}}" alt="ffoto">
                    </a>
                    </div>  

                    <div class="desc">
                        <h2>{{$data->title}}</h2>
                        <h3>{{$data->artist}}</h3>              
                    </div> 
                </div>   

                <div class="div-2">
                    <span class="counter-time">2:45</span>  
                    <button class="bx bx-play"></button>
                </div>   
            </div>
        @endforeach
           
</div>