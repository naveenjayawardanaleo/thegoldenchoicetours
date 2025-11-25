<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0,  maximum-scale=1.0, minimum-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Title Tag -->
    <title>The Golden Choice Tours | Transport & Custom Tours in Sri Lanka</title>

    <!-- Meta Description -->
    <meta name="description"
        content="Discover Sri Lanka with The Golden Choice Tours! Offering personalized tours, luxurious transport, hotel bookings, and complete travel solutions. Explore the beauty, culture, and adventure of Sri Lanka with us.">

    <!-- Keywords -->
    <meta name="keywords"
        content="Sri Lanka tours, Golden Choice Tours, travel Sri Lanka, luxury transport Sri Lanka, round tours Sri Lanka, holiday packages Sri Lanka, safari Sri Lanka, cultural tours Sri Lanka, Wattala tours, Sri Lanka travel solutions, hotel booking Sri Lanka, train tickets Sri Lanka">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="The Golden Choice Tours | Luxurious Transport & Custom Tours in Sri Lanka">
    <meta property="og:description"
        content="Explore Sri Lanka with personalized travel services from The Golden Choice Tours. We offer luxury transport, tailor-made holiday packages, hotel bookings, and complete travel solutions.">
    <meta property="og:image" content="{{ asset('favi/favicon-32x32.png') }}">
    <meta property="og:url" content="https://thegoldenchoicetours.com/">
    <meta property="og:type" content="website">
    <meta name="robots" content="index, follow">

    <!-- Twitter -->
    <meta name="twitter:card" content="{{ asset('favi/favicon-32x32.png') }}">
    <meta name="twitter:title" content="The Golden Choice Tours | Luxurious Transport & Custom Tours in Sri Lanka">
    <meta name="twitter:description"
        content="Explore Sri Lanka with personalized travel services from The Golden Choice Tours. We offer luxury transport, tailor-made holiday packages, hotel bookings, and complete travel solutions.">
    <meta name="twitter:image" content="{{ asset('favi/favicon-32x32.png') }}">

    <!-- Author -->
    <meta name="author" content="The Golden Choice Tours">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favi/apple-touch-icon.png') }}">

    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favi/favicon-32x32.png') }}">

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favi/favicon-16x16.png') }}">

    <link rel="manifest" href="{{ asset('favi/site.webmanifest') }}">

    <link rel="shortcut icon" href="{{ asset('favi/favicon.ico') }}">

    <meta name="msapplication-TileColor" content="#da532c')">

    <meta name="msapplication-config" content="{{ asset('favi/browserconfig.xml') }}">

    <meta name="theme-color" content="#ffffff">

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Gowun+Batang:wght@400;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

