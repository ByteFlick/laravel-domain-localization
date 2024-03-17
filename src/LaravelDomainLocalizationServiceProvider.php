<?php

namespace ByteFlick\LaravelDomainLocalization;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelDomainLocalizationServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('laravel-domain-localization')
            ->hasConfigFile(['domain-localization']);
    }
}
