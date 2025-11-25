<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-between  align-items-center ">
            <h2 class="font-semibold text-xl text-gray-800 ">
                Edit slider: {{$slider->Title}}
            </h2>
            <a class="btn btn-dark" href="/slider/index" >View sliders</a>

        </div>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form method="post" action="/slider/{{$slider->id}}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div class="form-group mb-3">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="Title" value="{{$slider->Title}}" >
                        </div>

                        <!-- Category Field -->
                        <div class="form-group mb-3 d-none">
                            <label for="category">Category</label>
                            <select class="form-control" id="category" name="Category" value="1"">
                                <option value="0" @if ($slider->Category == 0) selected @endif >Day slider</option>
                                <option value="1" @if ($slider->Category == 1) selected @endif >Multiple slider</option>
                            </select>
                        </div>

                        <!-- Short Description Field -->
                        <div class="form-group mb-3">
                            <label for="shortdescription">Short Description</label>
                            <textarea class="form-control" id="shortdescription"  name="ShortDescription" rows="3" >{{$slider->ShortDescription}}</textarea>
                        </div>

                        <!-- Description Field (Summernote) -->
{{--                        <div class="form-group mb-3">--}}
{{--                            <label for="description">Description</label>--}}
{{--                            <textarea id="summernote"  name="Description">{{$slider->Description}}</textarea>--}}


{{--                        </div>--}}

                        <div class="form-group mb-3">
                            <label>Current Image</label>
                            <img id="currentImage" src="{{ asset('storage/' . $slider->image_path) }}" alt="Current slider Image" width="200" style="display: block;">
                        </div>

                        <!-- New Image Upload Field -->
                        <div class="form-group mb-3">
                            <label for="image">Upload New Image (optional)</label>
                            <input type="file" class="form-control" id="image" name="image" accept="image/*" onchange="previewImage(event)">
                        </div>

                        <!-- Image Preview Section -->
                        <div class="form-group mb-3">
                            <label>New Image Preview</label>
                            <div id="imagePreviewContainer">
                                <img id="imagePreview" src="#" alt="New Image Preview" style="display: none; width: 200px; height: auto;">
                            </div>
                        </div>


                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button form="delete-form"  class="btn btn-danger">Delete</button>

                        <div class="mt-3 ">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li class="text-danger fst-italic">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function previewImage(event) {
            var reader = new FileReader();
            var currentImage = document.getElementById('currentImage');
            var imagePreview = document.getElementById('imagePreview');

            reader.onload = function() {
                if (reader.readyState == 2) {
                    // Set the preview source to the new image
                    imagePreview.src = reader.result; // Set the preview source to the new image
                    imagePreview.style.display = 'block'; // Show the new image preview
                }
            }

            // Read the uploaded file
            if (event.target.files[0]) {
                // If a file was selected, read it
                reader.readAsDataURL(event.target.files[0]);
                // Only update currentImage if a new file is selected
                currentImage.src = "{{ asset('storage/' . $slider->image_path) }}"; // Keep current image until a new one is selected
            } else {
                // If no file is selected, reset the image preview
                imagePreview.src = "";
                imagePreview.style.display = 'none';
            }
        }
    </script>

    <script>
        $('#summernote').summernote({
            placeholder: 'Hello Bootstrap 4',
            tabsize: 2,
            height: 100
        });
    </script>
    <form method="POST" action="/slider/{{$slider->id}}" id="delete-form">
        @csrf
        @method('DELETE')
    </form>

</x-app-layout>
