@extends('layouts.app')
@section('content')
 <div class="panel panel-default">
 <div class="panel-heading">
 View Product
 </div>
 <div class="panel-body">
 <div class="pull-right">
 <a class="btn btn-default" href="{{ route('products.index') }}">Back</a>
 </div>
 <div class="form-group" style="margin-left: 30%;">
 <img src="{{'../img/'.$product->image}}" style="width:400px; height:400px;" alt="{{$product->name}}"/> <!--- preluam din task numele --->
 </div>
 <div class="form-group">
 <strong>Name: </strong> {{ $product->name }} <!--- preluam din task numele --->
 </div>
 <div class="form-group">
 <strong>Code: </strong> {{ $product->code }} <!--- preluam din task numele --->
 </div>
 <div class="form-group">
 <strong>Price: </strong> {{ $product->price }} <!--- preluam din task numele --->
 </div>
 <div class="form-group">
 <strong>Description: </strong> {{ $product->description }}
 </div>
 </div>
 </div>
@endsection
<!--- afiseaza datele pe ecran cum sunt in baza de date cu id-ul curent --->