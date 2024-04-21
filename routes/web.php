<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\KemenagController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Hash;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::post('/submit-form', 'FormController@submit')->name('submit-form');
route::get('formbantuan', [KemenagController::class, 'formbantuan'])->name('formbantuan');
route::get('formlayanan', [KemenagController::class, 'formlayanan'])->name('formlayanan');
route::get('formhaji', [KemenagController::class, 'formhaji'])->name('formhaji');
route::get('formkonsultasi', [KemenagController::class, 'formkonsultasi'])->name('formkonsultasi');
route::get('formizin', [KemenagController::class, 'formizin'])->name('formizin');
route::get('public', [KemenagController::class, 'public'])->name('public');
route::get('legalisir', [KemenagController::class, 'legalisir'])->name('legalisir');
route::get('biodata', [KemenagController::class, 'biodata'])->name('biodata');
route::get('updatebiodata', [KemenagController::class, 'updatebiodata'])->name('updatebiodata');
Route::post('/register', [UserController::class, 'store'])->name('register.store');


//route biodata//
Route::get('/biodata/{nik}', [BiodataController::class, 'show'])->name('biodata.show');
