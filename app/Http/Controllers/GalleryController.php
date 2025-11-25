<?php

namespace App\Http\Controllers;

use App\Models\Tours;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{


    public function index(){
        $gallery = Gallery::findOrFail(1);
        return view('gallery.edit', ['gallery' => $gallery]);

    }
    // Update the gallery with new images
    public function update(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);

        $request->validate([
            'gallery.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Retrieve existing images from the database
        $existingImages = $gallery->img_path ? json_decode($gallery->img_path, true) : [];

        if($request->hasFile('gallery')) {
            $newImages = [];
        
            // Loop through each uploaded file in the 'gallery' array
            foreach($request->file('gallery') as $image) {
                // Create a unique image name with the original extension
                $imageName = time() . '_' . $image->getClientOriginalName();
                
                // Move the file to public/uploads/ folder
                $image->move(public_path('uploads'), $imageName);
                
                // Store the image path relative to the public directory
                $newImages[] = 'uploads/' . $imageName;
            }
        
            // Decode the existing images JSON into an array
            $existingImages = json_decode($gallery->img_path, true) ?? [];
        
            // Merge new images with existing images
            $mergedImages = array_merge($existingImages, $newImages);
        
            // Update the 'img_path' field with the merged array of images, encoded as JSON
            $gallery->img_path = json_encode($mergedImages);
        }
        
        $gallery->save();

        return redirect()->back()->with('success', 'Gallery updated successfully.');
    }

    // Remove a specific image from the gallery
    public function removeImage(Request $request)
    {
        $gallery = Gallery::findOrFail($request->id);

        // dd($gallery->img_path);
        $images = json_decode($gallery->img_path, true);
        $updatedImages = array_filter($images, function($img) use ($request) {
            return $img !== $request->image;
        });

        // Update the gallery after image removal
        $gallery->img_path = json_encode(array_values($updatedImages));
        $gallery->save();

        // Delete the image from storage
        Storage::disk('public')->delete($request->image);

        return response()->json(['success' => true]);
    }

    // Delete the entire gallery (Optional)
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);

        // Delete associated images from storage
        if($gallery->img_path) {
            foreach(json_decode($gallery->img_path, true) as $image) {
                Storage::disk('public')->delete($image);
            }
        }

        $gallery->delete();

        return redirect()->route('tour.index')->with('success', 'Gallery deleted successfully.');
    }
}
