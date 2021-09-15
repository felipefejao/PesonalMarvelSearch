<?php


namespace App\Services\Character;


use App\Repositories\Character\CharacterRepositoryContract;
use App\Repositories\Comic\ComicRepositoryContract;
use App\Repositories\Event\EventRepositoryContract;
use App\Repositories\Serie\SerieRepository;
use App\Repositories\Story\StoryRepository;

class CharacterService implements CharacterServiceContract
{

    private $characterRepository;
    private $comicRepository;
    private $eventRepository;
    private $serieRepository;
    private $storyRepository;

    public function __construct(
        CharacterRepositoryContract $characterRepository,
        ComicRepositoryContract  $comicRepository,
        EventRepositoryContract $eventRepository,
        SerieRepository $serieRepository,
        StoryRepository $storyRepository
    )
    {
        $this->characterRepository = $characterRepository;
        $this->comicRepository = $comicRepository;
        $this->eventRepository = $eventRepository;
        $this->serieRepository = $serieRepository;
        $this->storyRepository = $storyRepository;
    }

    public function getAll()
    {
        return $this->characterRepository->getAll();
    }

    public function get(int $id)
    {
        return $this->characterRepository->get($id);
    }

    public function getComics(int $id)
    {
        return $this->comicRepository->get_all($id);
    }

    public function getEvents(int $id)
    {
        return $this->eventRepository->get_all($id);
    }

    public function getSeries(int $id)
    {
        return $this->serieRepository->get_all($id);
    }

    public function getStories(int $id)
    {
        return $this->storyRepository->get_all($id);
    }
}
