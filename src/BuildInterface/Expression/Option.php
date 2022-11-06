<?php

namespace Flexic\RegexBuilder\BuildInterface\Expression;

abstract class Option extends Expr
{
    public const DIVIDER = '|';

    readonly private array $expressions;

    /** @param array<Expr> $expressions */
    public function __construct(
        array $expressions
    ) {
        $this->expressions = $expressions;
    }

    public function __toString(): string
    {
        return \implode(self::DIVIDER, \array_map(static function (Expr $expr): string {
            return (string) $expr;
        }, $this->expressions));
    }
}