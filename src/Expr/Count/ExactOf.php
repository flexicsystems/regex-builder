<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\RegexBuilder\Expr\Count;

use Flexic\RegexBuilder\BuildInterface\Expression\Counter as CounterInterface;
use Flexic\RegexBuilder\BuildInterface\Expression\Expr;

final class ExactOf extends CounterInterface
{
    public function __construct(Expr $expression, int $exact)
    {
        parent::__construct($expression, $exact, 0);
    }
}
