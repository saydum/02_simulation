<?php

namespace App\Entity\Static;

use App\Entity\Entity;

class Tree extends Entity
{
    private const string TREE_FIELD = '🌴';

    #[\Override]
    public function render(): string
    {
        return self::TREE_FIELD;
    }
}