<?php

namespace Flexic\RegexBuilder\Expr;

use Flexic\RegexBuilder\BuildInterface\Expression\Expression as ExpressionInterface;

class Digit extends ExpressionInterface
{
    public function __construct(int|float $expression)
    {
        parent::__construct((int) $expression);
    }
}