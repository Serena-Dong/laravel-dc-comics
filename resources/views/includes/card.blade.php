<figure class="card">
    <a href="{{ Route('comics.show', $comic) }}">
        <img class="card-img" src="{{$comic['thumb']}}" alt="">
    </a>
    <h5>{{$comic['title']}}</h5>    
</figure>
                
