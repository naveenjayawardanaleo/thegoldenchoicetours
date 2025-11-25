<x-front-layout>
    <x-slot:heading>

        <section class="section breadcrumb-head">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Vehicle</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

        </section>

    </x-slot:heading>
<section class="tours-section py-5">
    <div class="container">
        {{--            <h2 class="text-center mb-4">Our Tours</h2>--}}
{{--        <p class=" text-center mb-4 text-white ">The Golden Choice Tours offers everything for an unforgettable Sri Lankan adventure.--}}
{{--            <br> Relax, explore, and let us handle the rest.</p>--}}
        <div class="row">
            <div class="col-md-12">
                <h1 class="title  text-center mb-5 ">Our Vehicles</h1>

            </div>
        </div>

            <div class="row">
                @foreach ($vehicle as $tour)
                    <div class="col-md-4 mb-5">
                        <div class="card vehicle-card h-100 shadow-sm ">
                            <img src="{{ asset('storage/' . $tour->image_path) }}" alt="{{ $tour->Title }}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">{{ $tour->Title }}</h5>

                                <div class="card-text">{!! $tour->Description !!}</div>

                                <div class="text-left mt-3">
                                    <a href="https://wa.me/+94774666301?text=The%20Golden%20Choice%20Tours%2C%20I%20would%20like%20to%20book%20a%20{{ $tour->Title }}" class="btn btn-success " target="_blank"> <i class="fa fa-brands fa-whatsapp"></i> Whats App</a>
                                    <a href="/contact" class="btn btn-primary ">Contact us</a>

                                </div>

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
    </div>
</section>
</x-front-layout>
