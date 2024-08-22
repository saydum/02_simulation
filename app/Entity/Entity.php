<?php

namespace App\Entity;

use App\Coordinates;

abstract class Entity
{

    public function __construct(
       protected Coordinates $coordinates
    ) {}

    abstract public function render(): string;

    public function getCoordinates(): Coordinates
    {
        return $this->coordinates;
    }

    public function setCoordinates(Coordinates $coordinates): void
    {
        $this->coordinates = $coordinates;
    }
}