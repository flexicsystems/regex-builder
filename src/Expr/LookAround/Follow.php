<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2023 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\RegexBuilder\Expr\LookAround;

use Flexic\RegexBuilder\Abstracts\Enclosed as EnclosedInterface;
use Flexic\RegexBuilder\Abstracts\Expr;
use Flexic\RegexBuilder\Expr\Expression;
use Flexic\RegexBuilder\Expr\Group;

final class Follow extends EnclosedInterface
{
    public function __construct(Expr $expression)
    {
        parent::__construct(
            new Group([
                new Expression('?<='),
                $expression,
            ]),
        );
    }
}
