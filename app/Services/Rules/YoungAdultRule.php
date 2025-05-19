<?php

namespace App\Services\Rules;

class YoungAdultRule implements AgeRuleInterface
{
    public function matches(int $age): bool
    {
        return $age >= 18 && $age <= 25;
    }

    public function getRoute(): string
    {
        return '/jovenes';
    }
}
