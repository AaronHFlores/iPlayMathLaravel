<?php

namespace App\Observers;

use App\Events\Rooms;
use App\Models\User;

class RoomObserver
{
    

    public function updated(User $user){
        
        event(new Rooms($user));
    }
}
