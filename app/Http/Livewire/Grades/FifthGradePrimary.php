<?php
namespace App\Http\Livewire\Grades;

use Livewire\Component;
use App\Models\Exercise5;

class FifthGradePrimary extends Component
{
    public function render()
    {
        $randomNumber = random_int(1, 21);
        $exercise = Exercise5::where('id', $randomNumber)->first();
        return view('iPM-play-test',['primarySixth' => $exercise]);
    }
}
