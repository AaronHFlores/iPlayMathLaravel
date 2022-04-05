<?php
namespace App\Http\Livewire\Grades;

use Livewire\Component;
use App\Models\Exercise3P;

class ThirdGradePrimary extends Component
{
    public function render()
    {
        $randomNumber = random_int(1, 21);
        $exercise = Exercise3P::where('id', $randomNumber)->first();
        return view('livewire.exercise.four-option',['primarySixth' => $exercise]);
        
    }
}
