<?php

use App\Models\Listings;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/listings', function () {
    return view('listings', [
        'headings' => 'Latest Listings',
        'listings' => Listings::all()
    ]);
});

Route::get('/listing/{id}', function ($id) {
    return view('listing', [
        'listing' => Listings::find($id)
    ]);
});
 
// Route::get('/post/{id}', function($id){
//     ddd($id);
//     return ('Hi' . $id);
// })->where('id', '[0-9]+');

// Route::get('/search', function(Request $request) {
//     return($request->name);
// });
