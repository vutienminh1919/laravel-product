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
        return view('backend.product.list', compact("products"))->with('i', (request()->input('page', 1) - 1) * 4);;
    }


    public function showFormCreate()
    {
        return view("backend.product.create");
    }


    public function store(Request $request)
    {
        $product = $this->productRepository->create($request);
        return redirect()->route('products.index');
    }


    public function show($id)
    {
        $product = $this->productRepository->getById($id);
        return view('backend.product.detail', compact("product"));

    }


    public function showFormEdit($id)
    {
        $product = $this->productRepository->getById($id);
        return view("backend.product.edit", compact("product"));

    }


    public function update(Request $request,$id)
    {
        $this->productRepository->edit($request, $id);
        return redirect()->route("products.index");
    }


    public function destroy($id)
    {
        $this->productRepository->delete($id);
        return redirect()->route("products.index")->with('success','Product deleted');
    }
}