</head>
<body>





    <div class="topbar py-2 ">

        <div class="container">

            <div class="row top-bar ">

                <div class="col-md-7">

                    <div class="text-white fs-6 ">Welcome to The Golden Choice Tours</div>

                </div>

                <div class="col-md-2">
                    <div class="text-white fs-6"><a href="tel:+94774666301"
                            class="text-white text-decoration-none fs-6"><i class="fa fa-phone"></i> +94 077 466
                            6301</a></div>
                </div>
                <div class="col-md-3">
                    <div class="text-white fs-6"><i class="fa fa-envelope "></i> thegoldenchoicetours@gmail.com</div>


                </div>

            </div>

        </div>



    </div>

    <!-- Header Section -->

    <nav class="navbar navbar-expand-lg bg-light header-nav">

        <div class="container">

            <!-- Logo on the left -->

            <a class="navbar-brand" href="/">

                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="d-inline-block align-text-top logo">

            </a>



            <!-- Button for mobile view -->

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button>



            <!-- Navbar items on the right -->

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">

                <ul class="navbar-nav">



                    <x-front-nav-link href="/" :active="request()->is('/')">Home</x-front-nav-link>







                    <li class="nav-item dropdown">

                        <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">About us</a>

                        <ul class="dropdown-menu">

                            <li><a href="/about" class="dropdown-item">About Us</a></li>

                            <li><a href="/about-sri-lanka" class="dropdown-item">About Sri Lanka</a></li>

                        </ul>

                    </li>



                    <li class="nav-item dropdown">

                        <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Tours</a>

                        <ul class="dropdown-menu">

                            <li><a href="/day-tours" class="dropdown-item">Day Tours</a></li>

                            <li><a href="/multiday-tours" class="dropdown-item">Multiday Tours</a></li>

                            <li><a href="/tailor-made-tours" class="dropdown-item">Tailor Made Tours</a></li>

                        </ul>

                    </li>

                    <x-front-nav-link href="/services" :active="request()->is('services')">Our Services</x-front-nav-link>


                    <x-front-nav-link href="/vehicle" :active="request()->is('vehicle')">Vehicles</x-front-nav-link>

                    <x-front-nav-link href="/things-to-do" :active="request()->is('things to -do')">Things to do</x-front-nav-link>

                    <x-front-nav-link href="/our-gallery" :active="request()->is('gallery')">Gallery</x-front-nav-link>

                    <x-front-nav-link href="/contact" :active="request()->is('contact')">Contact us</x-front-nav-link>



                </ul>

            </div>

        </div>

    </nav>













    <header class="bg-white shadow">



        <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>



    </header>

    <main>



        <!-- Your content -->



        {{ $slot }}



    </main>

    <style>
        .site-footer::before {

            content: '';

            position: absolute;

            top: 0;

            left: 0;

            width: 100%;

            height: 100%;

            background-image: url("{{ asset('images/slider.jpg') }}");

            background-size: cover;

            background-position: center;

            z-index: -1;

            /* Ensures it stays behind the content */

        }
    </style>



    <footer id="colophon" class="site-footer footer-primary">

        {{-- <img src="{{asset('images/footerbg.jpg')}}" class="footer-image" alt=""> --}}

        <div class="top-footer">

            <div class="container">

                <div class="upper-footer">

                    <div class="row">

                        <div class="col-lg-4 col-sm-6">

                            <aside class="widget widget_text">

                                <div class="footer-logo">

                                    <a href="{{ url('/') }}">

                                        <img src="{{ asset('images/logo.png') }}" alt="Logo"
                                            class="d-inline-block align-text-top logo">

                                    </a>

                                </div>

                                <div class="textwidget widget-text">

                                    Golden Choice Tours offers tailor-made holidays and travel experiences across Sri

                                    Lanka, ensuring unforgettable adventures with exceptional service.

                                </div>



                                <div class="lower-footer">

                                    <div class="social-icon">

                                        <ul class="px-0 ">

                                            <li>

                                                <a href="https://facebook.com/people/The-Golden-Choice-Tours/61552511492666/?paipv=0&eav=AfYJf6INwcfAN2uRFOggr2GO_OGounv7HIRyBcGFQBwuLxUAjScB7fOrfB03wY6cSZo"
                                                    target="_blank">

                                                    <i class="fab fa-facebook-f" aria-hidden="true"></i>

                                                </a>

                                            </li>




                                            <li>

                                                <a href="https://www.instagram.com/goldenchoicetours/"
                                                    target="_blank">

                                                    <i class="fab fa-instagram" aria-hidden="true"></i>

                                                </a>

                                            </li>

                                            <li>

                                                <a href="https://www.youtube.com/channel/UC62Zv-ilohZ9oYchw9UR9qg"
                                                    target="_blank">

                                                    <i class="fab fa-youtube" aria-hidden="true"></i>

                                                </a>

                                            </li>

                                            <li>
                                                <a href="https://wa.me/+94774666301?text=Hi" target="_blank"><i
                                                        class="fab fa-whatsapp"></i></a>
                                            </li>

                                        </ul>

                                    </div>

                                </div>







                            </aside>

                        </div>

                        <div class="col-md-4 col-sm-6">

                            <aside class="widget">

                                <h3 class="widget-title">Main Menu</h3>

                                <div class="textwidget widget-text">



                                    <ul class="px-0 footer-menu">

                                        <x-front-nav-link href="/" :active="request()->is('/')">Home</x-front-nav-link>

                                        <x-front-nav-link href="about" :active="request()->is('abouts')">About us</x-front-nav-link>

                                        <x-front-nav-link href="about-sri-lanka" :active="request()->is('about-sri-lanka')">About Sri

                                            Lanka</x-front-nav-link>

                                        <x-front-nav-link href="vehicle" :active="request()->is('vehicle')">Vehicles</x-front-nav-link>

                                        <x-front-nav-link href="things-to-do" :active="request()->is('things-to-do')">Things to
                                            Do</x-front-nav-link>

                                        <x-front-nav-link href="gallery" :active="request()->is('gallery')">Gallery</x-front-nav-link>

                                        <x-front-nav-link href="contact" :active="request()->is('contact')">Contact
                                            Us</x-front-nav-link>



                                    </ul>

                                </div>

                            </aside>

                        </div>



                        <div class="col-lg-4 col-sm-6">

                            <aside class="widget widget_text">

                                <h3 class="widget-title">CONTACT US</h3>

                                <div class="textwidget widget-text">

                                    <ul class="px-0 ">

                                        <li>

                                            <i class="fa-solid fa-location-dot"></i>

                                            118/12/A, Old Negombo Rd, <br> Wattala, Sri Lanka.

                                        </li>

                                        <li>

                                            <a href="tel:+94774666301">

                                                <i aria-hidden="true" class="fa fa-phone "></i>

                                                +94 077 466 6301

                                            </a>

                                        </li>

                                        <li>

                                            <a href="mailtop:thegoldenchoicetours@gmail.com">

                                                <i aria-hidden="true" class="fa fa-envelope"></i>

                                                thegoldenchoicetours@gmail.com

                                            </a>

                                        </li>



                                    </ul>

                                </div>



                            </aside>

                        </div>



                    </div>

                </div>



            </div>

        </div>

        <div class="bottom-footer">

            <div class="container">

                <div class="copy-right text-center">

                    © {{ date('Y') }} The Golden Choice Tours. All Rightes Reserved. | Powered by

                    <a href="https://wdsl.lk/" style="font-weight:bold;" class=" text-decoration-none"
                        target="_blank">web design sri lanka</a>
                </div>



            </div>

        </div>

    </footer>

    <a style="position: fixed;
    z-index: 999999;
    right: 10px;
    bottom: 10px;
    width: auto;
    /* float: right; */
    padding: 10px;
    color: #fff;
    text-align: center;
    letter-spacing: 2px;"
        href="https://wa.me/+94774666301?text=Hello%20Golden%20Choice%20Tours" target="_blank"
        class="hidden-sm hidden-xs">

        <img src="{{ asset('images/whatsapp.png') }}" width="150px;" style="float: right">
    </a>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>



    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>



    <script>
        AOS.init({

            duration: 3000 // Set the global duration for all elements



        });
    </script>







    <script>
        // JavaScript (Optional for mobile fallback)

        document.querySelectorAll('.dropdown').forEach(function(dropdown) {

            dropdown.addEventListener('mouseover', function() {

                const menu = this.querySelector('.dropdown-menu');

                menu.classList.add('show');

            });



            dropdown.addEventListener('mouseout', function() {

                const menu = this.querySelector('.dropdown-menu');

                menu.classList.remove('show');

            });

        });
    </script>

    <script>
        $(document).ready(function() {

            $('.tour-owl-carousel').owlCarousel({

                loop: true,

                margin: 10,

                autoplay: true,

                nav: true,

                dots: true,

                responsive: {

                    0: {

                        items: 1

                    },

                    600: {

                        items: 2

                    },

                    1000: {

                        items: 3

                    }

                }

            });

        });
    </script>

</body>



</html>
