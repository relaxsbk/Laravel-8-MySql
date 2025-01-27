<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\StoreProductRequest;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::query()->available()->paginate(8);

        return view('Products', compact('products'));
    }


    public function store(StoreProductRequest $request)
    {
        $validated = $request->validated();
        $product = Product::query()->create($validated);

        $product->images()->create([
            'path' => 'https://placehold.co/600x400',
            'position' => 0,
        ]);

        return redirect()->route('products.show', ['product' => $product->id])->with('success', 'Продукт создан успешно');
    }


    public function show(Product $product)
    {
        $product = $product->load('mainImage');


        return view('Product', compact('product'));
    }


    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->update($request->validated());

        return redirect()->back()->with(['success' => 'Успешное обновление продукта']);
    }


    public function destroy($id)
    {
        $product = Product::query()->findOrFail($id);

        $product->delete();

        return redirect()->route('products.index')->with(['success' => 'Успешное удаление']);
    }
}
