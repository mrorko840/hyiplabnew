<?php

namespace Laramin\Utility;

use App\Models\GeneralSetting;
use Closure;

class GoToCore{

    public function handle($request, Closure $next)
    {
        return $next($request);
    }

    public function getGeneral(){
        $general = cache()->get('GeneralSetting');
        if (!$general) {
            $general = GeneralSetting::first();
        }
        return $general;
    }
}
