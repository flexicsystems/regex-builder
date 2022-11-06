<?php

namespace Flexic\RegexBuilder\Expr;

use Flexic\RegexBuilder\BuildInterface\Expression\Expression as ExpressionInterface;

class StartOfString extends ExpressionInterface
{
    public function __construct()
    {
        parent::__construct('^');
    }
}