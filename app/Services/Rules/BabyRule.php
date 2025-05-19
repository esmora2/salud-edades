<?php

namespace App\Services\Rules;

class BabyRule implements AgeRuleInterface
{
    public function matches(int $age): bool
    {
        return $age >= 0 && $age <= 5;
    }

    public function getRoute(): string
    {
        return '/bebes';
    }
}
