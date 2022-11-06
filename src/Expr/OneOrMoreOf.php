<?php

namespace Flexic\RegexBuilder\Expr;

use Flexic\RegexBuilder\BuildInterface\Expression\Expr;
use Flexic\RegexBuilder\BuildInterface\Expression\Expression as ExpressionInterface;

class OneOrMoreOf extends ExpressionInterface
{
    public function __construct(Expr $expression)
    {
        parent::__construct(\sprintf('%s+', (string) $expression));
    }
}