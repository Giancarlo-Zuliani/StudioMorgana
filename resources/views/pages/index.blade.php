@extends ('layouts.index-layout')

@section('content')
    @foreach($vid as $v)
         <div @click="openplayer({{ $v -> id }})" class="box">{{$v -> img}}</div>
         @endforeach
            <div @click="tooglevideobox()" id="videobox" class="videobox embed-responsive embed-responsive-16by9">
                <iframe src="https://player.vimeo.com/video/510363377" class="embed-responsive-item" allowfullscreen></iframe> 
                <i class="fas fa-times"></i>
            </div>
@endsection