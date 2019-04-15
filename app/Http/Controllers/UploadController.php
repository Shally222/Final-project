<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadRequest;
use App\Product;
use App\ProductsPhoto;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{

    // index function
    public function index()
    {
        $products = ProductsPhoto::orderby('id', 'desc')->paginate(10);
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(UploadRequest $request)
    {
        $product = Product::create($request->all());

        foreach ($request->photos as $photo) {
            $photo->store('public/photos');
            $filename = $photo->store('');
            ProductsPhoto::create([
                'product_id' => $product->id,
                'filename' => $filename
            ]);
        }

        return redirect()->route('products.index');

    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }


    public function update(Product $product)
    {
        $product->update(request(['id', 'price', 'introduction']));

        return redirect()->route('products.index');
    }


    public function destroy($id)
    {
        $photo = ProductsPhoto::findOrFail($id);
        Storage::delete($photo->id);
        $photo->delete();

        $hasProduct = Product::find($id);
        if ($hasProduct) {
            $hasProduct->delete();
        }

        return redirect()->route('products.index');
    }

}
