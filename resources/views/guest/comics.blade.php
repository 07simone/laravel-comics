@extends('layouts.base')

@section('content')

<div class="MenuTop content">
    <div class="container">
    @foreach ($comics as $item)
    <ul style="list-style-type: none">
        <li v-for="(element, index) in ListImg" :key=index>
        <a href="#">
            <img src="{{$item['thumb']}}" alt="{{$item['title']}}">
            <h5>{{$item['title']}}</h5>
        </a>
        </li>

    </ul>
    @endforeach
    
    </div>

</div>



@endsection