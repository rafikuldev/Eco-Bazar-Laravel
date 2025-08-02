<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Facility;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function index()
    {
        $banners = Banner::where('status', true)->latest()->get();
        $facilities = Facility::where('status', true)->take(4)->get();
        return view('frontend.index', compact('banners', 'facilities'));
    }
    function about()
    {
        return view('frontend.about');
    }
    function shop()
    {
        return view('frontend.shop');
    }
    function contact()
    {
        return view('frontend.contact');
    }
    function product()
    {
        return view('frontend.product');
    }
    function categoryArchive($slug)
    {
        // Logic to fetch category by slug and return view
        // return view('frontend.category_archive', compact('slug'));

    }
}
