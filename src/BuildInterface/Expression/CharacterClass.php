<?php

namespace Flexic\RegexBuilder\BuildInterface\Expression;

abstract class CharacterClass extends Expr
{
    private const FORMAT = '[[:%s:]]';

    public function __construct(
        readonly private Expr $expression,
    ) {
    }

    public function __toString(): string
    {
        return \sprintf(
            self::FORMAT,
            (string) $this->expression,
        );
    }
}