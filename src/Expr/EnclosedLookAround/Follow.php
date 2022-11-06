<?php

namespace Flexic\RegexBuilder\Expr\LookAround;

use Flexic\RegexBuilder\BuildInterface\Expression\Enclosed as EnclosedInterface;
use Flexic\RegexBuilder\BuildInterface\Expression\Expr;
use Flexic\RegexBuilder\Expr\Expression;
use Flexic\RegexBuilder\Expr\Group;

class Follow extends EnclosedInterface
{
    public function __construct(Expr $expression)
    {
        parent::__construct(
            new Group([
                new Expression('?<='),
                $expression,
            ])
        );
    }
}