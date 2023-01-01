<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2023 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\RegexBuilder\Expr\Marker;

use Flexic\RegexBuilder\Abstracts\Expression as ExpressionInterface;

final class AnyWhitespace extends ExpressionInterface
{
    public function __construct()
    {
        parent::__construct('\s');
    }
}
