<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Review;
use App\Models\Product;
use App\Models\Category;
use App\Models\Facility;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function index()
    {
        $banners = Banner::where('status', true)->latest()->get();
        $facilities = Facility::where('status', true)->take(4)->get();
        $products = Product::with('category')->where('status', true)->latest()->get();
        return view('frontend.index', compact('banners', 'facilities', 'products'));
    }
    function about()
    {
        return view('frontend.about');
    }
    function shop()
    {
        $products = Product::with('category')->where('status', true)->latest()->paginate(12);
        return view('frontend.shop', compact('products'));
    }
    function contact()
    {
        return view('frontend.contact');
    }
    function showProduct($slug)
    {
        $product = Product::with('reviews.user:id,name,email')->where('slug', $slug)->first();
        $hasReview = Review::where('user_id', auth()->user()->id ?? null)->where('product_id', $product->id)->exists();
        $relatedProducts = Product::where('status', 1)->where('category_id', $product->category_id)->whereNot('id', $product->id)->latest()->take(8)->get();
        return view('frontend.product', compact('product', 'relatedProducts', 'hasReview'));
    }
    function categoryArchive($slug = null)
    {
        if ($slug) {
            $category = Category::where('slug', $slug)->first();
            $products = Product::where('status', 1)->whereHas('category', function ($query) use ($slug) {
                $query->where('slug', $slug);
            })->latest()->paginate(12);
        } else {
            $category = null;
            $products = Product::where('status', true)->latest()->paginate(12);
        }
        return view('frontend.shop', compact('products', 'category'));
    }
    function reviewSubmit(Request $request)
    {
        $request->validate([
            'rating' => 'required|between:1,5',
            'message' => 'nullable|max:1000',
        ]);
        Review::create([
            'product_id' => $request->product_id,
            'user_id' => auth()->user()->id,
            'rating' => $request->rating,
            'message' => $request->message,
        ]);
        return redirect()->back()->with('success', 'Review submitted successfully!');
    }
}
