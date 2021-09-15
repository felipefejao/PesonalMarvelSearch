<?php


namespace App\Repositories\Story;


interface StoryRepositoryContract
{
    public function get_all(int $characterId);
}
