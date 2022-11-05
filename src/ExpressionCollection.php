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

use Flexic\RegexBuilder\Expression\Expr;

final class ExpressionCollection
{
    /**
     * @var array<Expr>
     */
    private array $expressions = [];

    public function __construct(array $expressions = [])
    {
        foreach ($expressions as $expression) {
            $this->add($expression);
        }
    }

    public function add(Expr $expression): void
    {
        $this->expressions[] = $expression;
    }

    public function get(): array
    {
        return $this->expressions;
    }
}
