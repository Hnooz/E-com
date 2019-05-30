@extends('main')

@section('content')

@foreach($products as $product)
 <p>{{ $product->id}}</p>
 <h1>{{$product->name}}</h1>
 <a href="/products/{{$product->id}}">edit</a>
@endforeach
  @endsection
