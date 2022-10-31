<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AudienceController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\PerformersController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TickettypeController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\BookingdetailsController;
use App\Http\Controllers\PaymentController;
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

Route::get('/',[HomeController::class,'home']);
Route::get('/dashboard',[DashboardController::class,'dashboard']);
Route::get('/audience',[AudienceController::class,'audience']);
Route::get('/audience/form',[AudienceController::class,'form']);
Route::get('/event',[EventController::class,'event']);
Route::get('/venue',[VenueController::class,'venue']);
Route::get('/performers',[PerformersController::class,'performer']);
Route::get('/ticket',[TicketController::class,'ticket']);
Route::get('/tickettype',[TickettypeController::class,'tickettype']);
Route::get('/booking',[BookingController::class,'booking']);
Route::get('/bookingdetails',[BookingdetailsController::class,'bookingdetails']);
Route::get('/payment',[PaymentController::class,'payment']);