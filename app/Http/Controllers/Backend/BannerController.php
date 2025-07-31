<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\Storage; // Storage ব্যবহারের জন্য এটি যোগ করুন

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Banner::latest()->get();
        // return view('frontend.index', compact('banners'));
        return view('backend.banner.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'sub_heading' => 'required|string|max:255',
            'heading' => 'required|string|max:255',
            'details' => 'required|string',
            'button_name' => 'required|string|max:50',
            'button_link' => 'required|url',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // ছবি আপলোড এবং পাথ সেভ করা
        $path = $request->file('image')->store('banners', 'public');

        // ডেটাবেসে ব্যানার তৈরি করা
        Banner::create([
            'sub_heading' => $request->sub_heading,
            'heading' => $request->heading,
            'details' => $request->details,
            'button_name' => $request->button_name,
            'button_link' => $request->button_link,
            'image' => $path,
        ]);

        return to_route('backend.banner.index')->with('msg', [
            'type' => 'success',
            'res' => 'Banner created successfully.'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $banner = Banner::findOrFail($id);
        return view('backend.banner.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'sub_heading' => 'required|string|max:255',
            'heading' => 'required|string|max:255',
            'details' => 'required|string',
            'button_name' => 'required|string|max:50',
            'button_link' => 'required|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Image can be optional on update
        ]);

        $banner = Banner::findOrFail($id);
        $path = $banner->image;

        if ($request->hasFile('image')) {
            // নতুন ছবি আপলোড হলে পুরনোটি ডিলিট করা
            Storage::disk('public')->delete($banner->image);
            $path = $request->file('image')->store('banners', 'public');
        }

        $banner->update([
            'sub_heading' => $request->sub_heading,
            'heading' => $request->heading,
            'details' => $request->details,
            'button_name' => $request->button_name,
            'button_link' => $request->button_link,
            'image' => $path,
        ]);

        return to_route('backend.banner.index')->with('msg', [
            'type' => 'success',
            'res' => 'Banner updated successfully.'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);

        // স্টোরেজ থেকে ছবিটি ডিলিট করা
        Storage::disk('public')->delete($banner->image);

        // ডেটাবেস থেকে ব্যানারটি ডিলিট করা
        $banner->delete();

        return to_route('backend.banner.index')->with('msg', [
            'type' => 'success',
            'res' => 'Banner deleted successfully.'
        ]);
    }

    /**
     * Update the status of a banner.
     */
    public function statusUpdate($id)
    {
        $banner = Banner::findOrFail($id);
        $banner->status = !$banner->status;
        $banner->save();

        return to_route('backend.banner.index')->with('msg', [
            'type' => 'success',
            'res' => 'Banner status updated successfully.'
        ]);
    }
}
