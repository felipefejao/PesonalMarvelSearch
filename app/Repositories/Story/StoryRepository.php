<?php


namespace App\Repositories\Story;


use App\Models\Story;

class StoryRepository implements StoryRepositoryContract
{
    public function get_all(int $characterId)
    {
        return Story::where('character_id', $characterId)->get();

    }
}
