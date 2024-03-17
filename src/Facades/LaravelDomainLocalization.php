<?php

namespace ByteFlick\LaravelDomainLocalization\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ByteFlick\LaravelDomainLocalization\LaravelDomainLocalization
 */
class LaravelDomainLocalization extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \ByteFlick\LaravelDomainLocalization\LaravelDomainLocalization::class;
    }
}
