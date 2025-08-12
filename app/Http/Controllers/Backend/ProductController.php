<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::with('category:id,category_title')->latest()->select('id', 'title', 'slug', 'price', 'selling_price', 'status', 'featured', 'featured_img', 'category_id', 'stock', 'sku')->get();
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
            // 'status' => true,
            // 'featured' => false,
            'featured_img' => $featuredImgPath ?? null,
            'gall_img' => json_encode($galleryImagesPath),
            'sku' => $request->sku,
            'price' => $request->price,
            'selling_price' => $request->selling_price,
            'short_details' => $request->short_details,
            'long_details' => $request->long_details,
            'additional_info' => $request->additional_info,
            'category_id' => $request->category,

            'status' => $request->has('status'),
            'featured' => $request->has('featured'),
            'stock' => $request->has('stock'),
        ]);
        return to_route('backend.product.index')->with('success', 'Product created successfully!');
    }
    public function statusUpdate($id)
    {
        // Logic to update the product status
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::active()->get();
        return view('backend.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            // The unique rule must ignore the current product's ID
            'title' => 'required|unique:products,title,' . $product->id,
            'price' => 'required|numeric',
            'selling_price' => 'nullable|numeric',
            'sku' => 'nullable|string|max:100',
            'featured_img' => 'nullable|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'gall_img.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'category' => 'required|exists:categories,id',
        ]);

        // === Featured Image Handling ===
        $featuredImgPath = $product->featured_img;
        if ($request->hasFile('featured_img')) {
            // 1. Delete the old image
            Storage::disk('public')->delete($product->featured_img);
            // 2. Store the new image
            $fileName = str($request->title)->slug() . '-' . uniqid() . '.' . $request->featured_img->extension();
            $featuredImgPath = $request->featured_img->storeAs('products', $fileName, 'public');
        }

        // === Gallery Images Handling ===
        $galleryImagesPath = json_decode($product->gall_img, true) ?? [];
        if ($request->hasFile('gall_img')) {
            // 1. Delete all old gallery images from storage
            foreach ($galleryImagesPath as $oldPath) {
                Storage::disk('public')->delete($oldPath);
            }

            // 2. Upload the new gallery images
            $galleryImagesPath = []; // Reset the array
            foreach ($request->file('gall_img') as $imageFile) {
                $fileName = str($request->title)->slug() . '-' . uniqid() . '.' . $imageFile->extension();
                $newPath = $imageFile->storeAs('products', $fileName, 'public');
                $galleryImagesPath[] = $newPath; // Add the new path to the array
            }
        }

        // === Update the Product Record ===
        $product->update([
            'title' => $request->title,
            'slug' => str($request->title)->slug(),
            'featured_img' => $featuredImgPath,
            'gall_img' => json_encode($galleryImagesPath),
            'sku' => $request->sku,
            'price' => $request->price,
            'selling_price' => $request->selling_price,
            'short_details' => $request->short_details,
            'long_details' => $request->long_details,
            'additional_info' => $request->additional_info,
            'category_id' => $request->category,
            'status' => $request->has('status'),
            'featured' => $request->has('featured'),
            'stock' => $request->has('stock'),
        ]);

        return to_route('backend.product.index')->with('msg', [
            'type' => 'success',
            'res' => 'Product updated successfully!'
        ]);
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return back()->with('success', 'Product deleted successfully!');
    }
    public function toggleStatus($id)
    {
        $product = Product::findOrFail($id);
        $product->status = !$product->status;
        $product->save();
        return back()->with('msg', [
            'type' => 'success',
            'res' => 'Status updated successfully!'
        ]);
    }

    public function toggleFeatured($id)
    {
        $product = Product::findOrFail($id);
        $product->featured = !$product->featured;
        $product->save();
        return back()->with('msg', [
            'type' => 'success',
            'res' => 'Featured status updated successfully!'
        ]);
    }

    public function toggleStock($id)
    {
        $product = Product::findOrFail($id);
        $product->stock = !$product->stock;
        $product->save();
        return back()->with('msg', [
            'type' => 'success',
            'res' => 'Stock status updated successfully!'
        ]);
    }
}
