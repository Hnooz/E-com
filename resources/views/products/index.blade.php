@extends('main')

@section('content')

<div class="container">
    <div class="table-responsive">
        <table  class="main-table manage-members text-center table table-bordered">
            <tr>
                <td>#ID</td>
                <td>Name</td>
                <td>Description</td>
                <td>Price</td>
                <td>cat</td>
                <td>Control</td>
            </tr>
            @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->category->name}}</td>
                <td class="are-small">
                  <a href="/products/{{$product->id}}" class="button is-primary">Show</a>
                  <a class="button is-primary"><form method="post" action="/products/{{ $product->id }}">
                  @method('DELETE')
                  @csrf
                    <div class="control">
                      <button type="submit" class="button is-primary">Delete</button>
                    </div>
                  </form></a>
                </td>
            </tr>
            @endforeach

        </table>
    </div>
    <a href="{{route('products.create')}}" class="button is-primary"><i class="fa fa-plus"></i> New Item</a>
</div>
  @endsection
