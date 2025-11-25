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
            </h2>
            

        </div>

     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form method="post" action="/gallery/1" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PATCH'); ?>







                        <!-- Gallery Images Preview & Upload -->
                        <div class="form-group mb-3">
                            <label for="gallery">Gallery</label>
                            <input type="file" class="form-control" id="gallery" name="gallery[]" multiple accept="image/*" onchange="previewGalleryImages(event)">

                            <!-- Existing Gallery Images Preview -->
                            <div id="existingGalleryPreview" class="mt-3">
                                <?php if($gallery->img_path): ?>
                                    <?php $__currentLoopData = json_decode($gallery->img_path, true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div style="display: inline-block; position: relative; margin-right: 10px;" id="image-container-<?php echo e($loop->index); ?>">
                                            <img src="<?php echo e(asset($image)); ?>" alt="Gallery Image" style="width: 150px; height: auto;">
                                            <button type="button" class="btn btn-danger btn-sm" style="position: absolute; top: 0; right: 0;" onclick="removeImage('<?php echo e($image); ?>', <?php echo e($loop->index); ?>)">X</button>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>

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
                    url: '<?php echo e(route("gallery.removeImage", ["id" => $gallery->id])); ?>',
                    method: 'POST',
                    data: {
                        _token: '<?php echo e(csrf_token()); ?>',
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

    <form method="POST" action="/gallery/<?php echo e($gallery->id); ?>" id="delete-form">
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
<?php /**PATH /home1/nadeeshb/thegoldenchoicetours.com/resources/views/gallery/edit.blade.php ENDPATH**/ ?>