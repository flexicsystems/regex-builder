<?php

namespace Flexic\RegexBuilder\Expr\Count;

use Flexic\RegexBuilder\BuildInterface\Expression\Counter as CounterInterface;
use Flexic\RegexBuilder\BuildInterface\Expression\Expr;

class ExactOf extends CounterInterface
{
    public function __construct(Expr $expression, int $exact)
    {
        parent::__construct($expression, $exact, 0);
    }
}