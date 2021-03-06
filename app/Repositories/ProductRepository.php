<?php

namespace App\Repositories;

use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent;

class ProductRepository extends BaseRepository
{
//    protected $model;
    public function __construct(Product $product)
    {
        parent::__construct($product);
    }

//    public function getAll()
//    {
//        $products = Product::all()->toQuery()->paginate(2);
//        return $products;
//    }
//
//    public function getById($id)
//    {
//        $product = Product::findOrFail($id);
//        return $product;
//    }

    public function create(Request $request)
    {
        $data = $request->only('name', 'description', 'price', 'image');
        $image = $request->file('file');
        $data['image'] = time().'.'.$image->getClientOriginalExtension();
        $path = public_path('img');
        $image->move($path,$data['image']);
        $product = Product::create($data);
        return $product;
    }

//    public function delete($id)
//    {
//        $product = Product::findOrFail($id);
//        $product->delete();
//    }

    public function edit(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $data = $request->only('name', 'description', 'price');
        return Product::where("id", "=", $id)->update($data);
    }

}
