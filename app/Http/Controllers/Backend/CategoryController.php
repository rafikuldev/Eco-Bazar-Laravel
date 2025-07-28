<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // Code to list categories
        try {
            $categories = Category::orderBy('status','DESC')->latest()->get();
            return view('backend.category.index', compact('categories'));
        } catch (\Throwable $th) {

        }
    }
    public function create()
    {
        // Code to show the create category form
        return view('backend.category.create');
    }
    public function store( Request $request )
    {
        $request->validate([
            'category_title' => 'required',
            'slug' => 'required|unique:categories,slug',
            'icon' => 'nullable|mimes:jpeg,png,jpg,gif,svg',
        ],
        [
            'category_title.required' => 'Category title is required.',
            'slug.required' => 'Category URL is required.',
            'slug.unique' => 'This category URL already exists.',
            'icon.mimes' => 'Icon must be a file of type: jpeg, png, jpg, gif, svg.',
        ]);
        
        // Code to store the category in the database
        $path = null;
        if ($request->hasFile('icon')) {
            $name = $request->slug.'.' . $request->icon->extension();
            $path = $request->icon->storeAs('categories', $name, 'public');
        }
        Category::create([
            'category_title' => $request->category_title,
            'slug' => $request->slug,
            'icon' => $path,
        ]);
        return to_route('backend.category.index')->with('msg', [
            'type' => 'success',
            'res' => 'Category created successfully.'
        ]);
    }
    public function statusUpdate($id)
    {
        $category = Category::findOrFail($id);
        $category->status = !$category->status;
        $category->save();
        
        return to_route('backend.category.index')->with('msg', [
            'type' => 'success',
            'res' => 'Category status updated successfully.'
        ]);
    }

    // AIIII IIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII

      public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('backend.category.edit', compact('category'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_title' => 'required|string|max:255',
            'icon' => 'nullable|mimes:jpeg,png,jpg,gif,svg,webp',
        ]);

        $category = Category::findOrFail($id);
        
        $category->category_title = $request->category_title;

        if ($request->hasFile('icon')) {
            if ($category->icon && file_exists(public_path('storage/' . $category->icon))) {
                unlink(public_path('storage/' . $category->icon));
            }
            $path = $request->file('icon')->store('category_icons', 'public');
            $category->icon = $path;
        }

        $category->save();

        return redirect()->route('backend.category.index')->with('success', 'Category updated successfully.');
    }
  
} 

