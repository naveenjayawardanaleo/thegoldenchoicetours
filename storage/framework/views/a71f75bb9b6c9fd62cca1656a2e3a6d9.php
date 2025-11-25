
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
                                <li class="breadcrumb-item"><a href="/">Tours</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo e($tour->Title); ?>

                                    <strong> <?php if($tour['Category']==0): ?>
                                            Day Tour

                                        <?php elseif($tour['Category']==1): ?>
                                            Multi Day
                                        <?php endif; ?></strong>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

        </section>

     <?php $__env->endSlot(); ?>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card py-3 px-5">
                        <h1><?php echo e($tour->Title); ?></h1>
                        <?php if($tour->image_path): ?>
                            <img src="<?php echo e(asset('storage/' . $tour->image_path)); ?>" alt="<?php echo e($tour->Title); ?>" class="img-fluid" style="max-width: 100%; height: auto;">
                        <?php else: ?>
                            <p>No image available for this tour.</p>
                        <?php endif; ?>

                        <div class="mt-3">

                            <?php echo $tour->Description; ?>

                            
                        </div>
                        <div class="">
                            <?php echo $tour->map; ?>

                        </div>


                        <div class="row mt-3">

                            <?php if($tour->gallery): ?>
                                <?php $__currentLoopData = json_decode($tour->gallery, true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-md-4 mb-3">
                                        <img src="<?php echo e(asset('storage/' . $image)); ?>" class="w-100" alt="">
                                    </div>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </div>
                        <p class=""><strong>Summary:</strong> <?php echo e($tour->ShortDescription); ?></p>

                    </div>






                </div>
                <div class="col-md-4">
                    <div class="card py-3 px-5">
                        <!-- Display any success message -->
                        <?php if(session('success')): ?>
                            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
                        <?php endif; ?>

                        <form action="book/$tour->id " method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control form-control-lg <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="name" name="name" value="<?php echo e(old('name')); ?>" required>
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control form-control-lg <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="email" name="email" value="<?php echo e(old('email')); ?>" required>
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="mb-3">
                                <label for="date" class="form-label">Preferred Date</label>
                                <input type="date" class="form-control form-control-lg <?php $__errorArgs = ['date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="date" name="date" value="<?php echo e(old('date')); ?>" required>
                                <?php $__errorArgs = ['date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="mb-3">
                                <label for="num_people" class="form-label">Number of People</label>
                                <input type="number" class="form-control form-control-lg <?php $__errorArgs = ['num_people'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="num_people" name="num_people" value="<?php echo e(old('num_people')); ?>" required min="1">
                                <?php $__errorArgs = ['num_people'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <button type="submit" class="outline-btn bg-white text-decoration-none">Book Now</button>
                        </form>
                    </div>
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
<?php endif; ?>
<?php /**PATH /home1/nadeeshb/thegoldenchoicetours.com/resources/views/tour-detail.blade.php ENDPATH**/ ?>