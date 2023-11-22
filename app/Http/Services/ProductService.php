<?php

namespace App\Http\Services;


use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductService
{


    protected $product;
    public function __construct() {
        $this->product = new Product();
    }
  
    public function index()
    {
        return $this->product->all();
    }

    public function store(Request $request)
    {
        return $this->product->create($request->all());
    }

    public function show($id)
    {
       $product = $this->product->find($id);
    }

  
    public function update(Request $request, $id)
    {
       $product = $this->product->find($id);
       $product->update($request->all());
       return $product;
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        return $product->delete(); 
       }
}