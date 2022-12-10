<?php

namespace Flexic\RegexBuilder\Util;

class SpecialCharacterEscaper
{
    public static function escape(
        string $input,
        string $delimiter = '/',
    ): string {
        return \preg_quote(
            $input,
            $delimiter
        );
    }
}