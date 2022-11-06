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

interface ExprPrototype
{
    /**
     * Returns the expression as string.
     */
    public function __toString(): string;
}
