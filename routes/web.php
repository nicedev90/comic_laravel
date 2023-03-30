<?php


use App\Http\Controllers\ListingController;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// All listings
Route::get('/', [ListingController::class, 'index']);

// single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);


// Common Resource Routes:
// index - Show all listings
// show - Show single listings
// create - Show form to create new listing
// store - Store new listing
// edit - show form to edit listing
// update - update Listing
// destroy - Delete listing


// Route::get('/', function () {
//     return view('listings', [
//         'heading' => 'Latest listings',
//         'listings' => Listing::all()
//     ]);
// });

// single listing
// Route::get('/listings/{listing}', function(Listing $listing) {
//     return view('listing', [
//         'listing' => $listing
//     ]);

// });




// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/hello', function() {
//     return response('<h1>Hello world </h1>', 200)
//         ->header('Content-Type', 'text/plain')
//         ->header('foo', 'bar');
// });

// Route::get('/posts/{id}', function ($id) {
//     ddd($id);
//     return response('Post ' . $id);
// })->where('id', '[0-9]+');

// Route::get('/search', function(Request $request) {
//     return $request->name . ' ' . $request->city;
// });