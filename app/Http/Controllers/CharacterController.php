<?php

namespace App\Http\Controllers;

use App\Services\Character\CharacterServiceContract;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    private $characterService;

    public function __construct(CharacterServiceContract $characterServiceContract)
    {
        $this->characterService = $characterServiceContract;
    }

    public function get_all()
    {
        try {
            $character = $this->characterService->getAll();

            if ($character->count() == 0) {
                throw new \Exception('Nenhum herói encontrado');
            }


            return response()->json([
                'data' => $character
            ], 200);
        } catch (\Throwable $exception){
            return response()->json([
                'error' => $exception->getMessage()
            ]);
        }
    }

    public function get($id)
    {
        try {
            $character = $this->characterService->get($id);

            if ($character->count() == 0) {
                throw new \Exception('Nenhum herói encontrado');
            }

            return response()->json([
                'data' => $character
            ], 200);
        } catch (\Throwable $exception){
            return response()->json([
                'error' => $exception->getMessage()
            ]);
        }
    }

    public function getcomics($id)
    {
        try {
            $comic = $this->characterService->getComics($id);

            if ($comic->count() == 0) {
                throw new \Exception('Nenhum quadrinho encontrado');
            }

            return response()->json([
                'data' => $comic
            ], 200);
        } catch (\Throwable $exception){
            return response()->json([
                'error' => $exception->getMessage()
            ]);
        }
    }

    public function getevents($id)
    {
        try {
            $events = $this->characterService->getEvents($id);

            if ($events->count() == 0) {
                throw new \Exception('Nenhum evento encontrado');
            }

            return response()->json([
                'data' => $events
            ], 200);
        } catch (\Throwable $exception){
            return response()->json([
                'error' => $exception->getMessage()
            ]);
        }
    }

    public function getseries($id)
    {
        try {
            $series = $this->characterService->getSeries($id);


            if ($series->count() == 0) {
                throw new \Exception('Nenhuma serie encontrada');
            }

            return response()->json([
                'data' => $series
            ], 200);
        } catch (\Throwable $exception){
            return response()->json([
                'error' => $exception->getMessage()
            ]);
        }
    }

    public function getstories($id)
    {
        try {
            $stories = $this->characterService->getStories($id);

            if ($stories->count() == 0) {
                throw new \Exception('Nenhuma história encontrada');
            }

            return response()->json([
                'data' => $stories
            ], 200);
        } catch (\Throwable $exception){
            return response()->json([
                'error' => $exception->getMessage()
            ]);
        }
    }
}
