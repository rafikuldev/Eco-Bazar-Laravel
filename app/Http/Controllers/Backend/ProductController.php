<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{

    public function index()
    {
        // Logic to display products
        $products = Product::with('category:id,category_title')->active()->latest()->select('id', 'title','slug', 'price', 'selling_price', 'status','featured','featured_img', 'category_id','stock')->get();
        return view('backend.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::active()->get();
        return view('backend.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:products,title',
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
            'gall_img.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'category' => 'required|exists:categories,id',
        ]);

        // Featured Img
        $fileName = str($request->title)->slug() . '-' . uniqid() . '.' . $request->featured_img->extension();
        $featuredImgPath = $request->featured_img->storeAs('products', $fileName, 'public');

        // Gallery Images
        $galleryImagesPath = [];
        if (count($request->gall_img ?? []) > 0) {
            foreach ($request->gall_img as $gallImg) {
                $fileName = str($request->title)->slug() . '-' . uniqid() . '.' . $gallImg->extension();
                $gallImgPaths = $gallImg->storeAs('products', $fileName, 'public');
                $galleryImagesPath[] = $gallImgPaths;
            }
        }

        Product::create([
            'title' => $request->title,
            'slug' => str($request->title)->slug(),
            'status' => true,
            'featured' => false,
            'featured_img' => $featuredImgPath ?? null,
            'gall_img' => json_encode($galleryImagesPath),
            'sku' => $request->sku,
            'price' => $request->price,
            'selling_price' => $request->selling_price,
            'short_details' => $request->short_details,
            'long_details' => $request->long_details,
            'additional_info' => $request->additional_info,
            'category_id' => $request->category,
        ]);
        return to_route('backend.product.index')->with('success', 'Product created successfully!');
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
