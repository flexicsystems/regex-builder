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

use Flexic\RegexBuilder\Abstracts\Expr;

final class Pattern
{
    private array $expressions;

    /**
     * @param Expr[] $expressions
     */
    public function __construct(array $expressions = [])
    {
        foreach ($expressions as $expr) {
            $this->add($expr);
        }
    }

    public function __toString(): string
    {
        return \implode('', \array_map(static function (Expr $expr): string {
            return (string) $expr;
        }, $this->all()));
    }

    public function add(Expr ...$expression): void
    {
        foreach ($expression as $expr) {
            $this->expressions[] = $expr;
        }
    }

    /**
     * @return array<Expr>
     */
    public function all(): array
    {
        return $this->expressions;
    }
}
