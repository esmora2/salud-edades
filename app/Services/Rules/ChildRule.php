<?php

namespace App\Services\Rules;

class ChildRule implements AgeRuleInterface
{
    public function matches(int $age): bool
    {
        return $age >= 6 && $age <= 12;
    }

    public function getRoute(): string
    {
        return '/ninos';
    }
}
