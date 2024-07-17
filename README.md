# XLogger

Quick logger library.

## Installation

You can install the package via composer:

```bash
composer require jooservices/xlogger
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="xlogger-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="xlogger-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$service = app(\JOOservices\XLogger\Services\LoggerService::class);
$service->alert('Log message', []);
```

## Testing

```bash
composer test
```

## Changelog

## Contributing

## Security Vulnerabilities

## Credits

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
