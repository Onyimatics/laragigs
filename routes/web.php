<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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

// // how to create a route
// Route::get('/hello', function () {
//     return response('<h2>Hello World</h2>', 200)
//         ->header('Content-Type', 'text/plain')
//         ->header('foo', 'bar');
// });

// // create a route with id param and validate the param
// Route::get('/posts/{id}', function ($id) {
//     // dd($id);
//     ddd($id);
//     return response('Post ' . $id);
// })->where('id', '[0-9]+');

// // create a route with query params
// Route::get('/search', function (Request $request) {
//     return($request->name . ' ' . $request->city);
// });

// All Listings
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});

// Single Listing
Route::get('/listings/{id}', function($id) {
    return view('listing', [
        'listing' => Listing::find($id)
    ]);
});