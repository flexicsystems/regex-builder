<?php

namespace Flexic\RegexBuilder\BuildInterface\Expression;

abstract class Expression extends Expr
{
    readonly private string $expression;

    public function __construct(string $expression) {
        $this->expression = $expression;
    }

    public function __toString(): string
    {
        return $this->expression;
    }
}