<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2023 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\RegexBuilder\Test;

use Flexic\RegexBuilder\Abstracts\Expr;
use Flexic\RegexBuilder\Expr\Alpha;
use Flexic\RegexBuilder\Expr\Any;

/**
 * @covers \Flexic\RegexBuilder\Expr\Alpha
 * @covers \Flexic\RegexBuilder\Expr\Any
 *
 * @internal
 */
final class ExpressionTest extends AbstractTestCase
{
    /**
     * @dataProvider provideExpressions
     */
    public function testExpression(Expr $expr, string $expected): void
    {
        self::assertSame($expected, (string) $expr);
    }

    public function provideExpressions(): array
    {
        return [
            [new Alpha('Hello World'), 'Hello World'],
            [new Any(), '.'],
        ];
    }
}
