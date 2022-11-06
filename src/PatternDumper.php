<?php

namespace Flexic\RegexBuilder;

use Flexic\RegexBuilder\BuildInterface\Expression\Expr;

class PatternDumper
{
    public function __construct(
        readonly private Pattern $pattern
    ) {
    }

    public function dump(): string
    {
        return \implode('', \array_map(static function (Expr $expr): string {
            return (string) $expr;
        }, $this->pattern->all()));
    }
}