<?php

namespace App\Http\Livewire\Exercise;

use Livewire\Component;
use App\Models\Exercise6;

class FourOption extends Component
{
    public function render()
    {
        $exercise = Exercise6::where('id', 9)->first();
        return view('livewire.exercise.four-option',['primarySixth' => $exercise]);
    }
}
