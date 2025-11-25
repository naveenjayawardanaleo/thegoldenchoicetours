<?php if (isset($component)) { $__componentOriginal61141943053f09b1aa6378714ef2c661 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal61141943053f09b1aa6378714ef2c661 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.front-layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('front-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

     <?php $__env->slot('heading', null, []); ?> 



        <section class="section breadcrumb-head">

            <div class="container">

                <div class="row">

                    <div class="col-md-12">

                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">

                            <ol class="breadcrumb">

                                <li class="breadcrumb-item"><a href="/">Home</a></li>

                                <li class="breadcrumb-item active" aria-current="page">Gallery</li>

                            </ol>

                        </nav>

                    </div>

                </div>

            </div>



        </section>



     <?php $__env->endSlot(); ?>





    <!-- Contact Us Section -->

    <section class="contact-us py-5">

        <div class="container">

            <div class="row">

                <div class="col-md-12 text-center ">

                    <h2>Our Gallery</h2>

                    <p>Explore stunning snapshots of our tours, showcasing breathtaking <br> destinations and unforgettable moments from The Golden Choice Tours!

                    </p>

                </div>

            </div>

            <div class="row">



                



     
          

            <?php if($gallery->img_path): ?>
                <?php $__currentLoopData = json_decode($gallery->img_path, true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4 mb-3">
                        <img src="<?php echo e(asset($image)); ?>" class="w-100" alt="">
                    </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>

     










            </div>

        </div>

    </section>



 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal61141943053f09b1aa6378714ef2c661)): ?>
<?php $attributes = $__attributesOriginal61141943053f09b1aa6378714ef2c661; ?>
<?php unset($__attributesOriginal61141943053f09b1aa6378714ef2c661); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal61141943053f09b1aa6378714ef2c661)): ?>
<?php $component = $__componentOriginal61141943053f09b1aa6378714ef2c661; ?>
<?php unset($__componentOriginal61141943053f09b1aa6378714ef2c661); ?>
<?php endif; ?>

<?php /**PATH /home1/nadeeshb/thegoldenchoicetours.com/resources/views/gallery.blade.php ENDPATH**/ ?>