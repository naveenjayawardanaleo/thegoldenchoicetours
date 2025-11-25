<x-front-layout>

    <x-slot:heading>



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



    </x-slot:heading>





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



                



     
          

            @if($gallery->img_path)
                @foreach(json_decode($gallery->img_path, true) as $image)
                    <div class="col-md-4 mb-3">
                        <img src="{{ asset($image) }}" class="w-100" alt="">
                    </div>

                @endforeach
            @endif

     










            </div>

        </div>

    </section>



</x-front-layout>

