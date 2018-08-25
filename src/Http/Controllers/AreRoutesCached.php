<?php

namespace Wilburpowery\RoutesCached\Http\Controllers;

use App\Http\Controllers\Controller;

class AreRoutesCached extends Controller
{
    public function __invoke()
    {
        return response()->json(['routesAreCached' => app()->routesAreCached()]);
    }
}
