<?php

namespace App\Entity\Creature;

use App\Entity\Entity;

abstract class Creature extends Entity
{
    protected int $hp;
    protected int $speed;

    public abstract function makeMove(): void;
}