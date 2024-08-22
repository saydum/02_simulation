<?php

namespace App\Entity\Static;

use App\Entity\Entity;

class Rock extends Entity
{
    private const string ROCK_FIELD = '🪨';
    #[\Override]
    public function render(): string
    {
       return self::ROCK_FIELD;
    }
}