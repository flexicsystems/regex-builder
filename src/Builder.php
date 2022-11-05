<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\RegexBuilder;

use Flexic\RegexBuilder\Expression\EndOfString;
use Flexic\RegexBuilder\Expression\StartOfString;

final class Builder extends AbstractBuilder
{
    public function startOfString(): self
    {
        $this->add(new StartOfString());

        return $this;
    }

    public function endOfString(): self
    {
        $this->add(new EndOfString());

        return $this;
    }
}
