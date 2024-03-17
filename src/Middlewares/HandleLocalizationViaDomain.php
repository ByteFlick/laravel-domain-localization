<?php

namespace ByteFlick\LaravelDomainLocalization\Middlewares;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HandleLocalizationViaDomain
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);
        $domain = $request->getHttpHost();
        $locales = config('domain-localization.locales');
        $mode = config('domain-localization.mode');

        $key = array_search($domain, array_column($locales, 'domain'));

        if ($mode === 'strict' && ! $key) {
            abort(400, 'This domain is not supported by the locale package.');
        } else {
            $locale = array_keys($locales)[$key];
            App::setLocale($locale);
        }

        return $response;
    }
}
