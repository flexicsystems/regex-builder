<?php

namespace Flexic\RegexBuilder\BuildInterface\Expression;

interface ExprPrototype
{
    /**
     * Returns the expression as string.
     * @return string
     */
    public function __toString(): string;
}