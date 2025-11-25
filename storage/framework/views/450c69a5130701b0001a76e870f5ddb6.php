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
                Edit vehicle: <?php echo e($vehicle->Title); ?>

            </h2>
            <a class="btn btn-dark" href="/vehicle/index" >View vehicles</a>

        </div>

     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form method="post" action="/vehicle/<?php echo e($vehicle->id); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PATCH'); ?>

                        <div class="form-group mb-3">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="Title" value="<?php echo e($vehicle->Title); ?>" >
                        </div>

                        <!-- Category Field -->
                        <div class="form-group mb-3 d-none">
                            <label for="category">Category</label>
                            <select class="form-control" id="category" name="Category" value="1"">
                                <option value="0" <?php if($vehicle->Category == 0): ?> selected <?php endif; ?> >Day vehicle</option>
                                <option value="1" <?php if($vehicle->Category == 1): ?> selected <?php endif; ?> >Multiple vehicle</option>
                            </select>
                        </div>

                        <!-- Short Description Field -->





                        <!-- Description Field (Summernote) -->
                        <div class="form-group mb-3">
                            <label for="description">Description</label>
                            <textarea id="summernote"  name="Description"><?php echo e($vehicle->Description); ?></textarea>


                        </div>

                        <div class="form-group mb-3">
                            <label>Current Image</label>
                            <img id="currentImage" src="<?php echo e(asset('storage/' . $vehicle->image_path)); ?>" alt="Current vehicle Image" width="200" style="display: block;">
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
                currentImage.src = "<?php echo e(asset('storage/' . $vehicle->image_path)); ?>"; // Keep current image until a new one is selected
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
    <form method="POST" action="/vehicle/<?php echo e($vehicle->id); ?>" id="delete-form">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
    </form>

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
<?php /**PATH /home1/nadeeshb/thegoldenchoicetours.com/resources/views/vehicle/edit.blade.php ENDPATH**/ ?>