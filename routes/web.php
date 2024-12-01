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
/* Auth */
Route::get('/vendor/login', function () {
    return view('website/vendor/auth/login');
});
Route::get('/vendor/forgot', function () {
    return view('website/vendor/auth/forgot');
});
Route::get('/vendor/send', function () {
    return view('website/vendor/auth/send');
});
Route::get('/vendor/reset', function () {
    return view('website/vendor/auth/reset');
});
Route::get('/vendor/reset-success', function () {
    return view('website/vendor/auth/reset-success');
});
Route::get('/vendor/register', function () {
    return view('website/vendor/auth/register');
});
Route::get('/vendor/register-created', function () {
    return view('website/vendor/auth/register-created');
});
Route::get('/vendor/email-verification-success', function () {
    return view('website/vendor/auth/email-verification-success');
});
Route::get('/vendor/step1', function () {
    return view('website/vendor/auth/step1');
});
Route::get('/vendor/step2-individual', function () {
    return view('website/vendor/auth/step2-individual');
});
Route::get('/vendor/step2-company', function () {
    return view('website/vendor/auth/step2-company');
});
Route::get('/vendor/step3', function () {
    return view('website/vendor/auth/step3');
});
Route::get('/vendor/step4', function () {
    return view('website/vendor/auth/step4');
});
Route::get('/vendor/pending-admin', function () {
    return view('website/vendor/auth/pending-admin');
});
/* Appointments  */
Route::get('vendor/appointments/upcoming', function () {
    return view('website.vendor.appointments.upcoming');
});
/* Services & Pricing  */
Route::get('vendor/services-pricing', function () {
    return view('website.vendor.services-pricing.index');
});
Route::get('vendor/services-pricing/view', function () {
    return view('website.vendor.services-pricing.view');
});
Route::get('vendor/services-pricing/add', function () {
    return view('website.vendor.services-pricing.add');
});
Route::get('vendor/services-pricing/edit', function () {
    return view('website.vendor.services-pricing.edit');
});
/* FAQ  */
Route::get('vendor/faq', function () {
    return view('website.vendor.faq.index');
});
/* Contact Us  */
Route::get('vendor/contact-us', function () {
    return view('website.vendor.contact-us.index');
});
/* VENDOR */


/* ADMIN */
/* Auth  */
Route::get('admin/login', function () {
    return view('admin.auth.login');
});
Route::get('admin/forgot', function () {
    return view('admin.auth.forgot');
});
Route::get('admin/send', function () {
    return view('admin.auth.send');
});
Route::get('admin/reset', function () {
    return view('admin.auth.reset');
});
Route::get('admin/reset-success', function () {
    return view('admin.auth.reset-success');
});

/* Account Management  */
/* Users */
Route::get('admin/account-management/users', function () {
    return view('admin.account-management.users.index');
});

/* Pet Owners */
Route::get('admin/account-management/pet-owners', function () {
    return view('admin.account-management.pet-owners.index');
});
Route::get('admin/account-management/pet-owners/view', function () {
    return view('admin.account-management.pet-owners.view');
});
Route::get('admin/account-management/pet-owners/view2', function () {
    return view('admin.account-management.pet-owners.view2');
});

/* Vendor */
Route::get('admin/account-management/vendor/registered', function () {
    return view('admin.account-management.vendor.registered.index');
});
Route::get('admin/account-management/vendor/registered/pending', function () {
    return view('admin.account-management.vendor.registered.pending');
});
Route::get('admin/account-management/vendor/registered/new', function () {
    return view('admin.account-management.vendor.registered.new');
});
Route::get('admin/account-management/vendor/registered/new2', function () {
    return view('admin.account-management.vendor.registered.new2');
});
Route::get('admin/account-management/vendor/registered/rejected', function () {
    return view('admin.account-management.vendor.registered.rejected');
});
Route::get('admin/account-management/vendor/registered/active', function () {
    return view('admin.account-management.vendor.registered.active');
});
Route::get('admin/account-management/vendor/placeholder', function () {
    return view('admin.account-management.vendor.placeholder.index');
});
Route::get('admin/account-management/vendor/placeholder/add', function () {
    return view('admin.account-management.vendor.placeholder.add');
});
Route::get('admin/account-management/vendor/placeholder/edit', function () {
    return view('admin.account-management.vendor.placeholder.edit');
});

/* Appointments  */
Route::get('admin/appointments/view', function () {
    return view('admin.appointments.view');
});
Route::get('admin/appointments/view/booked', function () {
    return view('admin.appointments.booked');
});
Route::get('admin/appointments/view/completed', function () {
    return view('admin.appointments.completed');
});
Route::get('admin/appointments/view/pending', function () {
    return view('admin.appointments.pending');
});
Route::get('admin/appointments/view/cancelled', function () {
    return view('admin.appointments.cancelled');
});
Route::get('admin/appointments/view/no-show', function () {
    return view('admin.appointments.no-show');
});

/* Content Management  */
/* Advertisement */
Route::get('admin/content-management/advertisement', function () {
    return view('admin.content-management.advertisement.index');
});
Route::get('admin/content-management/advertisement/add', function () {
    return view('admin.content-management.advertisement.add');
});
Route::get('admin/content-management/advertisement/edit', function () {
    return view('admin.content-management.advertisement.edit');
});

/* Pet Cost Calculator */
Route::get('admin/content-management/pet-cost-calculator', function () {
    return view('admin.content-management.pet-cost-calculator.index');
});
Route::get('admin/content-management/pet-cost-calculator/add', function () {
    return view('admin.content-management.pet-cost-calculator.add');
});
Route::get('admin/content-management/pet-cost-calculator/edit', function () {
    return view('admin.content-management.pet-cost-calculator.edit');
});

/* Symptom Checker */
Route::get('admin/content-management/symptom-checker', function () {
    return view('admin.content-management.symptom-checker.index');
});

/* FAQ */
Route::get('admin/content-management/faq', function () {
    return view('admin.content-management.faq.index');
});
Route::get('admin/content-management/faq/add', function () {
    return view('admin.content-management.faq.add');
});
Route::get('admin/content-management/faq/edit', function () {
    return view('admin.content-management.faq.edit');
});
/* END ADMIN */