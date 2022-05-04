<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Livewire\Component;
use App\Models\User;
use App\Models\Room;
use App\Models\Exercise1P;
use App\Models\Exercise2P;
use App\Models\Exercise3P;
use App\Models\Exercise4;
use App\Models\Exercise5;
use App\Models\Exercise6;
use App\Models\Exercise1S;
use App\Models\Exercise2S;
use App\Models\Exercise3S;


class UserController extends Component
{
    public function EditUser()
    {
        $User = Auth::user();
        // return view('livewire.user.edit-user',['User' => $User]);
        return view('iPM-profile',['User' => $User]);
    }

    public function UpdateUser(Request $request, User $User)
    {

        $User->name= $request->name;
        $User->age= $request->age;
        $User->email= $request->email;

        $User->save();
        return redirect()->route('play');
    }

    public function checkRoom(User $user){  
        $room = Room::where('name', $user->room)->first();
        if($room != null){
            if(($user->id == $room->user1 or $user->id == $room->user2) && $room->finish == 0){                        
                $room->finish = 1;
                $room->save();
                $user->room = null;
                $user->save();
            }
            else if(($user->id == $room->user1 or $user->id == $room->user2) && $room->finish == 1){                        
                $room->user1 = null;
                $room->user2 = null;
                $room->score1 = null;
                $room->score2 = null;
                $room->finish = null;
            }
        }        
    }
    public function updateScore($trys, $minutes, $seconds, $success)
    {
        $time= (((int)$minutes *60) + (int)$seconds);
        $User = Auth::user();
        $ch = curl_init();
        //URL para la api python
        curl_setopt($ch, CURLOPT_URL, 'http://44.197.27.137/results?finished=' . $success .'&time='. $time .'&attempts='. $trys);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $data = json_decode(curl_exec($ch));
        if($data == null){
            $url = '/UpdateScore/'.$trys.'/'.$minutes.'/'.$seconds.'/1';
            return view('error',['url' => $url]);
        }
        $User->score=$User->score+intval($data[0]);
        if($User->score<0){
            $User->score=0;
        }
        $User->save();

        curl_close($ch);
        return redirect()->route('play');
    }

