<?php

namespace Laramin\Utility;

use Closure;

class Utility{

    public function handle($request, Closure $next)
    {
    	//clear
        return $next($request);
    }
}
