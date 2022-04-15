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
use App\Http\Livewire\UserController;


use Illuminate\Foundation\Auth\EmailVerificationRequest;


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

// Route::get('/', function () {
//     return view('iplaymath');
// });
Route::get('/', function () {
    return view('/layouts/main');
});

Route::get('/main', function () {
    return view('iPM-login');
});

Route::get('/main1', function () {
    return view('iPM-login2');
});
Route::get('/main2', function () {
    return view('iPM-register');
});

Route::get('/play', function () {
    return view('/layouts/iplaymath-exercise');
})->middleware(['auth','userdiagnosed'])->name('play');

//Exercise
Route::get('/FirstGradePrimary', [FirstGradePrimary::class, 'render'])->middleware('auth');
Route::get('/SecondGradePrimary', [SecondGradePrimary::class, 'render'])->middleware(['auth','score.second.grade.p']);
Route::get('/ThirdGradePrimary', [ThirdGradePrimary::class, 'render'])->middleware(['auth','score.third.grade.p']);
Route::get('/FourthGradePrimary', [FourthGradePrimary::class, 'render'])->middleware(['auth','score.fourth.grade.p']);
Route::get('/FifthGradePrimary', [FifthGradePrimary::class, 'render'])->middleware(['auth','score.fifth.grade.p']);
Route::get('/SixthGradePrimary', [SixthGradePrimary::class, 'render'])->middleware(['auth','score.sixth.grade.p']);
Route::get('/FirstGradeElementary', [FirstGradeElementary::class, 'render'])->middleware(['auth','score.first.grade.e']);
Route::get('/SecondGradeElementary', [SecondGradeElementary::class, 'render'])->middleware(['auth','score.second.grade.e']);
Route::get('/ThirdGradeElementary', [ThirdGradeElementary::class, 'render'])->middleware(['auth','score.third.grade.e']);
//Route::get('/UpdateScore/{points}', [UserController::class, 'UpdateScore'])->middleware('auth');
Route::get('/UpdateScore/{trys}/{minutes}/{seconds}/{success}', [UserController::class, 'UpdateScore'])->middleware('auth');

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


