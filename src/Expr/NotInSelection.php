<?php

namespace Flexic\RegexBuilder\Expr;

use Flexic\RegexBuilder\BuildInterface\Expression\Expr;
use Flexic\RegexBuilder\BuildInterface\Expression\Selection;
use Flexic\RegexBuilder\BuildInterface\Expression\Selection as SelectionInterface;

class NotInSelection extends SelectionInterface
{
    public function __construct(Expr $expression)
    {
        parent::__construct(
            new Group([
                new Expression('^'),
                $expression
            ])
        );
    }
}