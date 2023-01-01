<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2023 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\RegexBuilder\Abstracts;

abstract class Counter extends Expr
{
    public const START_DELIMITER = '{';

    public const END_DELIMITER = '}';

    public const FORMAT = '%s' . self::START_DELIMITER . '%s%s' . self::END_DELIMITER;

    public function __construct(
        readonly private Expr $expression,
        readonly private ?int $min,
        readonly private ?int $max,
    ) {
    }

    public function __toString(): string
    {
        return \sprintf(
            self::FORMAT,
            (string) $this->expression,
            (string) ($this->min ?? ''),
            (string) (0 === $this->max ? '' : \sprintf(',%s', (string) ($this->max ?? ''))),
        );
    }
}
