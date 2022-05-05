@extends('layouts.base')

@section('content')

<div class="MenuTop content">
    <div class="container">
    
    @foreach ($comics as $index => $item)
        
            <div class="wrapper-img">
                <a href="{{route('guest-comic',['id' => $index])}}">
                <img src="{{$item['thumb']}}" alt="{{$item['title']}}">
                <h5>{{$item['title']}}</h5>
            </a>
            </div>
            
        
    @endforeach
    
    </div>

</div>



@endsection