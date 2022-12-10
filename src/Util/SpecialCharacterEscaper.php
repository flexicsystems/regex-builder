<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\RegexBuilder\Util;

final class SpecialCharacterEscaper
{
    public static function escape(
        string $input,
        string $delimiter = '/',
    ): string {
        return \preg_quote(
            $input,
            $delimiter,
        );
    }
}
