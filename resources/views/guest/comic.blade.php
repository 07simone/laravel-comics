@extends('layouts.base')

@section('content')

<div class="CardMenuBotton">
    
    <div class="Fumetto">
        <a href="#">
        <div class="imgFumetto">
            <img src="{{$fumetto['thumb']}}" alt="">
        </div>
    </a>
    </div>
    
</div>
<div class="jumbotron-bottom">
    <div class="container">
        <div class="row mt-5">
            <div class="col-9">
                    <h5>{{$fumetto['title']}}</h5>
                    <div class="price">
                        <div class="prezzo">
                            <p>U.S. PRICE: <span>{{$fumetto['price']}}</span></p>
                        </div>
                        <div class="wrap">
                            <div class="span">
                                <span>AVAILABLE</span>
                            </div>
                            <div class="option">
                                <h5>Check Availability &darr;</h5>
                            </div>
                        </div>
                    
                    
                    </div>
                    <p>{{$fumetto['description']}}</p>
                    
                </a>
            </div>
            <div class="col-3 mr-5">
                    <img src="{{$fumetto['thumb']}}" alt="">
                </a>
                
            </div>
        </div>
    </div>
</div>

<div class="thumbnails">
    <div class="container justify-content-center">
        <div class="row">
            <div class="col-7">
                <h2>Talent:</h2>
                <hr>
                <div class="author">
                <h5>Art by: </h5>
                    @foreach ($fumetto['artists'] as $item)
                    {{$item}}
                    @endforeach
                </div>
                
                <div class="author">
                    <h5>Written by:</h5>
                    @foreach ($fumetto['writers'] as $item)
                    {{$item}}
                    @endforeach
                </div>
                
                
            </div>
            <div class="col-5">
                <h2>Specs</h2>
                <hr>
                <div class="info">
                    <h5>Series: <span class="series">{{$fumetto['series']}}</span></h5>
                    <h5>U.S.Price: {{$fumetto['price']}}</h5>
                    <h5>U.S.Price: {{$fumetto['sale_date']}}</h5>
                </div>
                
            </div>
        </div>
    </div>
    
    
    
    </div>
</div>




@endsection