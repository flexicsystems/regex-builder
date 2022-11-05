<?php

namespace Flexic\RegexBuilder\Expression;

class Expression extends Expr
{
    public function __construct(string $expression)
    {
        parent::__construct($expression, []);
    }
}