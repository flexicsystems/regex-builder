<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2023 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\RegexBuilder;

final class Lexer
{
    private array $tokens = [
        Expr\Expression::class,
    ];

    public function tokenize(string $pattern): void
    {
        $pattern = $this->parseWithoutModifiers($pattern);

        // ToDo: Implement parsing of pattern
    }

    private function parseWithoutModifiers(string $pattern): string
    {
        \preg_match('/^(\/)(.*)((\/)([a-zA-Z]+)?)$/m', $pattern, $patternMatches);

        if (\array_key_exists(2, $patternMatches)) {
            return $patternMatches[2];
        }

        return $pattern;
    }
}
