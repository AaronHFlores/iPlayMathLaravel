<?php

namespace App\Observers;

use App\Events\Rooms;
use App\Models\User;

class RoomObserver
{
    public $cont = 0;

    public function updated(User $user){
        $this->cont +=1;
        event(new Rooms($user));
    }
}
