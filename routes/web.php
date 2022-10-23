<?php

use App\Http\Controllers\ListingContoller;
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

//all listings
Route::get('/', [ListingContoller::class, 'index']);

// Show Create
Route::get('/listings/create', [ListingContoller::class, 'create']);

//store listing data
Route::post('/listings', [ListingContoller::class, 'store']);

//single listing
Route::get('/listings/{listing}', [ListingContoller::class, 'show']);