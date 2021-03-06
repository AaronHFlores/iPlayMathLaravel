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
use App\Http\Livewire\RoomController;
use App\Models\Room;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
    // return view('/layouts/main');
    return view('iPM-main');
});


Route::get('/play', function () {
    $user = Auth::user();
    if($user->room != null){
        $room = Room::where('id', $user->room)->first();
        if($room != null){
            if(($user->id == $room->user1 or $user->id == $room->user2) && ($room->finish == 0 or $room->finish == 2 or $room->finish == 3)){                        
                $room->finish = 1;
                $room->save();
                $user->room = null;
                $user->save();
            }
            else if(($user->id == $room->user1 or $user->id == $room->user2) && $room->finish == 1){                        
                $room->user1 = NULL;
                $room->user2 = NULL;
                $room->score1 = NULL;
                $room->score2 = NULL;
                $room->finish = NULL;
                $room->save();
            }
        } 
        else{
            $user->room = null;
            $user->save();
        }
    }
    
    return view('iPM-gradeboard');
})->middleware(['auth','userdiagnosed'])->name('play');

//Exercise
Route::get('/FirstGradePrimary', [FirstGradePrimary::class, 'render'])->middleware(['auth','userdiagnosed']);
Route::get('/SecondGradePrimary', [SecondGradePrimary::class, 'render'])->middleware(['auth','score.second.grade.p','userdiagnosed']);
Route::get('/ThirdGradePrimary', [ThirdGradePrimary::class, 'render'])->middleware(['auth','score.third.grade.p','userdiagnosed']);
Route::get('/FourthGradePrimary', [FourthGradePrimary::class, 'render'])->middleware(['auth','score.fourth.grade.p','userdiagnosed']);
Route::get('/FifthGradePrimary', [FifthGradePrimary::class, 'render'])->middleware(['auth','score.fifth.grade.p','userdiagnosed']);
Route::get('/SixthGradePrimary', [SixthGradePrimary::class, 'render'])->middleware(['auth','score.sixth.grade.p','userdiagnosed']);
Route::get('/FirstGradeElementary', [FirstGradeElementary::class, 'render'])->middleware(['auth','score.first.grade.e','userdiagnosed']);
Route::get('/SecondGradeElementary', [SecondGradeElementary::class, 'render'])->middleware(['auth','score.second.grade.e','userdiagnosed']);
Route::get('/ThirdGradeElementary', [ThirdGradeElementary::class, 'render'])->middleware(['auth','score.third.grade.e','userdiagnosed']);
//Route::get('/UpdateScore/{points}', [UserController::class, 'UpdateScore'])->middleware('auth');
Route::get('/UpdateScore/{trys}/{minutes}/{seconds}/{success}', [UserController::class, 'UpdateScore'])->middleware('auth');

// Route::get('/edit', [UserController::class, 'EditUser'])->middleware('auth');
Route::get('/profile', [UserController::class, 'EditUser'])->middleware('auth')->name('profile');
Route::put('/profile/{user}', [UserController::class, 'UpdateUser'])->middleware('auth')->name('user.update');

Route::get('/diagnostic', function (){
    return view('/iPM-diagnostic');
})->middleware(['auth','user.not.diagnosed'])->name('diagnostic');


Route::get('/diagnosticTask', [UserController::class, 'DiagnosticTask'])->middleware(['auth','user.not.diagnosed'])->name('diagnosticTask');
Route::get('/updatediagnosticscore/{trys}/{minutes}/{seconds}/{success}/{skip}', [UserController::class, 'updateDiagnosticScore'])->middleware(['auth'])->name('updateDiagnosticScore');

Route::get('/recap', [UserController::class, 'Recap'])->middleware(['auth'])->name('recap');


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

Route::get('/wait', [RoomController::class, 'NewRoom']);
Route::get('/search/{room}', [RoomController::class, 'searchRoom'])->name('search.room');
Route::get('/ocupped', function(){
    return view('ocupped');
});

Route::get('/game', [RoomController::class, 'startGame'])->name('game');
Route::get('/podium', [RoomController::class, 'endGame'])->name('podium');
Route::get('/setup', [RoomController::class, 'setupTask'])->name('setup');
Route::get('/error', function(){
    return view('error');
});
Route::get('/UpdateScoreMultiplayer/{trys}/{minutes}/{seconds}/{success}', [RoomController::class, 'UpdateScoreMult'])->middleware('auth');