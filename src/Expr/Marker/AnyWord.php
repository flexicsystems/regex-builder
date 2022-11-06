<?php

namespace Flexic\RegexBuilder\Expr\Marker;

use Flexic\RegexBuilder\BuildInterface\Expression\Expression as ExpressionInterface;

class AnyWord extends ExpressionInterface
{
    public function __construct()
    {
        parent::__construct('\w');
    }
}