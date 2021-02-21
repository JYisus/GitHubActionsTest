<?php

declare(strict_types = 1);

namespace CodelyTv\Tests\Shared\Domain;

final class UuidMother
{
    public static function random(): string
    {
        return MotherCreator::random()->unique()->uuid;
    }
}
