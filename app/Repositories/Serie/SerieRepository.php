<?php


namespace App\Repositories\Serie;


use App\Models\Serie;

class SerieRepository implements SerieRepositoryContract
{
    public function get_all(int $characterId)
    {
        return Serie::where('character_id', $characterId)->get();

    }
}
