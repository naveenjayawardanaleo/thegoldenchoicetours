<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VehicleController extends Controller
{
    //
    //
    public function index(){
        $data = vehicle::orderBy('created_at', 'desc')->paginate(10);
        return view('vehicle.index', ['data' => $data]);
    }
    public function create(){
        return view('vehicle.create');
    }
    public function submited(request $request){
        $request->validate([
            'Title' => ['required', 'min:3'],
//            'Category' => ['required'],
            'Description' => ['required'],

            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'], // Validate image

        ]);
        // Store the image if uploaded
        // if ($request->hasFile('image')) {
        //     $imagePath = $request->file('image')->store('uploads', 'public'); // Store in 'storage/app/public/uploads'
        // }

if ($request->hasFile('image')) {
    $image = $request->file('image');
    $imageName = time() . '.' . $image->getClientOriginalExtension();
    
    // Move the file to public/storage/uploads folder
    $image->move(public_path('storage/uploads'), $imageName);

    // The path where the image is stored
    $imagePath = 'uploads/' . $imageName;
}



        Vehicle::create([
            'Title' => request('Title'),
//            'Category' => request('Category'),
            'Description' => request('Description'),

            'image_path' => $imagePath ?? null,
        ]);
        return redirect('/vehicle/index')->with('success', 'vehicle submitted successfully.');
    }
    public function edit($id){
        $vehicle = vehicle::find($id);
        return view('vehicle.edit', ['vehicle' => $vehicle]);

    }
    public function update(Request $request, $id){
        $request->validate([
            'Title' => ['required', 'min:3'],
//            'Category' => ['required'],
            'Description' => ['required', 'min:3'],
//            'Description' => ['required', 'min:3'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],

        ]);
        $vehicle = vehicle::findOrFail($id);

        $vehicle->update([
            'Title' => request('Title'),
//            'Category' => request('Category'),
            'Description' => request('Description'),
//            'Description' => request('Description'),
        ]);
        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete the old image from storage if needed
            if ($vehicle->image_path) {
                Storage::delete($vehicle->image_path);
            }
            // Store the new image
            $vehicle->image_path = $request->file('image')->store('images', 'public'); // Adjust 'images' as necessary
        }

        $vehicle->save();

        return redirect('/vehicle/'. $vehicle->id . '/edit');
    }
    public function destroy(request $request, $id){
        $vehicle = vehicle::findOrFail($id);

        $vehicle->delete();
        return redirect('/vehicle/index')->with('success', 'vehicle deleted successfully.');
    }
}
