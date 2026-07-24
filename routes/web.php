<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about-us', function () {
    return view('pages.about_us');
});


Route::get('/career', function () {
    return view('pages.career');
});

Route::get('/contact-us', function () {
    return view('pages.contact_us');
});

Route::get('/products', function () {
    return view('pages.products');
});

// Catering Services pages
Route::get('/canteen-catering-services', function () {
    return view('pages.catering_services.canteen_catering_services');
});

Route::get('/mobile-catering', function () {
    return view('pages.catering_services.mobile_catering');
});

Route::get('/corporate-buffet-catering', function () {
    return view('pages.catering_services.corporate_buffet_catering');
});

Route::get('/event-equipment-rental', function () {
    return view('pages.catering_services.event_equipment_rental');
});

Route::get('/food-box-and-refreshments', function () {
    return view('pages.catering_services.food_box_and_refreshments');
});

Route::get('/latest-events', function () {
    return view('pages.latest_events');
});

Route::get('/latest-events-detail', function () {
    return view('pages.latest_events_detail.latest_events_detail');
});


Route::get('/insights', function () {
    return view('pages.insights');
});