<?php
namespace App\Http\Livewire\Grades;

use Livewire\Component;
use App\Models\Exercise6;

class SixthGradePrimary extends Component
{
    public function render()
    {
        $randomNumber = random_int(1, 22);
        $exercise = Exercise6::where('id', $randomNumber)->first();
        if($exercise->type==2){
            return view('livewire.exercise.four-option',['primarySixth' => $exercise]);
        }
    }
}
