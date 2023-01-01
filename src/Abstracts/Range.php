<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2023 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\RegexBuilder\Abstracts;

abstract class Range extends Expr
{
    public function __construct(
        readonly private Expr $startExpression,
        readonly private Expr $endExpression,
    ) {
    }

    public function __toString(): string
    {
        return \sprintf(
            '%s-%s',
            (string) $this->startExpression,
            (string) $this->endExpression,
        );
    }
}
