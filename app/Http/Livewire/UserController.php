<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\User;

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
}
