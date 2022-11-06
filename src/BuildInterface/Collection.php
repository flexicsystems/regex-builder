<?php

namespace Flexic\RegexBuilder\BuildInterface;

use Flexic\RegexBuilder\BuildInterface\Expression\Expr;

class Collection
{
    private array $collection = [];

    /** @param array<Expr> $collection */
    public function __construct(array $collection = [])
    {
        foreach ($collection as $expr) {
            $this->add($expr);
        }
    }

    public function add(Expr $expr): void
    {
        $this->collection[] = $expr;
    }

    public function __toString(): string
    {
        return \implode('', \array_map(static function (Expr $expr) {
            return (string) $expr;
        }, $this->collection));
    }
}