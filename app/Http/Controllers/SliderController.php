<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\Storage;


class SliderController extends Controller
{
    //
    public function index(){
        $data = Slider::orderBy('created_at', 'desc')->paginate(10);
        return view('slider.index', ['data' => $data]);
    }
    public function create(){
        return view('slider.create');
    }
    public function submited(request $request){
        $request->validate([
            'Title' => ['required', 'min:3'],
            'Category' => ['required'],
            'ShortDescription' => ['required'],

            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'], // Validate image

        ]);
        // Store the image if uploaded
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads', 'public'); // Store in 'storage/app/public/uploads'
        }

        Slider::create([
            'Title' => request('Title'),
            'Category' => request('Category'),
            'ShortDescription' => request('ShortDescription'),

            'image_path' => $imagePath ?? null,
        ]);
        return redirect('/slider/index')->with('success', 'Slider submitted successfully.');
    }
    public function edit($id){
        $slider = slider::find($id);
        return view('slider.edit', ['slider' => $slider]);

    }
    public function update(Request $request, $id){
        $request->validate([
            'Title' => ['required', 'min:3'],
            'Category' => ['required'],
            'ShortDescription' => ['required', 'min:3'],
//            'Description' => ['required', 'min:3'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],

        ]);
        $slider = slider::findOrFail($id);

        $slider->update([
            'Title' => request('Title'),
            'Category' => request('Category'),
            'ShortDescription' => request('ShortDescription'),
//            'Description' => request('Description'),
        ]);
        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete the old image from storage if needed
            if ($slider->image_path) {
                Storage::delete($slider->image_path);
            }
            // Store the new image
            $slider->image_path = $request->file('image')->store('images', 'public'); // Adjust 'images' as necessary
        }

        $slider->save();

        return redirect('/slider/'. $slider->id . '/edit');
    }
    public function destroy(request $request, $id){
        $slider = slider::findOrFail($id);

        $slider->delete();
        return redirect('/slider/index')->with('success', 'slider deleted successfully.');
    }

}
