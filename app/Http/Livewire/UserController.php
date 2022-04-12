<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\User;

class UserController extends Component
{
    public function updateScore($points,$trys)
    {
        $User = Auth::user();
        $User->score=$User->score+$points;
        $User->save();
        dd($trys);
        return redirect()->route('play');
    }
}
