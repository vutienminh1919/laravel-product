<?php

namespace App\Repositories;

use App\Models\Product;

use http\QueryString;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;

class ProductRepository
{
    public function getAll()
    {
        $products = Product::all();
        return $products;
    }

    public function getById($id)
    {
        $product = Product::query()->findOrFail($id);
        return $product;
    }

    public function create(Request $request)
    {
        $data = $request->only('name','description','price');
        $product = Product::query()->create($data);
        return $product;
    }

    public function delete($id)
    {
        $product = Product::query()->findOrFail($id);
        $product->delete();
    }

    public function edit(Request $request, $id)
    {
        $product = Product::query()->findOrFail($id);
        $data = $request->only('name','description','price');
       return Product::query()->where("id","=",$id)->update($data);
    }

}
