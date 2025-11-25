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

                                <li class="breadcrumb-item active" aria-current="page">Things to Do</li>

                            </ol>

                        </nav>

                    </div>

                </div>

            </div>



        </section>



     <?php $__env->endSlot(); ?>



    <?php if (isset($component)) { $__componentOriginal785c8021fd1a6e19eb80cad4b837cda0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal785c8021fd1a6e19eb80cad4b837cda0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.section','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

        <div class="col-md-6">

            <img src="<?php echo e(asset('images/Explore the Ancient Cities.jpg')); ?>" alt="">

        </div>

        <div class="col-md-6">

            <div class="title">Explore the Ancient Cities</div>



            <p>Sri Lanka's ancient cities, steeped in rich history and cultural significance, are a must-visit for any

                traveler. Anuradhapura, the first capital of the island, was established in the 4th century BC and

                features remarkable archaeological wonders. Wander through vast sacred sites filled with ancient stupas,

                including the towering Ruwanwelisaya, one of the largest in the world, and the impressive

                Jetavanaramaya, which was once the tallest brick structure on Earth. The sacred Sri Maha Bodhi tree, a

                direct descendant of the tree under which Buddha attained enlightenment, draws pilgrims from around the

                globe, creating a vibrant atmosphere of reverence.

                <br>

                In Polonnaruwa, the second capital, you can marvel at well-preserved ruins that showcase the island's

                architectural brilliance. Explore the stunning Gal Vihara, where you’ll find three magnificent Buddha

                statues carved into rock, each depicting different postures of meditation. The remnants of royal

                palaces, ancient reservoirs, and intricate stone carvings provide a captivating glimpse into the lives

                of ancient Sri Lankans, making these cities a treasure trove for history enthusiasts.



            </p>



        </div>



     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal785c8021fd1a6e19eb80cad4b837cda0)): ?>
<?php $attributes = $__attributesOriginal785c8021fd1a6e19eb80cad4b837cda0; ?>
<?php unset($__attributesOriginal785c8021fd1a6e19eb80cad4b837cda0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal785c8021fd1a6e19eb80cad4b837cda0)): ?>
<?php $component = $__componentOriginal785c8021fd1a6e19eb80cad4b837cda0; ?>
<?php unset($__componentOriginal785c8021fd1a6e19eb80cad4b837cda0); ?>
<?php endif; ?>



    <?php if (isset($component)) { $__componentOriginal785c8021fd1a6e19eb80cad4b837cda0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal785c8021fd1a6e19eb80cad4b837cda0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.section','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

        <div class="col-md-12 text-center">

            <div class="title">Embark on Wildlife Safaris</div>

            <p>Sri Lanka is a biodiversity hotspot, home to a plethora of unique wildlife. Yala National Park is a

                premier destination for wildlife safaris, famed for its high density of leopards and other incredible

                animals like elephants, crocodiles, and various bird species. As you embark on a guided safari, the

                thrill of spotting these magnificent creatures in their natural habitat is unmatched. The park's diverse

                landscapes, including open plains, dense forests, and lagoons, create a captivating backdrop for your

                adventure.

                <br>

                Wilpattu National Park, known for its unique “willus” (natural lakes), offers a different experience,

                where you might encounter elusive sloth bears, deer, and an array of birdlife. Our expert guides provide

                insights into the local ecology and conservation efforts, enriching your safari experience. These

                encounters with Sri Lanka's wildlife allow you to appreciate the importance of preserving these natural

                habitats while creating unforgettable memories.

            </p>

        </div>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal785c8021fd1a6e19eb80cad4b837cda0)): ?>
