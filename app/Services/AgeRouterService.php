<?php

namespace App\Services;

use App\Services\Rules\AgeRuleInterface;
use App\Services\Rules\BabyRule;
use App\Services\Rules\ChildRule;
use App\Services\Rules\TeenRule;
use App\Services\Rules\YoungAdultRule;
use App\Services\Rules\AdultRule;
use App\Services\Rules\SeniorRule;
use App\Services\Rules\ElderRule;

class AgeRouterService
{
    /**
     * @var AgeRuleInterface[]
     */
    protected array $rules;

    public function __construct()
    {
        $this->rules = [
            new BabyRule(),
            new ChildRule(),
            new TeenRule(),
            new YoungAdultRule(),
            new AdultRule(),
            new SeniorRule(),
            new ElderRule(),
        ];
    }

    public function getRouteForAge(int $age): string
    {
        foreach ($this->rules as $rule) {
            if ($rule->matches($age)) {
                return $rule->getRoute();
            }
        }

        return '/edad-invalida';
    }
}
