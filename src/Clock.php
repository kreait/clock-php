<?php

declare(strict_types=1);

namespace Kreait;

use DateTimeImmutable;

interface Clock
{
    public function now(): DateTimeImmutable;
}
