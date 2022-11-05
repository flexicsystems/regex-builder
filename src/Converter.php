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

final class Converter
{
    public function __construct(
        private Builder $builder,
    ) {
    }

    public function convert(): string
    {
        $pattern = '';

        /** @var Expr $expression */
        foreach ($this->builder->getExpressions()->get() as $expression) {
            $pattern .= $expression->getExpression();
        }

        return $pattern;
    }
}
