<?php

namespace App\Services\Rules;

class SeniorRule implements AgeRuleInterface
{
    public function matches(int $age): bool
    {
        return $age >= 60 && $age <= 74;
    }

    public function getRoute(): string
    {
        return '/mayores';
    }
}
