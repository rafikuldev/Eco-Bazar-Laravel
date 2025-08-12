<?php

namespace App\Http\Controllers;

use App\Models\Banner;
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
        $product = Product::where('slug', $slug)->first();
        $relatedProducts = Product::where('status', 1)->where('category_id', $product->category_id)->whereNot('id', $product->id)->latest()->take(8)->get();
        return view('frontend.product', compact('product', 'relatedProducts'));
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
}
