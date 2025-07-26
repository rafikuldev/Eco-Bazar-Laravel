<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // Code to list categories
        return view('backend.category.index');
    }
    public function create()
    {
        // Code to show the create category form
        return view('backend.category.create');
    }

}
