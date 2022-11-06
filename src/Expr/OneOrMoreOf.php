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

use Flexic\RegexBuilder\BuildInterface\Expression\Expr;
use Flexic\RegexBuilder\BuildInterface\Expression\Expression as ExpressionInterface;

final class OneOrMoreOf extends ExpressionInterface
{
    public function __construct(Expr $expression)
    {
        parent::__construct(\sprintf('%s+', (string) $expression));
    }
}
