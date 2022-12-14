<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\RegexBuilder\Abstracts;

abstract class CharacterClass extends Expr
{
    private const FORMAT = '[[:%s:]]';

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
