<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\RegexBuilder;

use Flexic\RegexBuilder\Abstracts\Expr;

final class PatternDumper
{
    public function __construct(
        readonly private Pattern $pattern,
    ) {
    }

    public function dump(): string
    {
        return \implode('', \array_map(static function (Expr $expr): string {
            return (string) $expr;
        }, $this->pattern->all()));
    }
}
