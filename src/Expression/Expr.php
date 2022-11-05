<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\RegexBuilder\Expression;

use Flexic\RegexBuilder\ExpressionCollection;

abstract class Expr
{
    private string $expression;

    private ?ExpressionCollection $subExpressions;

    public function __construct(
        string $expression,
        array $subExpressions = [],
    ) {
        $this->expression = $expression;
        $this->subExpressions = new ExpressionCollection($subExpressions);
    }

    public function getExpression(): string
    {
        return $this->expression;
    }

    public function getSubExpressions(): ?ExpressionCollection
    {
        return $this->subExpressions;
    }
}
