<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2023 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\RegexBuilder\Expr\CharacterClass;

use Flexic\RegexBuilder\Abstracts\CharacterClass as CharacterClassInterface;
use Flexic\RegexBuilder\Expr\Expression;

final class VisiblePunctation extends CharacterClassInterface
{
    public function __construct()
    {
        parent::__construct(
            new Expression('punct'),
        );
    }
}
