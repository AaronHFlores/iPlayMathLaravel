<?php

namespace App\Http\Livewire\Exercise;

use Livewire\Component;
use App\Models\Exercise6;
use Database\Seeders\primarySixthSeeder;

class FourOption extends Component
{
    public $type;

    public function mount($type)
    {
        $this->type = $type;
    }
    public function render()
    {        
        $exercise = Exercise6::where('type', 2)->first();
        \Log::info($exercise);

        return view('livewire.exercise.four-option',['primarySixth' => $exercise]);
    }
}
