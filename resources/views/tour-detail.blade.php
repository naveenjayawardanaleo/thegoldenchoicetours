
<x-front-layout>
    <x-slot:heading>

        <section class="section breadcrumb-head">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item"><a href="/">Tours</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{$tour->Title}}
                                    <strong> @if($tour['Category']==0)
                                            Day Tour

                                        @elseif($tour['Category']==1)
                                            Multi Day
                                        @endif</strong>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

        </section>

    </x-slot:heading>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card py-3 px-5">
                        <h1>{{ $tour->Title }}</h1>
                        @if($tour->image_path)
                            <img src="{{ asset('storage/' . $tour->image_path) }}" alt="{{ $tour->Title }}" class="img-fluid" style="max-width: 100%; height: auto;">
                        @else
                            <p>No image available for this tour.</p>
                        @endif

                        <div class="mt-3">

                            {!! $tour->Description !!}
                            
                        </div>
                        <div class="">
                            {!! $tour->map !!}
                        </div>


                        <div class="row mt-3">

                            @if($tour->gallery)
                                @foreach(json_decode($tour->gallery, true) as $image)
                                    <div class="col-md-4 mb-3">
                                        <img src="{{ asset('storage/' . $image) }}" class="w-100" alt="">
                                    </div>

                                @endforeach
                            @endif
                        </div>
                        <p class=""><strong>Summary:</strong> {{ $tour->ShortDescription }}</p>

                    </div>






                </div>
                <div class="col-md-4">
                    <div class="card py-3 px-5">
                        <!-- Display any success message -->
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <form action="book/$tour->id " method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="date" class="form-label">Preferred Date</label>
                                <input type="date" class="form-control form-control-lg @error('date') is-invalid @enderror" id="date" name="date" value="{{ old('date') }}" required>
                                @error('date')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="num_people" class="form-label">Number of People</label>
                                <input type="number" class="form-control form-control-lg @error('num_people') is-invalid @enderror" id="num_people" name="num_people" value="{{ old('num_people') }}" required min="1">
                                @error('num_people')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="outline-btn bg-white text-decoration-none">Book Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


</x-front-layout>