<?php $attributes = $__attributesOriginal785c8021fd1a6e19eb80cad4b837cda0; ?>
<?php unset($__attributesOriginal785c8021fd1a6e19eb80cad4b837cda0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal785c8021fd1a6e19eb80cad4b837cda0)): ?>
<?php $component = $__componentOriginal785c8021fd1a6e19eb80cad4b837cda0; ?>
<?php unset($__componentOriginal785c8021fd1a6e19eb80cad4b837cda0); ?>
<?php endif; ?>



    <?php if (isset($component)) { $__componentOriginal785c8021fd1a6e19eb80cad4b837cda0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal785c8021fd1a6e19eb80cad4b837cda0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.section','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

        <div class="col-md-6">

            <img src="<?php echo e(asset('images/Discover Stunning Beaches.jpg')); ?>" alt="">

        </div>

        <div class="col-md-6">

            <div class="title">Discover Stunning Beaches</div>

            <p>With over 1,300 kilometers of stunning coastline, Sri Lanka’s beaches cater to every preference, from

                lively to serene. Unawatuna is famed for its crescent-shaped bay and coral reefs, perfect for snorkeling

                and swimming. Here, you can bask in the sun, sip on fresh coconut water, or indulge in local seafood

                delicacies at beachside restaurants. Just a short distance away lies Mirissa, a picturesque beach that’s

                a prime spot for whale watching, particularly between November and April when blue whales and dolphins

                migrate through the waters.

                <br>

                For those seeking a more secluded escape, Tangalle offers tranquil beaches lined with palm trees, where

                you can enjoy peaceful walks or explore hidden coves. Each beach has its own unique charm; Hikkaduwa

                attracts surfers with its vibrant surf culture, while Weligama is a fantastic spot for beginners wanting

                to learn how to ride the waves. Whether you’re looking to relax, explore marine life, or catch some

                waves, Sri Lanka's beaches provide the perfect setting for a memorable getaway.

            </p>

        </div>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal785c8021fd1a6e19eb80cad4b837cda0)): ?>
<?php $attributes = $__attributesOriginal785c8021fd1a6e19eb80cad4b837cda0; ?>
<?php unset($__attributesOriginal785c8021fd1a6e19eb80cad4b837cda0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal785c8021fd1a6e19eb80cad4b837cda0)): ?>
<?php $component = $__componentOriginal785c8021fd1a6e19eb80cad4b837cda0; ?>
<?php unset($__componentOriginal785c8021fd1a6e19eb80cad4b837cda0); ?>
<?php endif; ?>





    <?php if (isset($component)) { $__componentOriginal785c8021fd1a6e19eb80cad4b837cda0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal785c8021fd1a6e19eb80cad4b837cda0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.section','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

        <div class="col-md-12 text-center">

            <div class="title">Hike Through Lush Tea Plantations</div>

            <p>The breathtaking tea plantations of Sri Lanka’s central highlands are a paradise for nature lovers and

                adventure seekers alike. In regions like Nuwara Eliya and Ella, the rolling hills are blanketed with

                vibrant green tea bushes, creating a picturesque landscape. Embark on a guided hike through the

                plantations, where you’ll learn about the history and significance of tea in Sri Lankan culture.

                Discover how the tea-picking process works and engage with local workers who share their knowledge and

                passion for tea cultivation.





                <br>

                Visit a tea factory to witness the intricate process of tea production, from plucking the leaves to the

                final packaging. Here, you can sample some of the finest Ceylon tea, renowned for its exceptional

                quality and flavor. The cool climate, stunning scenery, and fragrant tea gardens make this experience

                not only a feast for the senses but also a journey through one of Sri Lanka’s most cherished traditions.





            </p>

        </div>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal785c8021fd1a6e19eb80cad4b837cda0)): ?>
