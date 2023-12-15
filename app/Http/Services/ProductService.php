<?php

namespace App\Http\Services;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductService
{
    protected $product;

    public function __construct()
    {
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
        return $this->product->find($id);
    }

    public function update(Request $request, $id)
    {
        $product = $this->product->find($id);

        if ($product) {
            $product->update($request->all());
            return $product;
        }

        return response()->json(['message' => 'Produto não encontrado'], 404);
    }

    public function destroy($id)
    {
        $product = Product::find($id);

        if ($product) {
            $product->delete();
            return response()->json(['message' => 'Produto excluído com sucesso']);
        }

        return response()->json(['message' => 'Produto não encontrado'], 404);
    }
}
