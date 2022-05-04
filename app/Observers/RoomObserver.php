<?php

namespace App\Observers;

use App\Events\RoomFinish;
use App\Events\Rooms;
use App\Models\Room;

class RoomObserver
{

    public function updated(Room $room){
        if($room->score1 != 0 and $room->score1 != 0){
            event(new Rooms($room));
        }
        else if($room->finish == 0){            
            event(new Rooms($room));
        }
        else if($room->finish == 1){            
            event(new RoomFinish($room));
        }
        else if($room->finish == null && $room->user1 == null && $room->user2 == null && $room->score1 == null && $room->score2 == null){
            event(new RoomFinish($room));
        }
        
    }
}
