<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AudienceController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventtypeController;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\PerformersController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TickettypeController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\BookingdetailsController;
use App\Http\Controllers\Frontend\WebController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\PaymentController;
use App\Models\Performer;
use GuzzleHttp\Middleware;
use Illuminate\Auth\Events\Logout;

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

//frontend
Route::get('/front',[WebController::class,'front'])->name('homepage');
Route::get('/events/event',[EventController::class,'eventsfront'])->name('events.front');
Route::get('/eventtypes/hiphop',[EventtypeController::class,'hiphop'])->name('eventtype.hiphop'); 




//Backend & Frontend
//Auth
Route::get('/login',[AuthController::class, "login"])->name("login");
Route::post('/login',[AuthController::class, "loginStore"])->name("login.store");
Route::post('/frontendsignup',[FrontendController::class,'store'])->name("front.store");
Route::post('/frontendlogin',[FrontendController::class,'loginstore'])->name("front.login");
Route::get('/frontendlogout',[FrontendController::class,'frontlogout'])->name("front.logout");



// closure function
//Backend
Route::group(["middleware"=>"auth",],function(){

Route::get('/logout',[AuthController::class,'logout'])->name('admin.logout');



  
Route::get('/',[DashboardController::class,'dashboard'])->name("dashboard");

//Audience
Route::get('/audience',[AudienceController::class,'audience'])->name('audience');
Route::get('/audience/form',[AudienceController::class,'form']);
Route::post('/audience/store',[AudienceController::class,'store'])->name('store.audience');
Route::get('/audience/delete/{data_id}',[AudienceController::class,'delete'])->name('audience.delete');
Route::get('/audience/edit/{data_id}',[AudienceController::class,'edit'])->name('audience.edit');
Route::put('/audience/update/{data_id}',[AudienceController::class,'update'])->name('audience.update');
Route::get('/audience/view/{data_id}',[AudienceController::class,'view'])->name('audience.view');

//Event
Route::get('/event',[EventController::class,'event'])->name('event');
Route::get('/event/eventform',[EventController::class,'eventform'])->name('event.form');
Route::post('/event/store',[EventController::class,'formstore'])->name('store.event');
Route::get('/event/delete/{event_id}',[EventController::class,'delete'])->name('event.delete');
Route::get('/event/edit/{event_id}',[EventController::class,'edit'])->name('event.edit');
Route::put('/event/update/{event_id}',[EventController::class,'update'])->name('event.update');
Route::get('/event/view/{event_id}',[EventController::class,'view'])->name('event.view');

//Event type
Route::get('/eventtype',[EventtypeController::class,'eventtype'])->name('eventtype');
Route::get('/eventtype/eventtypeform',[EventtypeController::class,'eventtypeform'])->name('eventtype.form');
Route::post('/eventtype/store',[EventtypeController::class,'storeform'])->name('store.eventtype');
Route::get('/eventtype/delete/{eventtype_id}',[EventtypeController::class,'delete'])->name('eventtype.delete');
Route::get('/eventtype/edit/{eventtype_id}',[EventtypeController::class,'edit'])->name('eventtype.edit');
Route::put('/eventtype/update/{eventtype_id}',[EventtypeController::class,'update'])->name('eventtype.update');
Route::get('/eventtype/view/{eventtype_id}',[EventtypeController::class,'view'])->name('eventtype.view');

//Venue
Route::get('/venue',[VenueController::class,'venue'])->name('venue');
Route::get('/venue/venueform',[VenueController::class,'venueform']);
Route::post('/venue/store',[VenueController::class,'store'])->name('store.venue');
Route::get('/venue/delete/{venue_id}',[VenueController::class,'delete'])->name('admin.delete');
Route::get('/venue/edit/{venue_id}',[VenueController::class,'edit'])->name('venue.edit');
Route::put('/venue/update/{venue_id}',[VenueController::class,'update'])->name('venue.update');
Route::get('/venue/view/{venue_id}',[VenueController::class,'view'])->name('venue.view');

//Performer
Route::get('/performers',[PerformersController::class,'performer'])->name('performer');
Route::get('/performers/performerform',[PerformersController::class,'performerform'])->name('performer.form');
Route::post('/performers/store',[PerformersController::class,'store'])->name('performer.store');
Route::get('/performers/delete/{performer_id}',[PerformersController::class,'delete'])->name('performer.delete');
Route::get('/performers/edit/{performer_id}',[PerformersController::class,'edit'])->name('performer.edit');
Route::put('/performers/update/{performer_id}',[PerformersController::class,'update'])->name('performer.update');
Route::get('/performers/view/{performer_id}',[PerformersController::class,'view'])->name('performer.view');

//Booking
Route::get('/booking',[BookingController::class,'booking'])->name('booking');
Route::get('/booking/bookingform',[BookingController::class,'bookingform'])->name('booking.form');
Route::post('/booking/store',[BookingController::class,'store'])->name('booking.store');
Route::get('/booking/delete/{booking_id}',[BookingController::class,'delete'])->name('booking.delete');
Route::get('/booking/edit/{booking_id}',[BookingController::class,'edit'])->name('booking.edit');
Route::put('/booking/update/{booking_id}',[BookingController::class,'update'])->name('booking.update');
Route::get('/booking/view/{booking_id}',[BookingController::class,'view'])->name('booking.view');


Route::get('/ticket',[TicketController::class,'ticket']);
Route::get('/tickettype',[TickettypeController::class,'tickettype']);

//Booking Details
Route::get('/bookingdetails',[BookingdetailsController::class,'bookingdetails'])->name('bookingdetails');
Route::get('/bookingdetails/form',[BookingdetailsController::class,'form'])->name('bookingdetails.form');
Route::post('/bookingdetails/store',[BookingdetailsController::class,'store'])->name('bookingdetails.store');
Route::get('/bookingdetails/delete/{bookingdetails_id}',[BookingdetailsController::class,'delete'])->name('bookingdetails.delete');
Route::get('/bookingdetails/edit/{bookingdetails_id}',[BookingdetailsController::class,'edit'])->name('bookingdetails.edit');
Route::put('/bookingdetails/update/{bookingdetails_id}',[BookingdetailsController::class,'update'])->name('bookingdetails.update');
Route::get('/bookingdetails/view/{bookingdetails_id}',[BookingdetailsController::class,'view'])->name('bookingdetails.view');

Route::get('/payment',[PaymentController::class,'payment']);

  
});