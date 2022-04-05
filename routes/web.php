<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Grades\FirstGradePrimary;
use App\Http\Livewire\Grades\SecondGradePrimary;
use App\Http\Livewire\Grades\ThirdGradePrimary;
use App\Http\Livewire\Grades\FourthGradePrimary;
use App\Http\Livewire\Grades\FifthGradePrimary;
use App\Http\Livewire\Grades\SixthGradePrimary;
use App\Http\Livewire\Grades\FirstGradeElementary;
use App\Http\Livewire\Grades\SecondGradeElementary;
use App\Http\Livewire\Grades\ThirdGradeElementary;


use Illuminate\Foundation\Auth\EmailVerificationRequest;
// use Illuminate\Http\Request;


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
    return view('iplaymath');
});

Route::get('/play', function () {
    return view('layouts/iplaymath-exercise');
});

//Exercise
Route::get('/FirstGradePrimary', [FirstGradePrimary::class, 'render'])->middleware('auth');
Route::get('/SecondGradePrimary', [SecondGradePrimary::class, 'render']);
Route::get('/ThirdGradePrimary', [ThirdGradePrimary::class, 'render']);
Route::get('/FourthGradePrimary', [FourthGradePrimary::class, 'render']);
Route::get('/FifthGradePrimary', [FifthGradePrimary::class, 'render']);
Route::get('/SixthGradePrimary', [SixthGradePrimary::class, 'render']);
Route::get('/FirstGradeElementary', [FirstGradeElementary::class, 'render']);
Route::get('/SecondGradeElementary', [SecondGradeElementary::class, 'render']);
Route::get('/ThirdGradeElementary', [ThirdGradeElementary::class, 'render']);






//Verificacion
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return view('/play');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


