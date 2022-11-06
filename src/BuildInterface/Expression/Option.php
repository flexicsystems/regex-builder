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

abstract class Option extends Expr
{
    public const DIVIDER = '|';

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
        return \implode(self::DIVIDER, \array_map(static function (Expr $expr): string {
            return (string) $expr;
        }, $this->expressions));
    }
}
