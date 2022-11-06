<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\RegexBuilder\BuildInterface\Expression;

abstract class Group extends Expr
{
    /**
     * @var Expr[]
     */
    private readonly array $expressions;

    /**
     * @param array<Expr> $expressions
     */
    public function __construct(
        array $expressions,
    ) {
        $this->expressions = $expressions;
    }

    public function __toString(): string
    {
        return \implode('', \array_map(static function (Expr $expr) {
            return (string) $expr;
        }, $this->expressions));
    }
}
