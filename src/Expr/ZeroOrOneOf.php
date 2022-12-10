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

use Flexic\RegexBuilder\Abstracts\Expr;
use Flexic\RegexBuilder\Abstracts\Expression as ExpressionInterface;

final class ZeroOrOneOf extends ExpressionInterface
{
    public function __construct(Expr $expression)
    {
        parent::__construct(\sprintf('%s?', (string) $expression));
    }
}
