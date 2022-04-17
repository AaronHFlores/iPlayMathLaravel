<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
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


class UserController extends Component
{
    public function updateScore($trys, $minutes, $seconds, $success)
    {
        $time= (((int)$minutes *60) + (int)$seconds);
        $User = Auth::user();
        $User->score=$User->score+$trys;
        $User->save();
        return redirect()->route('play');
    }

    public function DiagnosticTask()
    {
        $User = Auth::user();
        switch($User->dtask) {
            case(1):
                $randomNumber = random_int(1, 22);
                $exercise = Exercise1P::where('id', $randomNumber)->first();
                return view('livewire.exercise.four-option',['primarySixth' => $exercise,'diagnostic' => true]);
                break;

            case(2):
                $randomNumber = random_int(1, 22);
                $exercise = Exercise1P::where('id', $randomNumber)->first();
                return view('livewire.exercise.four-option',['primarySixth' => $exercise,'diagnostic' => true]);
                break;

            case(3):
                $randomNumber = random_int(1, 22);
                $exercise = Exercise2P::where('id', $randomNumber)->first();
                return view('livewire.exercise.four-option',['primarySixth' => $exercise,'diagnostic' => true]);
                break;

            case(4):
                $randomNumber = random_int(1, 22);
                $exercise = Exercise2P::where('id', $randomNumber)->first();
                return view('livewire.exercise.four-option',['primarySixth' => $exercise,'diagnostic' => true]);
                break;

            case(5):
                $randomNumber = random_int(1, 21);
                $exercise = Exercise3P::where('id', $randomNumber)->first();
                return view('livewire.exercise.four-option',['primarySixth' => $exercise,'diagnostic' => true]);
                break;

            case(6):
                $randomNumber = random_int(1, 21);
                $exercise = Exercise3P::where('id', $randomNumber)->first();
                return view('livewire.exercise.four-option',['primarySixth' => $exercise,'diagnostic' => true]);
                break;

            case(7):
                $randomNumber = random_int(1, 22);
                $exercise = Exercise4::where('id', $randomNumber)->first();
                return view('livewire.exercise.four-option',['primarySixth' => $exercise,'diagnostic' => true]);
                break;

            case(8):
                $randomNumber = random_int(1, 22);
                $exercise = Exercise4::where('id', $randomNumber)->first();
                return view('livewire.exercise.four-option',['primarySixth' => $exercise,'diagnostic' => true]);
                break;

            case(9):
                $randomNumber = random_int(1, 21);
                $exercise = Exercise5::where('id', $randomNumber)->first();
                return view('livewire.exercise.four-option',['primarySixth' => $exercise,'diagnostic' => true]);
                break;

            case(10):
                $randomNumber = random_int(1, 21);
                $exercise = Exercise5::where('id', $randomNumber)->first();
                return view('livewire.exercise.four-option',['primarySixth' => $exercise,'diagnostic' => true]);
                break;

            case(11):
                $randomNumber = random_int(1, 21);
                $exercise = Exercise6::where('id', $randomNumber)->first();
                return view('livewire.exercise.four-option',['primarySixth' => $exercise,'diagnostic' => true]);
                break;

            case(12):
                $randomNumber = random_int(1, 21);
                $exercise = Exercise6::where('id', $randomNumber)->first();
                return view('livewire.exercise.four-option',['primarySixth' => $exercise,'diagnostic' => true]);
                break;

            case(13):
                $randomNumber = random_int(1, 27);
                $exercise = Exercise1S::where('id', $randomNumber)->first();
                return view('livewire.exercise.four-option',['primarySixth' => $exercise,'diagnostic' => true]);
                break;

            case(14):
                $randomNumber = random_int(1, 27);
                $exercise = Exercise1S::where('id', $randomNumber)->first();
                return view('livewire.exercise.four-option',['primarySixth' => $exercise,'diagnostic' => true]);
                break;

            case(15):
                $randomNumber = random_int(1, 18);
                $exercise = Exercise2S::where('id', $randomNumber)->first();
                return view('livewire.exercise.four-option',['primarySixth' => $exercise,'diagnostic' => true]);
                break;

            case(16):
                $randomNumber = random_int(1, 18);
                $exercise = Exercise2S::where('id', $randomNumber)->first();
                return view('livewire.exercise.four-option',['primarySixth' => $exercise,'diagnostic' => true]);
                break;

            case(17):
                $randomNumber = random_int(1, 21);
                $exercise = Exercise3S::where('id', $randomNumber)->first();
                return view('livewire.exercise.four-option',['primarySixth' => $exercise,'diagnostic' => true]);
                break;

            case(18):
                $randomNumber = random_int(1, 21);
                $exercise = Exercise3S::where('id', $randomNumber)->first();
                return view('livewire.exercise.four-option',['primarySixth' => $exercise,'diagnostic' => true]);
                break;

            default:
                return view('livewire.test',);
        }
    }

    public function updateDiagnosticScore($trys, $minutes, $seconds, $success)
    {
        $time= (((int)$minutes *60) + (int)$seconds);
        $User = Auth::user();
        if($User->dtask<=17){
            $User->score=$User->score+($trys*10);
            $User->dtask=$User->dtask+1;
            $User->save();
            return redirect()->route('diagnosticTask');

        }
        else{
            $User->score=$User->score+($trys*10);
            $User->diagnosed=true;
            $User->save();
            return redirect()->route('recap');
        }

    }
    public function Recap()
    {
        return view('test');
    }
}
