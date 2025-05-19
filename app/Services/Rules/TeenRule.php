<?php

namespace App\Services\Rules;

class TeenRule implements AgeRuleInterface
{
    public function matches(int $age): bool
    {
        return $age >= 13 && $age <= 17;
    }

    public function getRoute(): string
    {
        return '/adolescentes';
    }
}
