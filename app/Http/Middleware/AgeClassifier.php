<?php

// app/Http/Middleware/AgeClassifier.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\AgeLog;
use App\Services\AgeRouterService;

class AgeClassifier
{
    public function handle(Request $request, Closure $next)
    {
        $age = $request->input('age');

        if (!is_numeric($age) || $age < 0 || $age > 120) {
            return redirect('/edad-invalida');
        }

        AgeLog::create(['age' => (int) $age]);

        $router = new AgeRouterService();
        $route = $router->getRouteForAge((int) $age);

        return redirect($route);
    }
}