<?php $attributes = $__attributesOriginal785c8021fd1a6e19eb80cad4b837cda0; ?>
<?php unset($__attributesOriginal785c8021fd1a6e19eb80cad4b837cda0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal785c8021fd1a6e19eb80cad4b837cda0)): ?>
<?php $component = $__componentOriginal785c8021fd1a6e19eb80cad4b837cda0; ?>
<?php unset($__componentOriginal785c8021fd1a6e19eb80cad4b837cda0); ?>
<?php endif; ?>



    <?php if (isset($component)) { $__componentOriginal785c8021fd1a6e19eb80cad4b837cda0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal785c8021fd1a6e19eb80cad4b837cda0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.section','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

        <div class="col-md-6">

            <img src="<?php echo e(asset('images/Immerse Yourself in Cultural Festivals.jpg')); ?>" alt="">

        </div>

        <div class="col-md-6">

            <div class="title">Immerse Yourself in Cultural Festivals</div>

            <p>Sri Lanka's cultural festivals are vibrant celebrations filled with color, music, and dance, reflecting

                the island's rich heritage. The Kandy Esala Perahera, held annually in July or August, is a spectacular

                procession that showcases the island’s cultural diversity. With dancers adorned in traditional costumes,

                drummers creating a mesmerizing rhythm, and elaborately decorated elephants, this festival is a feast

                for the senses. As you join the locals in this grand celebration, you'll feel the energy and excitement

                that fills the streets of Kandy.

                <br>

                Other festivals, such as Vesak, which commemorates the birth, enlightenment, and death of Buddha, light

                up the island with colorful lanterns and decorations. Join in the festivities by participating in

                cultural activities, tasting traditional foods, and engaging with local communities. Experiencing these

                festivals provides a unique opportunity to understand the deep-rooted traditions and values that shape

                Sri Lankan society.

            </p>

        </div>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal785c8021fd1a6e19eb80cad4b837cda0)): ?>
<?php $attributes = $__attributesOriginal785c8021fd1a6e19eb80cad4b837cda0; ?>
<?php unset($__attributesOriginal785c8021fd1a6e19eb80cad4b837cda0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal785c8021fd1a6e19eb80cad4b837cda0)): ?>
<?php $component = $__componentOriginal785c8021fd1a6e19eb80cad4b837cda0; ?>
<?php unset($__componentOriginal785c8021fd1a6e19eb80cad4b837cda0); ?>
<?php endif; ?>



    <?php if (isset($component)) { $__componentOriginal785c8021fd1a6e19eb80cad4b837cda0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal785c8021fd1a6e19eb80cad4b837cda0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.section','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

        <div class="col-md-12 text-center">

            <div class="title">Taste Authentic Sri Lankan Cuisine</div>

            <p>

                Sri Lankan cuisine is a delightful fusion of flavors, textures, and colors, deeply influenced by its

                diverse cultural heritage. The culinary experience begins at local markets, where you can witness the

                vibrant atmosphere filled with fresh produce, aromatic spices, and tantalizing street food. Try dishes

                like kottu roti, a popular stir-fried dish made from chopped roti mixed with vegetables, eggs, and

                meats, or lamprais, a fragrant rice dish wrapped in banana leaves.

                <br>

                Participate in a cooking class where you can learn to prepare traditional curries, sambols, and sweets

                using locally sourced ingredients. Discover the secrets of Sri Lankan spices, such as cinnamon,

                cardamom, and curry leaves, which add depth and complexity to the dishes. Not only does this culinary

                adventure satisfy your taste buds, but it also deepens your appreciation for Sri Lankan culture and

                hospitality, as you engage with local chefs and share stories around the dinner table.

            </p>

        </div>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal785c8021fd1a6e19eb80cad4b837cda0)): ?>
