<x-front-layout>
    <x-slot:heading>

        <section class="section breadcrumb-head">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

        </section>

    </x-slot:heading>


    <section class="section">
        <div class="container">
            <div class="row ">
                <div class="col-md-6 ">
                    <div class="row ">
                        <div class="col-6"  data-aos="fade-down">
                            <img src="{{ asset('images/about1.jpg') }}" class="w-100 h-auto " alt="">

                        </div>
                        <div class="col-6" data-aos="fade-up">
                            <img src="{{ asset('images/about2.jpg') }}" class="w-100 h-auto  pt-5" alt="">

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h5 class="support-title">Welcome to</h5>
                    <h1 class="title">The Golden Choice Tours</h1>

                    <p>The Golden Choice Tours is your gateway to exploring the beauty and culture of Sri Lanka. Based
                        in Wattala, our company is dedicated to offering a range of personalized travel experiences,
                        including luxurious transport options, tailor-made holiday packages, and unforgettable round
                        tours. Whether you're looking for a peaceful getaway, an adventurous safari, or a cultural
                        immersion, our team ensures that your journey is comfortable, hassle-free, and truly memorable.
                    </p>
                    <p>
                        Our services don't stop at transport and tour packages – we also assist with hotel bookings and
                        train tickets, making us a one-stop solution for all your travel needs. At The Golden Choice
                        Tours, we pride ourselves on providing top-notch customer service, ensuring that every detail of
                        your trip is taken care of.
                    </p>
                    <p>

                        With a passion for creating exceptional travel experiences and years of expertise, we are
                        committed to making your time in Sri Lanka unforgettable.

                    </p>


                    <button type="submit" class="outline-btn bg-white">Read More</button>



                </div>
            </div>
        </div>
    </section>

    <x-section>
        <div class="col-md-4">
            <div class="title">Vision</div>
            <p>To be the leading provider of personalized travel experiences in Sri Lanka, where every journey inspires unforgettable memories and fosters a deep appreciation for the island's rich culture and natural beauty.

            </p>
        </div>
        <div class="col-md-8 mt-5">
            <div class="title">Mission</div>
            <p>Our mission at Golden Choice Tours is to deliver exceptional travel experiences tailored to the unique preferences of our clients. We aim to provide luxurious transport, comprehensive holiday packages, and seamless service from start to finish, ensuring that every traveler feels valued and cared for. Through our dedication to quality, reliability, and customer satisfaction, we strive to make every journey in Sri Lanka a remarkable adventure.

            </p>
        </div>

    </x-section>

    <x-section>
        <div class="col-md-4"  data-aos="flip-right">
            <img src="{{asset('images/the-golden-choice-tours-founder.jpg')}}" class="w-100 " alt="">

        </div>
        <div class="col-md-8">
            <div class="title">Founder Message</div>
            <p>
                At The Golden Choice Tours, my vision has always been to offer travelers an experience that goes beyond
                the ordinary, allowing them to truly connect with the beauty, culture, and warmth of Sri Lanka. This
                island holds a special place in my heart, and it is my passion to share its wonders with visitors from
                around the globe. <br>

                From the ancient temples to the serene beaches and vibrant wildlife, Sri Lanka offers countless
                treasures waiting to be explored. Our tours are thoughtfully crafted to provide personalized, meaningful
                experiences, ensuring that every journey with us is unforgettable. We believe in creating memories that
                last a lifetime, whether it's your first trip to Sri Lanka or one of many. <br>

                I warmly invite you to discover Sri Lanka with us, where our dedicated team will ensure that your
                adventure is as enriching as it is enjoyable. <br> <br>

                The Golden Choice Tours,<br>
                M. Segar, <br>
                Founder.
            </p>
        </div>
    </x-section>
    <x-section>
        <div class="col-md-4"  data-aos="flip-right">
            <img src="{{asset('images/the golden choice tours director.png')}}" class="w-100 " alt="">

        </div>
        <div class="col-md-8">
            <div class="title">
            Director's Message</div>
            <p>
            In my position as a director, I can make sure that a wide range of professional responsibilities are met, including developing plans, programs, and policies to encourage responsible tourism, effectively manage the effects of tourism, and promote economic development through tourism.<br> <br>

                The Golden Choice Tours, <br>
                Ali Mohammed Hamdi,<br>
                Director.
            </p>
        </div>
    </x-section>


</x-front-layout>
