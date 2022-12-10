<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\RegexBuilder\BuildInterface;

use Flexic\RegexBuilder\Abstracts\Expr;

final class Collection
{
    private array $collection = [];

    /**
     * @param array<Expr> $collection
     */
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

    /**
     * @return array<Expr>
     */
    public function all(): array
    {
        return $this->collection;
    }
}
