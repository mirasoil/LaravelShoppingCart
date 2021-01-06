@extends('layouts.app')
@section('content') <!--- ---->
 @if ($message = Session::get('success'))
 <div class="alert alert-success"> <!--- mesaje de succes pt insert delete ---->
 <p>{{ $message }}</p>
 </div>
 @endif
 <div class="panel panel-default">
 <div class="panel-heading">
Products
 </div>
 <div class="panel-body">
 <div class="form-group">
 <div class="pull-right">
 <a href="/products/create" class="btn btn-default">Add new product</a>
 </div>
 </div>
 <table class="table table-bordered table-stripped">
 <tr>
 <th width="20">Id</th>
 <th>Name</th>
 <th width="200">Image</th>
 <th>Code</th>
 <th>Price</th>
 <th width="400">Description</th>
 <th width="100">Action</th>
 </tr>
 @if (count($products) > 0) <!--- numara cate task-uri sunt afisate pe ecran ---->
 @foreach ($products as $key => $product)
 <tr>
 <td>{{ ++$i }}</td>
 <td><a href="{{ route('products.show',$product->id) }}" style="text-decoration: none;">{{ $product->name }}</a></td>
 <td><a href="{{ route('products.show',$product->id) }}"><img src="img/{{$product->image}}" style="width:200px; height:200px;" alt=""/></a></td>
 <td>{{ $product->code }}</td>
 <td>{{ $product->price }}</td>
 <td>{{Str::limit($product->description, 200)}}</td>
 <!---afiseaza doar primele 200 de caractere din descriere --->
 <td>
 <a class="btn btn-success" href="{{ route('products.show',$product->id) }}">See</a><br>
 <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Modify</a><br>
 {{ Form::open(['method' => 'DELETE','route' => ['products.destroy', $product->id],'style'=>'display:inline']) }}
 {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }} <!---metoda delete pe route-ul ---->
 {{ Form::close() }}
 </td>
 </tr>
 @endforeach
 @else
 <tr>
 <td colspan="4">There are no products!</td>
 </tr>
 @endif
 </table>
<!-- Introduce nr pagina -->
{{$products->render()}} <!---rendeaza ---->
 </div>
 </div>
@endsection