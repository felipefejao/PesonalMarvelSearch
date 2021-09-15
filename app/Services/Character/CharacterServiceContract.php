<?php


namespace App\Services\Character;


interface CharacterServiceContract
{
    public function getAll();

    public function get(int $id);

    public function getComics(int $id);

    public function getEvents(int $id);

    public function getSeries(int $id);

    public function getStories(int $id);

}
