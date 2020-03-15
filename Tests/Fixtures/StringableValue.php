<?php

declare(strict_types=1);

namespace MsgPhp\Domain\Tests\Fixtures;

final class StringableValue
{
    /** @var string */
    private $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function __toString(): string
    {
        return $this->value;
    }
}
