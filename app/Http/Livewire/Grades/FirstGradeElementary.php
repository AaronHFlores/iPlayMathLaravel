<?php

namespace App\Http\Livewire\Grades;

use Livewire\Component;
use App\Models\Exercise1S;
use App\Models\Room;

class FirstGradeElementary extends Component
{
    public function render()
    {
        $randomNumber = random_int(1, 27);
        $exercise = Exercise1S::where('id', $randomNumber)->first();
        $room = Room::where('id', 99)->first();
        return view('iPM-play-test',['primarySixth' => $exercise, 'diagnostic' => 0, 'multiplayer' => 0, 'Room' => $room]);
    }
}
