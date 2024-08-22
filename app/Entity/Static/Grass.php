<?php

namespace App\Entity\Static;

use App\Entity\Entity;

class Grass extends Entity
{
    private const string GRASS_FIELD = '☘️';

    #[\Override]
    public function render(): string
    {
        return self::GRASS_FIELD;
    }
}