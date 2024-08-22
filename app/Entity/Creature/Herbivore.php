<?php

namespace App\Entity\Creature;

class Herbivore extends Creature
{
    private const string HERBIVORE_FIELD = '🐑';

    #[\Override]
    public function makeMove(): void
    {
        // TODO: Implement makeMove() method.
    }

    #[\Override]
    public function render(): string
    {
        return self::HERBIVORE_FIELD;
    }
}