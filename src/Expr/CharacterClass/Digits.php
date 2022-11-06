<?php

namespace Flexic\RegexBuilder\Expr\CharacterClass;

use Flexic\RegexBuilder\BuildInterface\Expression\CharacterClass as CharacterClassInterface;
use Flexic\RegexBuilder\Expr\Expression;

class Digits extends CharacterClassInterface
{
    public function __construct()
    {
        parent::__construct(
            new Expression('digit'),
        );
    }
}