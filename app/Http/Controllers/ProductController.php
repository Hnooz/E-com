<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Product $products)
    {
      $products = Product::all();
      return view('products.index', compact('products'));
    }


    public function create()
    {
        return view('products.create');
    }


    public function store()
    {
            $attributes = $this->validateProduct();

            $product =  Product::create($attributes);

            return redirect('/products');
    }


    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }


    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }


    public function update(Product $product)
    {
       $product->update($this->validateProduct());

       return redirect('/products');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect('/products');
    }

    protected function validateProduct()
    {
            return request()->validate([
            'name' => ['required', 'min:3'],
            'description' => ['required', 'min:10'],
            'price' => ['required', 'min:1'],
            'country_made' => ['required', 'min:3'],
            'status' => ['required']
        ]);
      }
}
