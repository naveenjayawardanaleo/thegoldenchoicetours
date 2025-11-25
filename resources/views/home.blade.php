<x-front-layout>
    <x-slot:heading>
        <section>
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">

                    @foreach($slider as $index => $sli)


                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                            <img src="{{ asset('storage/' .$sli->image_path) }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>{{$sli->Title}}</h3>
                                <p class="fs-5 ">{{$sli->ShortDescription}}</p>
                            </div>
                        </div>


                    @endforeach


                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
    </x-slot:heading>


    <section class="section">
        <div class="container">
            <div class="row d-flex align-items-center">
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


                    <a href="about" class="outline-btn bg-white text-decoration-none" >Read More</a>



                </div>
            </div>
        </div>
    </section>

    <section class="tours-section py-5 bg-theme">
        <div class="container">
{{--            <h2 class="text-center mb-4">Our Tours</h2>--}}
            <h1 class="title  text-center text-white ">Our Tours</h1>
            <p class=" text-center mb-4 text-white ">The Golden Choice Tours offers everything for an unforgettable Sri Lankan adventure.
                <br> Relax, explore, and let us handle the rest.</p>
            <div class="row">
                <div class="col-md-12">
                    <div class=" owl-carousel owl-theme tour-owl-carousel">

                    @foreach ($tours as $tour)
                        <div class="item">
                        <div class="card h-100 shadow-sm ">
                            <img src="{{ asset('storage/' . $tour->image_path) }}" alt="{{ $tour->Title }}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">{{ $tour->Title }}</h5>
                                <p class="card-text mb-2">
                                    <strong> @if($tour['Category']==0)
                                            Day Tour

                                        @elseif($tour['Category']==1)
                                            Multi Day
                                        @endif</strong>
                                </p>
                                <p class="card-text">{{ Str::limit($tour->ShortDescription, 180) }}</p>

                                <a href="/tour/{{ $tour->id }}" class="outline-btn bg-white text-decoration-none">Read More</a>


                            </div>
{{--                            <div class="card-footer bg-white">--}}
{{--                            </div>--}}
                        </div>
                        </div>
                    @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Contact Us Section -->
    <section class="contact-us py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <h2>Contact Us</h2>
                    <p>Feel free to reach out to us using the form below. We’d love to hear from you!</p>

                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control form-control-lg" id="name"
                                   placeholder="Your Name">
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control form-control-lg" id="email" placeholder="Your Email">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="tel" class="form-control form-control-lg" id="phone" placeholder="Your Phone">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control form-control-lg" id="subject"
                                   placeholder="Subject">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control form-control " id="message" rows="4" placeholder="Your Message"></textarea>
                        </div>
                        <button type="submit" class="outline-btn bg-white text-decoration-none">Send Message</button>
                    </form>
                </div>

                <div class="col-lg-6">
                    <h2>Our Location</h2>
                    <!-- You can embed a Google map here -->
                    <div class="map mb-4" data-aos="fade-up">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.190551615786!2d79.88920587499706!3d6.986821693014124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2f7254e9eff69%3A0x12064896c89884e9!2sThe%20Golden%20Choice%20Tours!5e0!3m2!1sen!2slk!4v1727102519181!5m2!1sen!2slk"
                            width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"    "></iframe>
                    </div>

                    <h2>Contact Info</h2>
                    <ul class="list-unstyled">
                        <li><strong>Address:</strong> 118/12/A, Old Negombo Rd,
                            Wattala, Sri Lanka.</li>

                        <li><strong>Phone:</strong> +94 077 466 6301</li>
                        <li><strong>Email:</strong> thegoldenchoicetours@gmail.com</li>

                    </ul>
                </div>
            </div>
        </div>
    </section>





</x-front-layout>
