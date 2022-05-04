<?php

namespace App\Observers;

use App\Events\RoomFinish;
use App\Events\Rooms;
use App\Events\RoomUser;
use App\Models\Room;

class RoomObserver
{

    public function updated(Room $room){
        if($room->score1 != 0 or $room->score1 != 0){
            event(new RoomUser($room));
        }
        else if($room->finish == 0){            
            event(new Rooms($room));
        }
        else if($room->finish == 1){            
            event(new RoomFinish($room));
        }
        
    }
}
