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

use Flexic\RegexBuilder\BuildInterface\Expression\Expression as ExpressionInterface;

final class Literal extends ExpressionInterface
{
    public function __construct(string $expression)
    {
        parent::__construct((string) $expression); // ToDo: quote regex special characters
    }
}
