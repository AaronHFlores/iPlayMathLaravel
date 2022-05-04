<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Livewire\Component;
use App\Models\Room;
use App\Models\User;
use App\Models\Exercise1P;
use App\Models\Exercise2P;
use App\Models\Exercise3P;
use App\Models\Exercise4;
use App\Models\Exercise5;
use App\Models\Exercise6;
use App\Models\Exercise1S;
use App\Models\Exercise2S;
use App\Models\Exercise3S;


class RoomController extends Component
{
    public function NewRoom()
    {
        $user = Auth::user();
        $room = Room::where('user1', null)->first();
        $room->user1 = $user->id;
        $user->room = $room->id;
        $room->save();
        $user->save();
        return view('wait-room', ['Room' => $room]);
    }

    public function searchRoom($nameroom){
        $user = Auth::user();
        $room = Room::where('room', $nameroom)->first();
        if($room != null){
            if($room->user2 == null){
                $room->user2 = $user->id;
                $user->room = $room->id;
                $room->save();
                $user->save();
                return view('wait-room', ['Room' => $room]);
            }
            else
                return view('ocupped');
        }
        else
            return view('ocupped');
        
    }
    public function startGame(){
        $user = Auth::user();
        $room = Room::where('id', $user->room)->first();
        $room->finish = 0;
        $room->save();
        return redirect()->route('setup');
    }

    public function updateScoreMult($trys, $minutes, $seconds, $success)
    {
        $time = (((int)$minutes * 60) + (int)$seconds);
        $User = Auth::user();
        $room = Room::where('id', $User->room)->first();
        $ch = curl_init();
        //URL para la api python
        curl_setopt($ch, CURLOPT_URL, 'http://44.197.27.137/results?finished=' . $success . '&time=' . $time . '&attempts=' . $trys);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $data = json_decode(curl_exec($ch));
        if ($room->user1 == $User->id){
            $room->score1 = intval($data[0]);
        }
        if ($room->user2 == $User->id){
            $room->score2 = intval($data[0]);
        }
        $User->score = $User->score + intval($data[0]);
        if ($User->score < 0) {
            $User->score = 0;
        }
        $room->save();
        $User->save();

        curl_close($ch);
        return view('wait-score', ['Room' => $room]);
    }

    public function setupTask()
    {
        $user = Auth::user();
        $room = Room::where('id', $user->room)->first();
        $user1 = User::where('id', $room->user1)->first();
        $user2 = User::where('id', $room->user2)->first();
        $scoreminino = 0;
        if ($user1->score <= $user2->score)
            $scoreminino = $user1->score;
        else
            $scoreminino = $user2->score;
        $grade = floor($scoreminino/200);
        switch ($grade) {
            case (0):
                $randomNumber = random_int(1, 22);
                $exercise = Exercise1P::where('id', $randomNumber)->first();
                return view('iPM-play-test', ['primarySixth' => $exercise, 'diagnostic' => 0, 'multiplayer' => true]);
                break;
            case (1):
                $randomNumber = random_int(1, 22);
                $exercise = Exercise2P::where('id', $randomNumber)->first();
                return view('iPM-play-test', ['primarySixth' => $exercise, 'diagnostic' => 0, 'multiplayer' => true]);
                break;

            case (2):
                $randomNumber = random_int(1, 21);
                $exercise = Exercise3P::where('id', $randomNumber)->first();
                return view('iPM-play-test', ['primarySixth' => $exercise, 'diagnostic' => 0, 'multiplayer' => true]);
                break;

            case (3):
                $randomNumber = random_int(1, 22);
                $exercise = Exercise4::where('id', $randomNumber)->first();
                return view('iPM-play-test', ['primarySixth' => $exercise, 'diagnostic' => 0, 'multiplayer' => true]);
                break;

            case (4):
                $randomNumber = random_int(1, 21);
                $exercise = Exercise5::where('id', $randomNumber)->first();
                return view('iPM-play-test', ['primarySixth' => $exercise, 'diagnostic' => 0, 'multiplayer' => true]);
                break;

            case (5):
                $randomNumber = random_int(1, 21);
                $exercise = Exercise6::where('id', $randomNumber)->first();
                return view('iPM-play-test', ['primarySixth' => $exercise, 'diagnostic' => 0, 'multiplayer' => true]);
                break;

            case (6):
                $randomNumber = random_int(1, 27);
                $exercise = Exercise1S::where('id', $randomNumber)->first();
                return view('iPM-play-test', ['primarySixth' => $exercise, 'diagnostic' => 0, 'multiplayer' => true]);
                break;

            case (7):
                $randomNumber = random_int(1, 18);
                $exercise = Exercise2S::where('id', $randomNumber)->first();
                return view('iPM-play-test', ['primarySixth' => $exercise, 'diagnostic' => 0, 'multiplayer' => true]);
                break;

            case (8):
                $randomNumber = random_int(1, 21);
                $exercise = Exercise3S::where('id', $randomNumber)->first();
                return view('iPM-play-test', ['primarySixth' => $exercise, 'diagnostic' => 0, 'multiplayer' => true]);
                break;

            default:
                $randomNumber = random_int(1, 21);
                $exercise = Exercise3S::where('id', $randomNumber)->first();
                return view('iPM-play-test', ['primarySixth' => $exercise, 'diagnostic' => 0, 'multiplayer' => true]);
        }
    }
    
}
