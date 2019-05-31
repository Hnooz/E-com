@extends('main')

@section('content')


<div class="card">
  <header class="card-header">
    <p class="card-header-title">
      {{$product->name}}
    </p>
    <a href="#" class="card-header-icon" aria-label="more options">
      <span class="icon">
        <i class="fas fa-angle-down" aria-hidden="true"></i>
      </span>
    </a>
  </header>
  <div class="card-content">
    <div class="content">
       <b>{{$product->description}}</b>
     <br>
      {{$product->category->name}}
      <br>
      {{$product->price}}
    </div>
  </div>
  <footer class="card-footer">
    <a href="/products/{{$product->id}}/edit" class="card-footer-item"><button class="button is-primary">Edit</button></a>
    <a href="#" class="card-footer-item">
      <form method="post" action="/products/{{ $product->id }}">
      @method('DELETE')
      @csrf
        <div class="control">
          <button type="submit" class="button is-primary">Delete</button>
        </div>
      </form>
    </a>
  </footer>
</div>
@endsection
