<?php

namespace App;

use App\Entity\Entity;
use Ds\Map as HashMap;

class Map
{
    private int $x;
    private int $y;
    private HashMap $entities;

    private const string ELEMENT_FIELD = '🟫';

    public function __construct(int $x, int $y,)
    {
        $this->x = $x;
        $this->y = $y;
        $this->entities = new HashMap();
    }

    public function addEntity(Entity $entity): void
    {
        $key = $this->getKey($entity->getCoordinates()->getX(), $entity->getCoordinates()->getY());
        $this->entities->put($key, $entity);
    }

    public function removeEntity(int $x, int $y): void
    {
        $key = $this->getKey($x, $y);
        $this->entities->remove($key);
    }

    public function render(): void
    {
        for ($y = 0; $y < $this->y; $y++) {
            for ($x = 0; $x < $this->x; $x++) {
                $key = $this->getKey($x, $y);

                if ($this->entities->hasKey($key)) {
                    echo $this->entities->get($key)->render();
                } else {
                    echo self::ELEMENT_FIELD;
                }
            }
            echo PHP_EOL;
        }
    }

    private function getKey(int $x,  int $y): string
    {
        return "$x:$y";
    }
}