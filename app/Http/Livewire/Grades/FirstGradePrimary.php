<?php

namespace App\Http\Livewire\Grades;

use Livewire\Component;
use App\Models\Exercise1P;
use App\Models\Room;

class FirstGradePrimary extends Component
{
    public function render()
    {
        $randomNumber = random_int(1, 22);
        $exercise = Exercise1P::where('id', $randomNumber)->first();
        $room = Room::where('id', 99)->first();
        // return view('livewire.exercise.four-option',['primarySixth' => $exercise, 'diagnostic' => 0]);
        return view('iPM-play-test',['primarySixth' => $exercise, 'diagnostic' => 0, 'multiplayer' => 0, 'Room' => $room]);
    }
}
