<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        // Logic to display products
        return view('backend.products.index');
    }

    public function create()
    {
        // Logic to show product creation form
        return view('backend.products.create');
    }

    public function store(Request $request)
    {
        // Logic to store a new product
        // Validate and save the product data
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
