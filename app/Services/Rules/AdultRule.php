<?php

namespace App\Services\Rules;

class AdultRule implements AgeRuleInterface
{
    public function matches(int $age): bool
    {
        return $age >= 26 && $age <= 59;
    }

    public function getRoute(): string
    {
        return '/adultos';
    }
}
