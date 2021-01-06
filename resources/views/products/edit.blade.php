@extends('layouts.app')
@section('content')
 <div class="panel panel-default">
 <div class="panel-heading"> Modify product information</div>
 <div class="panel-body">
<!---exista inregistrari in tabelul task --->
 @if (count($errors) > 0)
 <div class="alert alert-danger">
 <strong>Eroare:</strong>
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
 @endif
<!--populez campurile formularului cu datele aferente din tabela task -->
 {!! Form::model($product, ['method' => 'PATCH','route' => ['products.update', $product->id]]) !!}
 <div class="form-group">
 <label for="name">Name</label>
 <input type="text" name="name" class="form-control" value="{{$product->name }}">
 </div>
 <div class="form-group">
 <label for="code">Code</label>
 <input type="text" name="code" class="form-control" value="{{$product->code }}">
 </div>
 <div class="form-group">
 <label for="image">Image</label>
 <input type="text" name="image" class="form-control" value="{{$product->image }}">
 </div>
 <div class="form-group">
 <label for="price">Price</label>
 <input type="text" name="price" class="form-control" value="{{$product->price }}">
 </div>
 <div class="form-group">
 <label for="description">Description</label>
 <textarea name="description" class="form-control" rows="3">{{ $product->description
}}</textarea>
 </div>
 <div class="form-group">
 <input type="submit" value="Salvare Modificari" class="btn btn-info">
 <a href="{{route('products.index') }}" class="btn btn-default">Cancel</a>
 </div>
 {!! Form::close() !!}
 </div>
 </div>
@endsection
<!---populam campurile pe baza routelor
prin task update cand da click pe modificare se transmite id-ul in controller care va insera in baza de date datele
la modificare metoda e PATCH ca se suprapun 2 metode din controller--->