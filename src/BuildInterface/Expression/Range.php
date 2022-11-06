<?php

namespace Flexic\RegexBuilder\BuildInterface\Expression;

abstract class Range extends Expr
{
    public function __construct(
        readonly private Expr $startExpression,
        readonly private Expr $endExpression,
    ) {
    }

    public function __toString(): string
    {
        return \sprintf(
            '%s-%s',
            (string) $this->startExpression,
            (string) $this->endExpression,
        );
    }
}