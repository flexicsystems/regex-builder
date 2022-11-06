<?php

namespace Flexic\RegexBuilder;

use Flexic\RegexBuilder\BuildInterface\Collection;
use Flexic\RegexBuilder\BuildInterface\Expression\Expr;

class Pattern
{
    readonly private Collection $collection;

    public function __construct(array $expressions = [])
    {
        $this->collection = new Collection($expressions);
    }

    public function add(Expr $expression): void
    {
        $this->collection->add($expression);
    }
}