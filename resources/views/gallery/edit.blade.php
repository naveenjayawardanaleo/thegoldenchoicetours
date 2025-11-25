<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-between  align-items-center ">
            <h2 class="font-semibold text-xl text-gray-800 ">
            </h2>
            {{-- <a class="btn btn-dark" href="/gallery/ed" >View Tours</a>--}}

        </div>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form method="post" action="/gallery/1" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')







                        <!-- Gallery Images Preview & Upload -->
                        <div class="form-group mb-3">
                            <label for="gallery">Gallery</label>
                            <input type="file" class="form-control" id="gallery" name="gallery[]" multiple accept="image/*" onchange="previewGalleryImages(event)">

                            <!-- Existing Gallery Images Preview -->
                            <div id="existingGalleryPreview" class="mt-3">
                                @if($gallery->img_path)
                                    @foreach(json_decode($gallery->img_path, true) as $image)
                                        <div style="display: inline-block; position: relative; margin-right: 10px;" id="image-container-{{ $loop->index }}">
                                            <img src="{{ asset($image) }}" alt="Gallery Image" style="width: 150px; height: auto;">
                                            <button type="button" class="btn btn-danger btn-sm" style="position: absolute; top: 0; right: 0;" onclick="removeImage('{{ $image }}', {{ $loop->index }})">X</button>
                                        </div>
                                    @endforeach
                                @endif

                            </div>

                            <!-- New Gallery Images Preview -->
                            <div id="galleryPreviewContainer" class="mt-3"></div>

                            <!-- Reset button for new gallery images -->
                            <button type="button" class="btn btn-warning mt-3" onclick="resetGalleryPreview()">Reset New Images</button>
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
        function previewGalleryImages(event) {
            var files = event.target.files;
            var previewContainer = document.getElementById('galleryPreviewContainer');
            previewContainer.innerHTML = ''; // Clear previous previews

            Array.from(files).forEach((file, index) => {
                var reader = new FileReader();
                reader.onload = function(e) {
                    var img = document.createElement('img');
                    img.src = e.target.result;
                    img.style.width = '150px';
                    img.style.marginRight = '10px';
                    img.id = 'new-image-container-' + index; // Assign id to each new image container
                    previewContainer.appendChild(img);
                };
                reader.readAsDataURL(file);
            });
        }

        function removeImage(image, index) {
            if (confirm('Are you sure you want to remove this image?')) {
                $.ajax({
                    url: '{{ route("gallery.removeImage", ["id" => $gallery->id]) }}',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        image: image
                    },
                    success: function(response) {
                        if (response.success) {
                            // Remove the image container div if removal is successful
                            document.getElementById('image-container-' + index).remove();
                        } else {
                            alert('Failed to remove image');
                        }
                    },
                    error: function() {
                        alert('Error occurred while removing image');
                    }
                });
            }
        }

        // Function to reset the preview container for new images
        function resetGalleryPreview() {
            var previewContainer = document.getElementById('galleryPreviewContainer');
            previewContainer.innerHTML = ''; // Clear new image previews
            document.getElementById('gallery').value = ''; // Clear the file input
        }
    </script>

    <form method="POST" action="/gallery/{{$gallery->id}}" id="delete-form">
        @csrf
        @method('DELETE')
    </form>

</x-app-layout>
