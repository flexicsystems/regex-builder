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

abstract class AbstractBuilder implements BuilderInterface
{
    private ExpressionCollection $expressionCollection;

    final public function __construct()
    {
        $this->expressionCollection = new ExpressionCollection();
    }

    public function getExpressions(): ExpressionCollection
    {
        return $this->expressionCollection;
    }

    protected function add(Expr $expression): void
    {
        $this->expressionCollection->add($expression);
    }
}
