@extends('layouts.base')

@section('content')

<div class="CardMenuBotton">
    
    <div class="wrapper-img">
        <a href="#">
        <img src="{{$fumetto['thumb']}}" alt="">
        
    </a>
    </div>
    
</div>

<div class="container">
    <div class="row p-5">
        <div class="col-6">
                <h5>{{$fumetto['title']}}</h5>
                <div class="price">
                    <p>U.S. PRICE: <span>{{$fumetto['price']}}</span></p>
                </div>
                <p>{{$fumetto['description']}}</p>
                
            </a>
        </div>
        <div class="col-6 mr-5">
            
                <img src="{{$fumetto['thumb']}}" alt="">
            </a>
            
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-6">
            <h2>Talent</h2>
            <hr>
            <h5>Art by: </h5>
            @foreach ($fumetto['artists'] as $item)
            {{$item}}
            <hr>
            @endforeach
            <h5>Written by</h5>
            @foreach ($fumetto['writers'] as $item)
            {{$item}}
            <hr>
            @endforeach
            
        </div>
        <div class="col-6">
            <h2>Specs</h2>
            <hr>
            <div class="info">
                <h5>Series: {{$fumetto['series']}}</h5>
                <h5>U.S.Price: {{$fumetto['price']}}</h5>
                <h5>U.S.Price: {{$fumetto['sale_date']}}</h5>
            </div>
            
        </div>
    </div>
</div>



</div>



@endsection