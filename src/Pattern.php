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

    public function add(Expr ...$expression): void
    {
        foreach ($expression as $expr) {
            $this->collection->add($expr);
        }
    }

    /** @return array<Expr> */
    public function all(): array
    {
        return $this->collection->all();
    }
}