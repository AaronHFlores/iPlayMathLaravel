<?php
namespace App\Http\Livewire\Grades;

use Livewire\Component;
use App\Models\Exercise4;

class FourthGradePrimary extends Component
{
    public function render()
    {
        $randomNumber = random_int(1, 22);
        $exercise = Exercise4::where('id', $randomNumber)->first();
        return view('iPM-play-test',['primarySixth' => $exercise]);
    }
}
