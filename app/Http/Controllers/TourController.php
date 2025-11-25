<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tours;
use Illuminate\Support\Facades\Storage;


class TourController extends Controller
{
    //
    public function index(){
        $tours = Tours::orderBy('created_at', 'desc')->paginate(10);
        return view('tour.index', ['tours' => $tours]);
    }
    public function create(){
        return view('tour.create');
    }
    public function submited(Request $request)
    {
        $galleryPaths = [];


        $request->validate([
            'Title' => ['required', 'min:3'],
            'Category' => ['required'],
            'ShortDescription' => ['required'],
            'Description' => ['required'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'gallery' => 'required|array', // Ensure gallery is required
            'gallery.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        // Store the main image if uploaded
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads', 'public');
        }


        // Storing gallery images
        // Handle multiple image uploads for the gallery, saving to public/uploads
        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $file) {
                // Store each gallery image using the same path as the main image
                $galleryPath = $file->store('uploads', 'public'); // Save in 'storage/app/public/uploads'
                $galleryPaths[] = $galleryPath; // Store the path for each image

            }
        }
//        dd($imagePath, $galleryPaths);
        $galleryData = !empty($galleryPaths) ? json_encode($galleryPaths) : json_encode([]); // Default to empty array

//dd($galleryData);
//        dd($galleryData);
        // Save tour data with gallery paths (if any)
        Tours::create([
            'Title' => request('Title'),
            'Category' => request('Category'),
            'ShortDescription' => request('ShortDescription'),
            'Map' => request('Map'),

            'Description' => request('Description'),
            'image_path' => $imagePath ?? null,
            'gallery' => $galleryData // Save gallery as JSON
        ]);

        return redirect('/tour/index')->with('success', 'Tour submitted successfully.');
    }



    public function edit($id){
        $tour = Tours::find($id);
        return view('tour.edit', ['tour' => $tour]);

    }

    public function show($id){
        $tour = Tours::find($id);
        return view('tour-detail', ['tour' => $tour]);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'Title' => ['required', 'min:3'],
            'Category' => ['required'],
            'ShortDescription' => ['required', 'min:3'],
            'Description' => ['required', 'min:3'],
            'Map' => ['min:3'],

            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'gallery.*' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'] // Validate gallery images
        ]);

        $tour = Tours::findOrFail($id);

        // Update tour basic fields
        $tour->update([
            'Title' => request('Title'),
            'Category' => request('Category'),
            'map' => request('Map'),
            'ShortDescription' => request('ShortDescription'),
            'Description' => request('Description'),
        ]);
        // dd($tour);
        // Handle main image upload
        if ($request->hasFile('image')) {
            // Delete the old image from storage if it exists
            if ($tour->image_path) {
                Storage::delete('public/' . $tour->image_path);
            }
            // Store the new image
            $tour->image_path = $request->file('image')->store('uploads', 'public');
        }

        // Handle gallery image upload
        $galleryPaths = json_decode($tour->gallery, true) ?? []; // Decode existing gallery or initialize array

        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $file) {

                $galleryPath = $file->store('uploads', 'public'); // Save in 'storage/app/public/uploads'
                $galleryPaths[] = $galleryPath; // Store the path for each image
            }
        }

        // Update the gallery field with new images
        $tour->gallery = json_encode($galleryPaths);
        $tour->save();

        return redirect('/tour/' . $tour->id . '/edit')->with('success', 'Tour updated successfully.');
    }
    public function removeImage(Request $request)
    {
        $tour = Tours::findOrFail($request->tour_id);
        $gallery = json_decode($tour->gallery, true);

        if (($key = array_search($request->image, $gallery)) !== false) {
            // Remove the image from the gallery array
            unset($gallery[$key]);

            // Update the gallery field in the database
            $tour->gallery = json_encode(array_values($gallery));
            $tour->save();

            // Delete the image from the filesystem
            $imagePath = storage_path('app/public/' . $request->image);
            if (file_exists($imagePath)) {
                unlink($imagePath); // Delete the image file
            }

            return response()->json(['success' => true, 'message' => 'Image removed successfully']);
        }

        return response()->json(['success' => false, 'message' => 'Image not found']);
    }

    public function destroy(request $request, $id){
        $tour = Tours::findOrFail($id);

        $tour->delete();
        return redirect('/tour/index')->with('success', 'Tour deleted successfully.');
    }
    public function day(request $request, $id){

    }

}
