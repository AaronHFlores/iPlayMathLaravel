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
    return view('/layouts/iplaymath-exercise');
})->middleware(['auth']);

//Exercise
Route::get('/FirstGradePrimary', [FirstGradePrimary::class, 'render'])->middleware('auth');
Route::get('/SecondGradePrimary', [SecondGradePrimary::class, 'render'])->middleware('auth');
Route::get('/ThirdGradePrimary', [ThirdGradePrimary::class, 'render'])->middleware('auth');
Route::get('/FourthGradePrimary', [FourthGradePrimary::class, 'render'])->middleware('auth');
Route::get('/FifthGradePrimary', [FifthGradePrimary::class, 'render'])->middleware('auth');
Route::get('/SixthGradePrimary', [SixthGradePrimary::class, 'render'])->middleware('auth');
Route::get('/FirstGradeElementary', [FirstGradeElementary::class, 'render'])->middleware('auth');
Route::get('/SecondGradeElementary', [SecondGradeElementary::class, 'render'])->middleware('auth');
Route::get('/ThirdGradeElementary', [ThirdGradeElementary::class, 'render'])->middleware('auth');

Route::get('/diagnostic', function (){
    return view('/welcome');
})->name('diagnostic');

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


