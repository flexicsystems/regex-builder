<?php

namespace Flexic\RegexBuilder\BuildInterface\Expression;

abstract class Group extends Expr
{
    /**
     * @var Expr[]
     */
    readonly private array $expressions;

    /** @param array<Expr> $expressions */
    public function __construct(
        array $expressions,
    ) {
        $this->expressions = $expressions;
    }

    public function __toString(): string
    {
        return \implode('', \array_map(static function (Expr $expr) {
            return (string) $expr;
        }, $this->expressions));
    }
}