<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <div class="d-flex justify-between  align-items-center ">
            <h2 class="font-semibold text-xl text-gray-800 ">
                <?php echo e(__('Tours')); ?>

            </h2>
            <a class="btn btn-dark" href="index" >View Tours</a>

        </div>

     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form method="post" action="/tour-submited"  enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>


                        <!-- Description Field (Summernote) -->
                        <div class="form-group mb-3  ">

                            <label class="mb-2">Image Preview</label>

                            <!-- Image Preview Section -->
                            <div class="form-group mb-3  ">
                                <div class="border-1 border-black px-3 py-3 w-50">
                                    <div id="imagePreviewContainer">
                                        <img id="imagePreview" src="#" alt="Preview" style="display: none; width: 200px; height: auto;">
                                    </div>

                                    <!-- Cancel Button -->
                                    <button type="button" class="btn btn-warning" id="cancelButton" style="display: none;" onclick="cancelPreview()">Cancel</button>

                                    <div class="form-group mb-3">
                                        <label for="image">Upload Image</label>
                                        <input type="file" class="form-control" id="image" name="image" accept="image/*" onchange="previewImage(event)">
                                    </div>


                                </div>

                            </div>


                        </div>



                        <div class="form-group mb-3">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="Title" >
                        </div>

                        <!-- Category Field -->
                        <div class="form-group mb-3">
                            <label for="category">Category</label>
                            <select class="form-control" id="category" name="Category" >
                                <option value="0">Day Tour</option>
                                <option value="1">Multiple Tour</option>
                            </select>
                        </div>

                        <!-- Short Description Field -->
                        <div class="form-group mb-3">
                            <label for="shortdescription">Short Description</label>
                            <textarea class="form-control" id="shortdescription" name="ShortDescription" rows="3" ></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="shortdescription">Map</label>
                            <textarea class="form-control" id="shortdescription" name="Map" rows="3" ></textarea>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>

                            <textarea id="summernote" name="Description"></textarea>
                            <!-- Image Upload Field with Preview -->

                        </div>
                        <!-- Gallery: Multiple Image Upload with Preview -->
                        <div class="form-group mb-3">
                            <label for="gallery">Gallery</label>
                            <input type="file" class="form-control" id="gallery" name="gallery[]" multiple accept="image/*" onchange="previewMultipleImages(event)">
                            <div id="galleryPreviewContainer" class="mt-3"></div>
                        </div>


                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Submit</button>

                        <div class="mt-3 ">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="text-danger fst-italic"><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
        // Single Image Preview with Default
        function previewSingleImage(event) {
            var reader = new FileReader();
            var imageField = document.getElementById('singleImagePreview');
            var cancelButton = document.getElementById('singleCancelButton');

            reader.onload = function() {
                if (reader.readyState == 2) {
                    imageField.src = reader.result; // Display the uploaded image
                    cancelButton.style.display = 'inline-block'; // Show the cancel button
                }
            };

            reader.readAsDataURL(event.target.files[0]); // Read the uploaded file
        }

        // Cancel Single Image Preview
        function cancelSinglePreview() {
            document.getElementById('image').value = ''; // Clear the file input
            document.getElementById('singleImagePreview').src = 'default_image.jpg'; // Reset to default image
            document.getElementById('singleCancelButton').style.display = 'none'; // Hide the cancel button
        }

        // Multiple Image Previews
        function previewMultipleImages(event) {
            const files = event.target.files;
            const previewContainer = document.getElementById('galleryPreviewContainer');
            previewContainer.innerHTML = ''; // Clear previous previews

            if (files) {
                Array.from(files).forEach((file) => {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const img = document.createElement('img');
                        img.src = e.target.result;
                        img.style.width = '150px';
                        img.style.marginRight = '10px';
                        img.style.marginBottom = '10px';
                        previewContainer.appendChild(img);
                    };
                    reader.readAsDataURL(file); // Read each uploaded file
                });
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


 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH /home1/nadeeshb/thegoldenchoicetours.com/resources/views/tour/create.blade.php ENDPATH**/ ?>