<ul>
    @foreach($artists as $artist)
        <li><p><a href="{{URL::to('artist/'.$artist->ArtistId)}}">{{$artist->Name}} </a> </p></li>
    @endforeach
</ul>
