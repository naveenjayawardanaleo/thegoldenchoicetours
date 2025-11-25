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
                                <li class="breadcrumb-item active" aria-current="page">Services</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

        </section>

     <?php $__env->endSlot(); ?>


    <section class="section">
        <div class="container">
            <div class="row ">
                <div class="col-md-6 ">
                    <div class="row ">
                        <img src="<?php echo e(asset('images/Hotel Recommendations.jpg')); ?>" class="w-100" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <h4 class="title">Hotel Accommodation</h4>
                    <p>
                    At The Golden Choice Tours, we know how important it is to find the perfect accommodation that suits your needs. Whether you’re looking for a beachfront resort, a luxury hotel, a cozy boutique stay, or a budget-friendly guesthouse, our team will help you select the best options based on your preferences. We have partnered with some of the finest hotels in Sri Lanka, ensuring high standards of comfort, cleanliness, and exceptional service. </p>

                    <ul>
                        <li>Luxury Stays: Indulge in five-star resorts offering world-class amenities, stunning views, private pools, and fine dining. Perfect for honeymooners or those looking for an upscale getaway.</li>
                        <li>Boutique Hotels: For travelers seeking a unique, intimate experience, our handpicked boutique hotels offer charm, character, and personalized service, located in serene and scenic areas.</li>
                        <li>Budget-Friendly Options: If you prefer a more economical stay, we provide recommendations for clean, safe, and comfortable budget hotels or guesthouses, ideal for backpackers and solo travelers.</li>
                    </ul>

                    <p>We take care of the booking process, ensuring you get the best rates and availability based on your travel dates.</p>
                    
                    
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row ">
                <div class="col-md-6 ">
                    <div class="row ">
                        <img src="<?php echo e(asset('images/Transport Arrangements.jpg')); ?>" class="w-100" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <h4 class="title">Transport Arrangements</h4>
                    <p>Your comfort and convenience while exploring Sri Lanka are our top priorities. That’s why we offer a variety of transport solutions, designed to meet all your travel needs, whether you’re on a solo trip, a family vacation, or traveling with a large group. Our fleet includes modern, air-conditioned vehicles, ensuring a smooth and enjoyable ride wherever your itinerary takes you.
                    </p>

                    <ul>
                        <li>Private Cars & Vans: We offer private cars and vans with experienced, English-speaking drivers who are familiar with local roads and destinations. Enjoy a comfortable and flexible ride, with the ability to stop at scenic spots or detour for impromptu visits.
                        </li>
                        <li>Luxury Vehicles: For those who prefer to travel in style, we offer luxury transport options, such as premium sedans or SUVs, with features like leather interiors and onboard Wi-Fi.
                        </li>
                        <li>Airport Transfers: We provide convenient and punctual airport pick-up and drop-off services, ensuring that your arrival and departure are stress-free.
                        </li>
                        <li>Group Travel: If you’re traveling with a large group, we can arrange spacious vans or buses, complete with experienced drivers and a guide if needed, ensuring everyone travels comfortably.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="row ">
                <div class="col-md-6 ">
                    <div class="row ">
                        <img src="<?php echo e(asset('images/Meal Arrangements.jpg')); ?>" class="w-100" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <h4 class="title">Meal Arrangements</h4>
                    <p>Exploring Sri Lanka is not complete without indulging in its diverse and rich culinary traditions. At The Golden Choice Tours, we go beyond just planning your itinerary—we also curate your dining experiences. Whether you’re looking to taste authentic Sri Lankan cuisine or prefer international dishes, we make sure that each meal is a memorable one.
                    </p>
                    <ul>
                        <li>Local Cuisine: We arrange meals at local restaurants and food spots where you can enjoy Sri Lankan classics like kottu roti, hoppers, and fresh seafood. You can also enjoy spicy curries and tropical fruits that are unique to the island.
                        </li>
                        <li>Fine Dining: For those who prefer a more upscale experience, we have partnerships with fine dining establishments offering both local and international cuisine, served with impeccable presentation in an elegant setting.
                        </li>
                        <li>Dietary Preferences: Whether you're vegetarian, vegan, or have specific dietary restrictions, we ensure your meals are tailored to your needs. We communicate with restaurants to accommodate any food allergies or preferences.
                        </li>
                        <li>Culinary Tours: For food lovers, we can organize culinary tours, allowing you to explore local markets, watch cooking demonstrations, or even take part in a traditional cooking class, where you can learn how to prepare iconic Sri Lankan dishes.
                        </li>


                    </ul>
                    <p>With our meal arrangements, you can enjoy the best culinary experiences Sri Lanka has to offer, without the hassle of searching for the right places to eat.

</p>
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
<?php /**PATH /home1/nadeeshb/thegoldenchoicetours.com/resources/views/services.blade.php ENDPATH**/ ?>