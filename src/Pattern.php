<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\RegexBuilder;

use Flexic\RegexBuilder\BuildInterface\Collection;
use Flexic\RegexBuilder\BuildInterface\Expression\Expr;

final class Pattern
{
    private readonly Collection $collection;

    /**
     * @param Expr[] $expressions
     */
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

    /**
     * @return array<Expr>
     */
    public function all(): array
    {
        return $this->collection->all();
    }
}
