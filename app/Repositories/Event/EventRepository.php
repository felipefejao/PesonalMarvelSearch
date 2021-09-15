<?php


namespace App\Repositories\Event;

use App\Models\Event;

class EventRepository implements EventRepositoryContract
{
    public function get_all(int $characterId)
    {
        return Event::where('character_id', $characterId)->get();
    }
}
