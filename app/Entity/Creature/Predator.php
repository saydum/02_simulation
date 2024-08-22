<?php

namespace App\Entity\Creature;

class Predator extends Creature
{
    private const string PREDATOR_FIELD = '🐺';

    #[\Override]
    public function makeMove(): void
    {
        // TODO: Implement makeMove() method.
    }

    #[\Override]
    public function render(): string
    {
        return self::PREDATOR_FIELD;
    }
}