<?php $attributes = $__attributesOriginal785c8021fd1a6e19eb80cad4b837cda0; ?>
<?php unset($__attributesOriginal785c8021fd1a6e19eb80cad4b837cda0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal785c8021fd1a6e19eb80cad4b837cda0)): ?>
<?php $component = $__componentOriginal785c8021fd1a6e19eb80cad4b837cda0; ?>
<?php unset($__componentOriginal785c8021fd1a6e19eb80cad4b837cda0); ?>
<?php endif; ?>



    <?php if (isset($component)) { $__componentOriginal785c8021fd1a6e19eb80cad4b837cda0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal785c8021fd1a6e19eb80cad4b837cda0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.section','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

        <div class="col-md-6">

            <img src="<?php echo e(asset('images/Visit Local Craft Markets.jpg')); ?>" alt="">

        </div>

        <div class="col-md-6">

            <div class="title">Visit Local Craft Markets</div>

            <p>Immerse yourself in the vibrant world of Sri Lankan craftsmanship by visiting local craft markets and

                artisan shops. From intricately handcrafted batik fabrics to stunning wood carvings, these markets are

                filled with unique treasures that reflect the island's cultural heritage. Engage with artisans who are

                passionate about their crafts and learn about the techniques that have been passed down through

                generations.

                <br>

                Supporting local artisans not only enriches your travel experience but also contributes to the

                preservation of traditional crafts and sustainable livelihoods. Discover beautiful jewelry, pottery, and

                home decor items that make perfect souvenirs or gifts, ensuring that you take a piece of Sri Lanka's

                artistry home with you.

            </p>

        </div>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal785c8021fd1a6e19eb80cad4b837cda0)): ?>
<?php $attributes = $__attributesOriginal785c8021fd1a6e19eb80cad4b837cda0; ?>
<?php unset($__attributesOriginal785c8021fd1a6e19eb80cad4b837cda0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal785c8021fd1a6e19eb80cad4b837cda0)): ?>
<?php $component = $__componentOriginal785c8021fd1a6e19eb80cad4b837cda0; ?>
<?php unset($__componentOriginal785c8021fd1a6e19eb80cad4b837cda0); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal785c8021fd1a6e19eb80cad4b837cda0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal785c8021fd1a6e19eb80cad4b837cda0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.section','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

<div class="col-md-12 text-center">

    <div class="title">Spicy Garden Sri Lanka</div>

    <p>
    Sri Lanka’s Spicy Gardens offer an immersive journey into the island’s ancient spice heritage, primarily found in the scenic regions of Matale and Kandy. These lush gardens are home to a variety of aromatic spices like cinnamon, cardamom, cloves, nutmeg, and black pepper, which have played a vital role in Sri Lanka’s history as a major spice exporter. Visitors are guided through the gardens, learning about the cultivation and processing of these spices, as well as their culinary and medicinal uses. The hands-on experience allows you to touch, smell, and taste the fresh spices, deepening your connection to the ingredients that flavor Sri Lankan cuisine.

<br>
In addition to showcasing spices, many of these gardens incorporate Ayurvedic traditions, highlighting the medicinal properties of spices like cinnamon and turmeric, which are used for health and healing in traditional medicine. Some gardens also offer live cooking demonstrations and tea tastings, where visitors can experience how these spices are integrated into daily life. The on-site shops allow you to purchase locally made products such as herbal oils and teas, making a visit to a Spicy Garden both an educational and sensory experience, deeply rooted in Sri Lanka's rich cultural and agricultural history.
















    </p>

</div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal785c8021fd1a6e19eb80cad4b837cda0)): ?>
<?php $attributes = $__attributesOriginal785c8021fd1a6e19eb80cad4b837cda0; ?>
<?php unset($__attributesOriginal785c8021fd1a6e19eb80cad4b837cda0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal785c8021fd1a6e19eb80cad4b837cda0)): ?>
<?php $component = $__componentOriginal785c8021fd1a6e19eb80cad4b837cda0; ?>
<?php unset($__componentOriginal785c8021fd1a6e19eb80cad4b837cda0); ?>
<?php endif; ?>

    <section class="section">

        <div class="container">

            <div class="row">



                <div class="col-md-12 text-center">



                    <p class="fs-5"><b>Exploring the Cultural Triangle offers a unique opportunity to delve into the history, art, and architecture of ancient Sri Lanka. As you journey through this captivating region, you’ll gain a deeper appreciation for the island’s rich heritage and the vibrant cultures that continue to thrive today.







                        </b>

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

<?php /**PATH /home1/nadeeshb/thegoldenchoicetours.com/resources/views/things-to-do.blade.php ENDPATH**/ ?>