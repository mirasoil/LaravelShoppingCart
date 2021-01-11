@extends('layouts.layoutcart')
@section('title', 'Products')
@section('content')
 <div class="container products">
    <div class="row">
 @foreach($shops as $shop)
        <div class="col-xs-18 col-sm-6 col-md-3">
            <div class="thumbnail">
            <img src="img/{{$shop->image}}" style="width:200px; height:200px;">
                <div class="caption">
                <h4>{{ $shop->name }}</h4>
                <p>{{Str::limit($shop->description, 50)}}</p>
                <p><strong>Price: </strong> {{ $shop->price }}$</p>
                <p class="btn-holder"><a href="{{ url('add-to-cart/'.$shop->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                </div>
            </div>
        </div>
 @endforeach
    </div><!-- End row -->
 </div>
 <!--- Space between page and footer --->
 @for ($i = 0; $i < 4; $i++)
    <br>
@endfor
@endsection