<?php

namespace Flexic\RegexBuilder\BuildInterface\Expression;

abstract class Counter extends Expr
{
    public const START_DELIMITER = '{';
    public const END_DELIMITER = '}';
    public const FORMAT = '%s' . self::START_DELIMITER . '%s%s' . self::END_DELIMITER;

    public function __construct(
        readonly private Expr $expression,
        readonly private ?int $min,
        readonly private ?int $max
    ) {
    }

    public function __toString(): string
    {
        return \sprintf(
            self::FORMAT,
            (string) $this->expression,
            (string) ($this->min ?? ''),
            (string) (($this->max) === 0 ? '' : \sprintf(',%s', (string) ($this->max ?? '')))
        );
    }
}