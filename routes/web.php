<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingContoller;



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

//All Listings
Route::get('/', [ListingContoller::class, 'index']);

// Show Create
Route::get('/listings/create', [ListingContoller::class, 'create']);

//Store Listing Data
Route::post('/listings', [ListingContoller::class, 'store']);

//Show Edit Form
Route::get('/listings/{listing}/edit', [ListingContoller::class, 'edit']);

//Update listing
Route::put('/listings/{listing}', [ListingContoller::class, 'update']);

//Delete listing
Route::delete('/listings/{listing}', [ListingContoller::class, 'destroy']);

//Single listing
Route::get('/listings/{listing}', [ListingContoller::class, 'show']);

//Show Register/Create Form
Route::get('/register', [UserController::class, 'create']);