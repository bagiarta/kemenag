<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\KemenagController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\ReportRequestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserRequestController;
use Illuminate\Support\Facades\Hash;


Route::get('/', function () {
    return view('dashboard'); //mengganti ke employe test
});

Route::get('dahsboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::post('/submit-form', 'FormController@submit')->name('submit-form');
Route::post('/register', [UserController::class, 'store'])->name('register.store');

//login first.
Route::group(['middleware' => 'auth'], function () {
    route::get('public', [KemenagController::class, 'public'])->name('public');
    route::get('biodata', [KemenagController::class, 'biodata'])->name('biodata');
    route::get('updatebiodata', [KemenagController::class, 'updatebiodata'])->name('updatebiodata');
    route::post('updatebiodata/post', [KemenagController::class, 'updatebiodata_post'])->name('updatebiodata-post');
    Route::post('/user-requests', [UserRequestController::class, 'store'])->name('user-requests.store');
    route::get('formbantuan', [KemenagController::class, 'formbantuan'])->name('formbantuan');
    route::get('formlayanan', [KemenagController::class, 'formlayanan'])->name('formlayanan');
    route::get('formhaji', [KemenagController::class, 'formhaji'])->name('formhaji');
    route::get('formkonsultasi', [KemenagController::class, 'formkonsultasi'])->name('formkonsultasi');
    route::get('formizin', [KemenagController::class, 'formizin'])->name('formizin');
    Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
    route::get('legalisir', [KemenagController::class, 'legalisir'])->name('legalisir');
    Route::get('/biodata/{nik}', [BiodataController::class, 'show'])->name('biodata.show');
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/search', [ReportRequestController::class, 'index'])->name('search');
    Route::get('/generate-report', [ReportRequestController::class, 'generateReport'])->name('generate-report');
    Route::post('/approve-request/{id}', [ReportRequestController::class, 'approveRequest'])->name('approve-request');
    Route::post('/reject-request/{id}', [ReportRequestController::class, 'rejectRequest'])->name('reject-request');
});
Route::get('/public', [KemenagController::class, 'index'])->name('public');
