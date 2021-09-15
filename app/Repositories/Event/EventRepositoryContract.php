<?php


namespace App\Repositories\Event;


interface EventRepositoryContract
{
    public function get_all(int $characterId);
}
