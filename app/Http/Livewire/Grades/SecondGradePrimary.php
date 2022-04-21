<?php
namespace App\Http\Livewire\Grades;

use Livewire\Component;
use App\Models\Exercise2P;

class SecondGradePrimary extends Component
{
    public function render()
    {
        $randomNumber = random_int(1, 22);
        $exercise = Exercise2P::where('id', $randomNumber)->first();
        return view('iPM-play-test',['primarySixth' => $exercise]);
    }
}
