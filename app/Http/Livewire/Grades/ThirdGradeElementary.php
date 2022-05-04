<?php
namespace App\Http\Livewire\Grades;

use Livewire\Component;
use App\Models\Exercise3S;
use App\Models\Room;

class ThirdGradeElementary extends Component
{
    public function render()
    {
        $randomNumber = random_int(1, 21);
        $exercise = Exercise3S::where('id', $randomNumber)->first();
        $room = Room::where('id', 99)->first();
        // return view('livewire.exercise.four-option',['primarySixth' => $exercise, 'diagnostic' => 0]);
        return view('iPM-play-test',['primarySixth' => $exercise, 'diagnostic' => 0, 'multiplayer' => 0, 'Room' => $room]);

    }
}
