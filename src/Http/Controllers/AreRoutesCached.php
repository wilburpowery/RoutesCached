<?php

namespace Wilburpowery\RoutesCached\Http\Controllers;

use Illuminate\Routing\Controller;

class AreRoutesCached extends Controller
{
    public function __invoke()
    {
        return response()->json(['routesAreCached' => app()->routesAreCached()]);
    }
}
