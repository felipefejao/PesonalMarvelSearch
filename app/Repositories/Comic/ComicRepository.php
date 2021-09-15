<?php


namespace App\Repositories\Comic;


use App\Models\Comic;

class ComicRepository implements ComicRepositoryContract
{

    public function get_all(int $characterId)
    {
        return Comic::where('character_id', $characterId)->get();

    }
}
