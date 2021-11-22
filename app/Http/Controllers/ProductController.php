<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        $products = $this->productRepository->getAll();
        return view('product.list', compact("products"));
    }


    public function showFormCreate()
    {
        return view("product.create");
    }


    public function store(Request $request)
    {
        $product = $this->productRepository->create($request);
        return redirect()->route('products.index');
    }


    public function show($id)
    {
        $product = $this->productRepository->getById($id);
        return view('product.detail', compact("product"));

    }


    public function showFormEdit($id)
    {
        $product = $this->productRepository->getById($id);
        return view("product.edit", compact("product"));

    }


    public function update(Request $request,$id)
    {
        $this->productRepository->edit($request, $id);
        return redirect()->route("products.index");
    }


    public function destroy($id)
    {
        $this->productRepository->delete($id);
        return redirect()->route("products.index");
    }
}
