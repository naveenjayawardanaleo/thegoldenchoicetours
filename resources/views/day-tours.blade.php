<x-front-layout>
    <x-slot:heading>
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
    </x-slot:heading>

    <section class="section ">
        <div class="container">
            {{-- <h2 class="text-center mb-4">Our Tours</h2>--}}
            <h1 class="title  text-center  ">Day Tours</h1>
            <p class=" text-center mb-4  ">The Golden Choice Tours offers everything for an unforgettable Sri Lankan adventure.
                <br> Relax, explore, and let us handle the rest.
            </p>
            <div class="row">

                @foreach ($daytour as $tour)
                <div class="col-md-4">

                    <div class="card h-100 shadow-sm ">
                        <img src="{{ asset('storage/' . $tour->image_path) }}" alt="{{ $tour->Title }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">{{ $tour->Title }}</h5>
                            <p class="card-text mb-2">

                            <p class="card-text">{{ Str::limit($tour->ShortDescription, 180) }}</p>

                            <a href="/tour/{{ $tour->id }}" class="outline-btn bg-white text-decoration-none">Read More</a>


                        </div>
                        {{-- <div class="card-footer bg-white">--}}
                        {{-- </div>--}}
                    </div>
                </div>


                @endforeach
            </div>

        </div>
        </div>
    </section>



</x-front-layout>