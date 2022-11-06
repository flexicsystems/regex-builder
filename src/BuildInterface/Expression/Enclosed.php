<?php

namespace Flexic\RegexBuilder\BuildInterface\Expression;

abstract class Enclosed extends Expr
{
    public const START_DELIMITER = '(';
    public const END_DELIMITER = ')';
    public const FORMAT = self::START_DELIMITER . '%s' . self::END_DELIMITER;

    public function __construct(
        readonly private Expr $expression
    ) {
    }

    public function __toString(): string
    {
        return \sprintf(
            self::FORMAT,
            (string) $this->expression
        );
    }
}