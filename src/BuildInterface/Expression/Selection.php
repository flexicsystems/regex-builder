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

abstract class Selection extends Expr
{
    private const START_DELIMITER = '[';

    private const END_DELIMITER = ']';

    private const FORMAT = self::START_DELIMITER . '%s' . self::END_DELIMITER;

    public function __construct(
        readonly private Expr $expression,
    ) {
    }

    public function __toString(): string
    {
        return \sprintf(
            self::FORMAT,
            (string) $this->expression,
        );
    }
}
