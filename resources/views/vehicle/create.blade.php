<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-between  align-items-center ">
            <h2 class="font-semibold text-xl text-gray-800 ">
                {{ __('Vehicle') }}
            </h2>
            <a class="btn btn-dark" href="index" >View Vehicle</a>

        </div>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form method="post" action="/submited"  enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="Title" >
                        </div>

                        <!-- Category Field -->
{{--                        <div class="form-group mb-3 d-none">--}}
{{--                            <label for="category">Category</label>--}}
{{--                            <select class="form-control" id="category" name="Category" >--}}
{{--                                <option value="0">Day Tour</option>--}}
{{--                                <option value="1">Multiple Tour</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}

                        <!-- Short Description Field -->
                        <div class="form-group mb-3">
                            <label for="Description">Description</label>
                            <textarea class="form-control" id="shortdescription" name="Description" rows="3" ></textarea>
                        </div>

                        <!-- Description Field (Summernote) -->
                        <div class="form-group mb-3">
{{--                            <label for="description">Description</label>--}}
                            {{--                            <textarea class="" id="summernote" name="Description"></textarea>--}}

{{--                            <textarea id="summernote" name="Description"></textarea>--}}
                            <!-- Image Upload Field with Preview -->
                            <div class="form-group mb-3">
                                <label for="image">Upload Image</label>
                                <input type="file" class="form-control" id="image" name="image" accept="image/*" onchange="previewImage(event)">
                            </div>

                            <!-- Image Preview Section -->
                            <div class="form-group mb-3">
                                <label>Image Preview</label>
                                <div id="imagePreviewContainer">
                                    <img id="imagePreview" src="#" alt="Preview" style="display: none; width: 200px; height: auto;">
                                </div>
                            </div>
                            <!-- Cancel Button -->
                            <button type="button" class="btn btn-warning" id="cancelButton" style="display: none;" onclick="cancelPreview()">Cancel</button>



                        </div>
                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Submit</button>

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
    <!-- JavaScript to handle the image preview and cancel action -->
    <!-- JavaScript to handle the image preview and cancel action -->
    <script>
        function previewImage(event) {
            var reader = new FileReader();
            var imageField = document.getElementById('imagePreview');
            var cancelButton = document.getElementById('cancelButton');

            reader.onload = function(){
                if (reader.readyState == 2) {
                    imageField.src = reader.result;
                    imageField.style.display = 'block';  // Show the image
                    cancelButton.style.display = 'inline-block';  // Show the cancel button
                }
            }

            reader.readAsDataURL(event.target.files[0]); // Read the uploaded file
        }

        function cancelPreview() {
            // Clear the file input and hide the image preview and cancel button
            document.getElementById('image').value = '';
            document.getElementById('imagePreview').style.display = 'none';
            document.getElementById('imagePreview').src = '#';
            document.getElementById('cancelButton').style.display = 'none';  // Hide the cancel button
        }
    </script>

    <script>
        $('#summernote').summernote({
            placeholder: 'Hello Bootstrap 4',
            tabsize: 2,
            height: 100
        });
    </script>


</x-app-layout>
