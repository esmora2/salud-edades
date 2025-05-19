<?php

namespace App\Services\Rules;

interface AgeRuleInterface
{
    public function matches(int $age): bool;
    public function getRoute(): string;
}
