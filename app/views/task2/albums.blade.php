<ul>
    @foreach($albums as $album)
    
        <li><p><a href="{{URL::to('album/'.$album->AlbumId)}}">{{$album->Title}} </a> </p></li>
        
    @endforeach
</ul>
