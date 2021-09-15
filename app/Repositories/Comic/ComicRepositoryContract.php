<?php


namespace App\Repositories\Comic;


interface ComicRepositoryContract
{
    public function get_all(int $characterId);

}
