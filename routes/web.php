<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WhatappController;
use App\Http\Controllers\SmsController;
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
    return view('home.barber');
});
Route::get('/bitcoin', function () {
    return view('home.bitcoin');
});
Route::get('/barber', function () {
    return view('home.index');
});

Route::get('/rewards', function () {
    return view('admin.rewards');
});
Route::get('/location_users', function () {
    return view('admin.location_users');
});
Route::get('/coupon', function () {
    return view('admin.coupon');
});
Route::get('/customers', function () {
    return view('admin.customers');
});
Route::get('/logs', function () {
    return view('admin.logs');
});
Route::get('/reports', function () {
    return view('admin.reports');
});
Route::get('/call', function () {
    return view('admin.call');
});
Route::get('/JONES_ROAD', function () {
    return view('home.jones_road');
});

Route::get('/JONES_FOOD', function () {
    return view('home.jones_food');
});
Route::get('/JONES_EVENTS', function () {
    return view('home.jones_events');
});
Route::get('/JONES_CORPORATE', function () {
    return view('home.jones_corporate');
});
Route::get('/JONES_INNER', function () {
    return view('home.jones_indoor');
});
Route::get('/JONES_POLICY', function () {
    return view('home.jones_terms');
});
Route::get('/JONES_CONDITIONS', function () {
    return view('home.jones_conditions');
});

Route::get('/VFW', function () {
    return view('home.vfw');
});
Route::get('/HUMBLE', function () {
    return view('home.humble');
});
Route::get('/HUMBLE_FOOD', function () {
    return view('home.humble_food');
});
Route::get('/HUMBLE_EVENTS', function () {
    return view('home.humble_events');
});
Route::get('/HUMBLE_MIDNIGHT', function () {
    return view('home.humble_midnight');
});
Route::get('/HUMBLE_INDOOR', function () {
    return view('home.humble_indoor');
});
Route::get('/HUMBLE_CONDITIONS', function () {
    return view('home.humble_conditions');
});
Route::get('/HUMBLE_POLICY', function () {
    return view('home.humble_policy');
});
Route::get('/VFW_FOOD', function () {
    return view('home.vfw_food');
});
Route::get('/VFW_EVENTS', function () {
    return view('home.vfw_events');
});
Route::get('/VFW_MIDNIGHT', function () {
    return view('home.vfw_midnight');
});
Route::get('/VFW_INDOOR', function () {
    return view('home.vfw_indoor');
});

Route::get('/VFW_POLICY', function () {
    return view('home.vfw_policy');
});
Route::get('/VFW_CONDITIONS', function () {
    return view('home.vfw_conditions');
});

Route::group(['middleware'=>'auth'],function(){
Route::get("/adminDash",[AdminController :: class , 'admin'])->name('adminDash');
Route::get("/profile",[AdminController :: class , 'profile'])->name('profile');
Route::post("/save_profile",[AdminController :: class , 'save_profile'])->name('save_profile');
Route::get("/adminLogout",[AdminController :: class , 'logout'])->name('adminLogout');
});

Route::group(['middleware'=>'guest'],function(){
Route::get("/login",[AdminController :: class , 'index'])->name('login');
Route::post("/login",[AdminController :: class , 'login'])->name('login');
});




// Twilio Routes

        // What App
Route::get('what-chat', [WhatappController::class, 'index']);
Route::post('/incoming-msg', [WhatappController::class, 'handleIncomingMSG']);
Route::post('/get-whatsapp-messages/{id}', [WhatappController::class,'getMessages'])->name('get-whatsapp-messages');
Route::get('/messages/{customerId}', [WhatappController::class, 'getMessages']);
Route::get('/messages/new/{customerId}/{lastMessageId}', [WhatappController::class, 'getNewMessages']);
Route::post('/save-message', [WhatappController::class, 'save_message']);

// What App

// SMS
Route::get('sms-chat', [SmsController::class, 'index']);
Route::post('/incoming-sms', [SmsController::class, 'handleIncomingMSG']);
Route::post('/get-whatsapp-messages/{id}', [SmsController::class,'getMessages'])->name('get-whatsapp-messages');
Route::get('/messages/{customerId}', [SmsController::class, 'getMessages']);
Route::get('/messages/new/{customerId}/{lastMessageId}', [SmsController::class, 'getNewMessages']);
Route::post('/save-sms', [SmsController::class, 'save_message']);

// SMS

// Twilio Routes
