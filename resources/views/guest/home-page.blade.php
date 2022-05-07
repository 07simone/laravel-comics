@extends('layouts.base')

@section('content')

<div class="MenuTop content">
    
        <div class="container">
            <div class="row">
                @foreach ($comics as $index => $item)
                    <div class="col-2 mt-5">
                            <a href="{{route('guest-comic',['id' => $index])}}">
                                <img src="{{$item['thumb']}}" alt="{{$item['title']}}">
                                <h5>{{$item['title']}}</h5>
                            </a>
                    </div>
                @endforeach
            </div>
        </div>
    

</div>



@endsection