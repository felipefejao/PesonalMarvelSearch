<?php


namespace App\Repositories\Character;


interface CharacterRepositoryContract
{
    public function getAll();
    public function get(int $id);


}
