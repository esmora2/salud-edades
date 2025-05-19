<?php

namespace App\Services\Rules;

class ElderRule implements AgeRuleInterface
{
    public function matches(int $age): bool
    {
        return $age >= 75 && $age <= 120;
    }

    public function getRoute(): string
    {
        return '/longevos';
    }
}
