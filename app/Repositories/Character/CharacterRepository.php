<?php


namespace App\Repositories\Character;


use App\Models\Character;

class CharacterRepository implements CharacterRepositoryContract
{

    public function getAll()
    {
        return Character::all();
    }

    public function get(int $id)
    {
        return Character::where('id', $id)->get();
    }
}
