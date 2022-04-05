<?php
namespace App\Http\Livewire\Grades;

use Livewire\Component;
use App\Models\Exercise2S;

class SecondGradeElementary extends Component
{
    public function render()
    {
        $randomNumber = random_int(1, 18);
        $exercise = Exercise2S::where('id', $randomNumber)->first();
        return view('livewire.exercise.four-option',['primarySixth' => $exercise]);
    }
}
