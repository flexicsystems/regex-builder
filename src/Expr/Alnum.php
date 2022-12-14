<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\RegexBuilder\Expr;

use Flexic\RegexBuilder\Abstracts\Expression as ExpressionInterface;

final class Alnum extends ExpressionInterface
{
    public function __construct(string|int|float $expression)
    {
        parent::__construct((string) $expression);
    }
}
