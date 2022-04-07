<?php

namespace App\Http\Livewire\Grades;

use Livewire\Component;
use App\Models\Exercise1P;

class FirstGradePrimary extends Component
{
    public function render()
    {
        $randomNumber = random_int(1, 22);
        $exercise = Exercise1P::where('id', $randomNumber)->first();
        return view('livewire.exercise.four-option',['primarySixth' => $exercise]);
    }
}
