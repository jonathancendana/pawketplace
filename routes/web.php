<?php

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

/* WEBSITE */
Route::get('/', function () {
    return view('website/index');
});

Route::get('/pet-cost-calculator', function () {
    return view('website/discover-track/pet-cost-calculator/index');
});
Route::get('/pet-cost-calculator/checkout', function () {
    return view('website/discover-track/pet-cost-calculator/checkout');
});
Route::get('/pet-cost-calculator/results', function () {
    return view('website/discover-track/pet-cost-calculator/results');
});
Route::get('/about-us', function () {
    return view('website/information/about-us');
});
Route::get('/contact-us', function () {
    return view('website/information/contact-us');
});

/* PET PARENT */
/* Auth */
Route::get('/pet-parent/login', function () {
    return view('website/pet-parent/auth/login');
});
Route::get('/pet-parent/forgot', function () {
    return view('website/pet-parent/auth/forgot');
});
Route::get('/pet-parent/send', function () {
    return view('website/pet-parent/auth/send');
});
Route::get('/pet-parent/reset', function () {
    return view('website/pet-parent/auth/reset');
});
Route::get('/pet-parent/reset-success', function () {
    return view('website/pet-parent/auth/reset-success');
});
Route::get('/pet-parent/register', function () {
    return view('website/pet-parent/auth/register');
});
Route::get('/pet-parent/register-created', function () {
    return view('website/pet-parent/auth/register-created');
});
Route::get('/pet-parent/email-verification-success', function () {
    return view('website/pet-parent/auth/email-verification-success');
});
/* Dashboard */
Route::get('pet-parent/dashboard', function () {
    return view('website/pet-parent.dashboard.index');
});
Route::get('pet-parent/dashboard2', function () {
    return view('website/pet-parent.dashboard.index2');
});
/* END PET PARENT */



/* VENDOR */
/* Appointments  */
Route::get('vendor/appointments/upcoming', function () {
    return view('vendor.appointments.upcoming');
});
/* Services & Pricing  */
Route::get('vendor/services-pricing', function () {
    return view('vendor.services-pricing.index');
});
Route::get('vendor/services-pricing/view', function () {
    return view('vendor.services-pricing.view');
});
Route::get('vendor/services-pricing/add', function () {
    return view('vendor.services-pricing.add');
});
Route::get('vendor/services-pricing/edit', function () {
    return view('vendor.services-pricing.edit');
});
/* FAQ  */
Route::get('vendor/faq', function () {
    return view('vendor.faq.index');
});
/* Contact Us  */
Route::get('vendor/contact-us', function () {
    return view('vendor.contact-us.index');
});
/* VENDOR */


/* ADMIN */
/* Auth  */
Route::get('admin/login', function () {
    return view('admin.auth.login');
});


/* END ADMIN */