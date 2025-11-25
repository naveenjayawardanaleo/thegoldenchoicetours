<?php


use App\Http\Controllers\GalleryController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\VehicleController;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Tours;
use App\Models\Vehicle;
use App\Models\Slider;
//Route::view('/', 'welcome');
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/dashboard', function () {


    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Tours
Route::get('/tour/index',[TourController::class, 'index'])
    ->middleware('auth', 'verified')
    ->name('tour/index');

Route::get('/tour/create', [TourController::class, 'create'])
    ->middleware('auth', 'verified')
    ->name('tour/create');

Route::get('/tour/{id}', [TourController::class, 'show'])
    ->name('tour.show');
Route::post('tour-submited', [TourController::class, 'submited'])
    ->middleware('auth', 'verified')
    ->name('tour-detail');

Route::get('/tour/{id}/edit', [TourController::class, 'edit'])
    ->middleware('auth', 'verified')
    ->name('tour/edit');

Route::post('/book)', [TourController::class, 'book'])
    ->middleware('auth', 'verified')
    ->name('tour/book');
Route::post('/tour/remove-image', [TourController::class, 'removeImage'])->name('tours.removeImage');


//Slider
Route::get('/slider/index',[SliderController::class, 'index'])
    ->middleware('auth', 'verified')
    ->name('slider/index');

Route::get('/slider/create', [SliderController::class, 'create'])
    ->middleware('auth', 'verified')
    ->name('slider/create');

Route::post('submited', [SliderController::class, 'submited'])
    ->middleware('auth', 'verified')
    ->name('submited');

Route::get('/slider/{id}/edit', [SliderController::class, 'edit'])
    ->middleware('auth', 'verified')
    ->name('slider/edit');
Route::patch('/slider/{id}', [SliderController::class, 'update'])
    ->middleware('auth', 'verified')
    ->name('slider/update');


Route::delete('/slider/{id}', [SliderController::class, 'destroy'])
    ->middleware('auth', 'verified')
    ->name('slider/delete');


//Vehicle
Route::get('/vehicle/index',[VehicleController::class, 'index'])
    ->middleware('auth', 'verified')
    ->name('vehicle/index');

Route::get('/vehicle/create', [VehicleController::class, 'create'])
    ->middleware('auth', 'verified')
    ->name('vehicle/create');

Route::post('submited', [\App\Http\Controllers\VehicleController::class, 'submited'])
    ->middleware('auth', 'verified')
    ->name('submited');

Route::get('/vehicle/{id}/edit', [VehicleController::class, 'edit'])
    ->middleware('auth', 'verified')
    ->name('vehicle/edit');
Route::patch('/vehicle/{id}', [VehicleController::class, 'update'])
    ->middleware('auth', 'verified')
    ->name('vehicle/update');

Route::delete('/vehicle/{id}', [VehicleController::class, 'destroy'])
    ->middleware('auth', 'verified')
    ->name('vehicle/delete');


//gallery
//Route::get('/gallery-edit',function(){
//    return view('edit.gallery');
//});
Route::get('/edit-gallery', [GalleryController::class, 'index'])->name('edit-gallery');


Route::patch('/gallery/{id}', [GalleryController::class, 'update'])->name('gallery.update');
Route::post('/gallery/removeImage', [GalleryController::class, 'removeImage'])->name('gallery.removeImage');
Route::delete('/gallery/{id}', [GalleryController::class, 'destroy'])->name('gallery.destroy');

//create
//Route::get('/tour/create', function(){
//    return view('tour.create');
//})->middleware(['auth', 'verified'])->name('create');

//store


//edit
//Route::get('/tour/{id}/edit', function($id){
//    $tour = Tours::find($id);
//
//    return view('tour.edit', ['tour' => $tour]);
//});
Route::patch('/tour/{id}', [TourController::class, 'update'])
    ->middleware('auth', 'verified')
    ->name('tour/update');


Route::delete('/tour/{id}', [TourController::class, 'destroy'])
    ->middleware('auth', 'verified')
    ->name('tour/delete');

//views
Route::get('/', function () {

    $Slider = Slider::all();
    $tours = Tours::all();

//    dd($tours);
    return view('home', ['tours' => $tours], ['slider' => $Slider]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/services', function () {
    return view('services');
});


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about-sri-lanka', function (){
    return view('about-sri-lanka');
});

Route::get('/things-to-do', function (){
    return view('things-to-do');
});

Route::get('/vehicle', function (){
    $vehicle= Vehicle::all();
    return view('vehicle', ['vehicle' => $vehicle]);
});
Route::get('/day-tours', function (){
    $daytour = Tours::where('Category', '0')->get();
    return view('day-tours', ['daytour' => $daytour]);
});
Route::get('/multiday-tours', function (){
    $daytour = Tours::where('Category', '1')->get();
    return view('multiday-tours', ['daytour' => $daytour]);
});
Route::get('/tailor-made-tours', function (){
   return view('tailor-made-tours');
});

Route::get('/our-gallery', function (){
    $gallery= Gallery::findOrFail(1);

    // dd($gallery);
    return view('gallery', ['gallery' => $gallery]);
});

//gallery






require __DIR__.'/auth.php';

