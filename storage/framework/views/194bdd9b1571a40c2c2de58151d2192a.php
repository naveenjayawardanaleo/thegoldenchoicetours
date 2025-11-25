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
                                <li class="breadcrumb-item active" aria-current="page">Day Tours</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
     <?php $__env->endSlot(); ?>

    <section class="section ">
        <div class="container">
            
            <h1 class="title  text-center  ">Day Tours</h1>
            <p class=" text-center mb-4  ">The Golden Choice Tours offers everything for an unforgettable Sri Lankan adventure.
                <br> Relax, explore, and let us handle the rest.
            </p>
            <div class="row">

                <?php $__currentLoopData = $daytour; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4">

                    <div class="card h-100 shadow-sm ">
                        <img src="<?php echo e(asset('storage/' . $tour->image_path)); ?>" alt="<?php echo e($tour->Title); ?>" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title fw-bold"><?php echo e($tour->Title); ?></h5>
                            <p class="card-text mb-2">

                            <p class="card-text"><?php echo e(Str::limit($tour->ShortDescription, 180)); ?></p>

                            <a href="/tour/<?php echo e($tour->id); ?>" class="outline-btn bg-white text-decoration-none">Read More</a>


                        </div>
                        
                        
                    </div>
                </div>


                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

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
<?php endif; ?><?php /**PATH /home1/nadeeshb/thegoldenchoicetours.com/resources/views/day-tours.blade.php ENDPATH**/ ?>