    public function DiagnosticTask()
    {
        $User = Auth::user();
        $room = Room::where('id', 99)->first();
        switch($User->dtask) {
            case(1):
                $randomNumber = random_int(1, 22);
                $exercise = Exercise1P::where('id', $randomNumber)->first();
                return view('iPM-play-test',['primarySixth' => $exercise,'diagnostic' => true, 'multiplayer' => 0, 'Room' => $room, 'Room' => $room]);
                break;

            case(2):
                $randomNumber = random_int(1, 22);
                $exercise = Exercise1P::where('id', $randomNumber)->first();
                return view('iPM-play-test',['primarySixth' => $exercise,'diagnostic' => true, 'multiplayer' => 0, 'Room' => $room, 'Room' => $room]);
                break;

            case(3):
                $randomNumber = random_int(1, 22);
                $exercise = Exercise2P::where('id', $randomNumber)->first();
                return view('iPM-play-test',['primarySixth' => $exercise,'diagnostic' => true, 'multiplayer' => 0, 'Room' => $room, 'Room' => $room]);
                break;

            case(4):
                $randomNumber = random_int(1, 22);
                $exercise = Exercise2P::where('id', $randomNumber)->first();
                return view('iPM-play-test',['primarySixth' => $exercise,'diagnostic' => true, 'multiplayer' => 0, 'Room' => $room, 'Room' => $room]);
                break;

            case(5):
                $randomNumber = random_int(1, 21);
                $exercise = Exercise3P::where('id', $randomNumber)->first();
                return view('iPM-play-test',['primarySixth' => $exercise,'diagnostic' => true, 'multiplayer' => 0, 'Room' => $room, 'Room' => $room]);
                break;

            case(6):
                $randomNumber = random_int(1, 21);
                $exercise = Exercise3P::where('id', $randomNumber)->first();
                return view('iPM-play-test',['primarySixth' => $exercise,'diagnostic' => true, 'multiplayer' => 0, 'Room' => $room, 'Room' => $room]);
                break;

            case(7):
                $randomNumber = random_int(1, 22);
                $exercise = Exercise4::where('id', $randomNumber)->first();
                return view('iPM-play-test',['primarySixth' => $exercise,'diagnostic' => true, 'multiplayer' => 0, 'Room' => $room]);
                break;

            case(8):
                $randomNumber = random_int(1, 22);
                $exercise = Exercise4::where('id', $randomNumber)->first();
                return view('iPM-play-test',['primarySixth' => $exercise,'diagnostic' => true, 'multiplayer' => 0, 'Room' => $room]);
                break;

            case(9):
                $randomNumber = random_int(1, 21);
                $exercise = Exercise5::where('id', $randomNumber)->first();
                return view('iPM-play-test',['primarySixth' => $exercise,'diagnostic' => true, 'multiplayer' => 0, 'Room' => $room]);
                break;

            case(10):
                $randomNumber = random_int(1, 21);
                $exercise = Exercise5::where('id', $randomNumber)->first();
                return view('iPM-play-test',['primarySixth' => $exercise,'diagnostic' => true, 'multiplayer' => 0, 'Room' => $room]);
                break;

            case(11):
                $randomNumber = random_int(1, 21);
                $exercise = Exercise6::where('id', $randomNumber)->first();
                return view('iPM-play-test',['primarySixth' => $exercise,'diagnostic' => true, 'multiplayer' => 0, 'Room' => $room]);
                break;

            case(12):
                $randomNumber = random_int(1, 21);
                $exercise = Exercise6::where('id', $randomNumber)->first();
                return view('iPM-play-test',['primarySixth' => $exercise,'diagnostic' => true, 'multiplayer' => 0, 'Room' => $room]);
                break;

            case(13):
                $randomNumber = random_int(1, 27);
                $exercise = Exercise1S::where('id', $randomNumber)->first();
                return view('iPM-play-test',['primarySixth' => $exercise,'diagnostic' => true, 'multiplayer' => 0, 'Room' => $room]);
                break;

            case(14):
                $randomNumber = random_int(1, 27);
                $exercise = Exercise1S::where('id', $randomNumber)->first();
                return view('iPM-play-test',['primarySixth' => $exercise,'diagnostic' => true, 'multiplayer' => 0, 'Room' => $room]);
                break;

            case(15):
                $randomNumber = random_int(1, 18);
                $exercise = Exercise2S::where('id', $randomNumber)->first();
                return view('iPM-play-test',['primarySixth' => $exercise,'diagnostic' => true, 'multiplayer' => 0, 'Room' => $room]);
                break;

            case(16):
                $randomNumber = random_int(1, 18);
                $exercise = Exercise2S::where('id', $randomNumber)->first();
                return view('iPM-play-test',['primarySixth' => $exercise,'diagnostic' => true, 'multiplayer' => 0, 'Room' => $room]);
                break;

            case(17):
                $randomNumber = random_int(1, 21);
                $exercise = Exercise3S::where('id', $randomNumber)->first();
                return view('iPM-play-test',['primarySixth' => $exercise,'diagnostic' => true, 'multiplayer' => 0, 'Room' => $room]);
                break;

            case(18):
                $randomNumber = random_int(1, 21);
                $exercise = Exercise3S::where('id', $randomNumber)->first();
                return view('iPM-play-test',['primarySixth' => $exercise,'diagnostic' => true, 'multiplayer' => 0, 'Room' => $room]);
                break;

            default:
                return view('livewire.test',);
        }
    }

    public function updateDiagnosticScore($trys, $minutes, $seconds, $success,$skip)
    {
        $time= (((int)$minutes *60) + (int)$seconds);
        $User = Auth::user();
        if($User->dtask<=17){
            if($skip){
                $ch = curl_init();
                //URL para la api python
                curl_setopt($ch, CURLOPT_URL, 'http://44.197.27.137/results?finished=' . $success .'&time='. $time .'&attempts='. $trys);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_HEADER, 0);
                $data = json_decode(curl_exec($ch));
                if($data == null){
                    $url = '/updatediagnosticscore/'.$trys.'/'.$minutes.'/'.$seconds.'/1/1';
                    return view('error',['url' => $url]);
                }
                $User->score=$User->score+intval($data[0]*10);
                if($User->score<0){
                    $User->score=0;
                }
                $User->dtask=$User->dtask+1;
                $User->save();
                curl_close($ch);

                return redirect()->route('diagnosticTask');
            }
            else{
                $User->dtask=$User->dtask+1;
                $User->save();
                return redirect()->route('diagnosticTask');
            }


        }
        else{
            if ($skip){
                $ch = curl_init();
                //URL para la api python
                curl_setopt($ch, CURLOPT_URL, 'http://44.197.27.137/results?finished=' . $success .'&time='. $time .'&attempts='. $trys);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_HEADER, 0);
                $data = json_decode(curl_exec($ch));
                $User->score=$User->score+intval($data[0]*10);
                if($User->score<0){
                    $User->score=0;
                }
                $User->diagnosed=true;
                $User->save();
                curl_close($ch);

                return redirect()->route('recap');
            }
            else{
                $User->diagnosed=true;
                $User->save();
                return redirect()->route('recap');
            }

        }

    }
    public function Recap()
    {
        // return view('test');
        return view('iPM-recap');

    }
}
