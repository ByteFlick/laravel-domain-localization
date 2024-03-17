<p align="center"><img src="https://github.com/ByteFlick/.github/blob/main/profile/btye-flick-logo.png?raw=true" width="400"></p>

# Domain-Based Localization for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/byteflick/laravel-domain-localization.svg?style=flat-square)](https://packagist.org/packages/byteflick/laravel-domain-localization)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/byteflick/laravel-domain-localization/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/byteflick/laravel-domain-localization/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/byteflick/laravel-domain-localization/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/byteflick/laravel-domain-localization/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/byteflick/laravel-domain-localization.svg?style=flat-square)](https://packagist.org/packages/byteflick/laravel-domain-localization)

Introducing "Domain-Based Localization for Laravel" – a powerful Laravel package designed to streamline the localization
process for multi-language web applications. With seamless integration, this package empowers developers to effortlessly
assign locales based on domain names, simplifying the management of language variations across diverse web environments.
Experience streamlined localization management and enhanced user experiences with Domain-Based Localization for Laravel.

## Installation

You can install the package via composer:

```bash
composer require byteflick/laravel-domain-localization
```

You can publish the config file with:

```bash
php artisan vendor:publish --provider="ByteFlick\LaravelDomainLocalization\LaravelDomainLocalizationServiceProvider"
```

This is the contents of the published config file:

Note: If you set the mode to `strict` then if the middleware cannot find a locale it aborts the request.

```php
return [
    'mode' => 'loose', // strict or loose
    'locales' => [
        'en' => ['name' => 'English', 'domain' => 'localhost.com'],
        // 'es' => ['name' => 'Spanish', 'domain' => 'localhost.com.tr'],
        // 'tr' => ['name' => 'Turkish', 'domain' => 'localhost.com.es'],
        // ... More locales can be added here.
    ]
];
```

## Usage

### Step 1: Publish the Config File

Publish the config file via the command below and configure it according to your needs.

```bash
php artisan vendor:publish --provider="ByteFlick\LaravelDomainLocalization\LaravelDomainLocalizationServiceProvider"
```

### Step 2: Apply the Middleware

#### On Specific Routes Only

You can add the middleware to individual routes or apply it via a route group.

#### Globally For Laravel 11

Append the middleware to your default middlewares into your `bootstrap/app.php` via the code below.

```php
->withMiddleware(function (Middleware $middleware) {
     $middleware->append(\ByteFlick\LaravelDomainLocalization\Middlewares\HandleLocalizationViaDomain::class);
})
```

#### Globally For Laravel 10

Add the middleware to your default middlewares into your `App\Http\Kernel.php` via the code below.

```php
protected $middleware = [
    \ByteFlick\LaravelDomainLocalization\Middlewares\HandleLocalizationViaDomain::class,
];
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [ByteFlick](https://github.com/ByteFlick)
- [ORPtech](https://orptech.com)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
