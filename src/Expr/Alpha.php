<?php

namespace Flexic\RegexBuilder\Expr;

use Flexic\RegexBuilder\BuildInterface\Expression\Expression as ExpressionInterface;

class Alpha extends ExpressionInterface
{
    public function __construct(string $expression)
    {
        parent::__construct($expression);
    }
}