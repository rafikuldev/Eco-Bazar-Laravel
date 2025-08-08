<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{

    public function index()
    {
        // Logic to display products
        return view('backend.products.index');
    }

    public function create()
    {
        $categories = Category::active()->get();
        return view('backend.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|numeric',
            'selling_price' => 'nullable|numeric',
            'sku' => 'nullable|string|max:100',
            'status' => 'boolean',
            'featured' => 'boolean',
            'stock' => 'boolean',
            'short_details' => 'nullable|string',
            'long_details' => 'nullable|string',
            'additional_info' => 'nullable|string',
            'featured_img' => 'required|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'gallImg.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'category' => 'required|exists:categories,id',
        ]);

        // Featured Img
        $fileName = str($request->title)->slug() . '-' . uniqid() . '.' . $request->featured_img->extension();
        $featuredImgPath = $request->featured_img->storeAs('products', $fileName, 'public');

        // Gallery Images
        $galleryImagesPath = [];
        if (count($request->gallImg ?? []) > 0) {
            foreach ($request->gallImg as $gallImg) {
                $fileName = str($request->title)->slug() . '-' . uniqid() . '.' . $gallImg->extension();
                $gallImgPaths = $gallImg->storeAs('products', $fileName, 'public');
                $galleryImagesPath[] = $gallImgPaths;
            }
        }
        dd($galleryImagesPath);
    }
    public function statusUpdate($id)
    {
        // Logic to update the product status
    }

    public function edit($id)
    {
        // Logic to show product edit form
        // return view('backend.product.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        // Logic to update the product
    }

    public function destroy($id)
    {
        // Logic to delete the product
    }
}
