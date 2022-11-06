<?php

namespace Flexic\RegexBuilder\Expr;

use Flexic\RegexBuilder\BuildInterface\Expression\Expression as ExpressionInterface;

class Alnum extends ExpressionInterface
{
    public function __construct(string|int|float $expression)
    {
        parent::__construct((string) $expression);
    }
}