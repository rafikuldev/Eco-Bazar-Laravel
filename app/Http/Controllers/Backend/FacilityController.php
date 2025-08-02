<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Storage ব্যবহারের জন্য যোগ করুন

class FacilityController extends Controller
{

    public function index()
{
    // dd('Facility Controller is Running');
    // Fetch all facilities from the database
    $facilities = Facility::latest()->get();

    // Pass the $facilities variable to the view
    return view('backend.facility.index', compact('facilities'));
}

    public function create()
    {
        return view('backend.facility.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'icon' => 'required|image|mimes:png,jpg,jpeg,svg,gif|max:2048',
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
        ]);

        $path = $request->file('icon')->store('facilities', 'public');

        Facility::create([
            'icon' => $path,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
        ]);

        return to_route('backend.facility.index')->with('msg', ['type' => 'success', 'res' => 'Facility created successfully.']);
    }

    public function edit($id)
    {
        $facility = Facility::findOrFail($id);
        return view('backend.facility.edit', compact('facility'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'icon' => 'nullable|image|mimes:png,jpg,jpeg,svg,gif|max:2048',
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
        ]);

        $facility = Facility::findOrFail($id);
        $path = $facility->icon;

        if ($request->hasFile('icon')) {
            Storage::disk('public')->delete($facility->icon);
            $path = $request->file('icon')->store('facilities', 'public');
        }

        $facility->update([
            'icon' => $path,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
        ]);

        return to_route('backend.facility.index')->with('msg', ['type' => 'success', 'res' => 'Facility updated successfully.']);
    }

    public function destroy($id)
    {
        $facility = Facility::findOrFail($id);
        Storage::disk('public')->delete($facility->icon);
        $facility->delete();

        return to_route('backend.facility.index')->with('msg', ['type' => 'success', 'res' => 'Facility deleted successfully.']);
    }

    public function statusUpdate($id)
    {
        $facility = Facility::findOrFail($id);
        $facility->status = !$facility->status;
        $facility->save();

        return to_route('backend.facility.index')->with('msg', ['type' => 'success', 'res' => 'Facility status updated.']);
    }
}
