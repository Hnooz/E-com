@extends('main')

@section('content')

<div>
    <h1>{{$product->name}}</h1>
</div>
<form method="post" action="/products/{{ $product->id }}">

@method('DELETE')
@csrf

  <div class="control">
    <button type="submit" class="button">Delete Project</button>
  </div>

</form>
@endsection
