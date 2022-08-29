
# This is my package module-sandpit

[![Latest Version on Packagist](https://img.shields.io/packagist/v/isaac-pawley/module-sandpit.svg?style=flat-square)](https://packagist.org/packages/isaac-pawley/module-sandpit)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/isaac-pawley/module-sandpit/run-tests?label=tests)](https://github.com/isaac-pawley/module-sandpit/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/isaac-pawley/module-sandpit/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/isaac-pawley/module-sandpit/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/isaac-pawley/module-sandpit.svg?style=flat-square)](https://packagist.org/packages/isaac-pawley/module-sandpit)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require isaac-pawley/module-sandpit
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="module-sandpit-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="module-sandpit-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="module-sandpit-views"
```

## Usage

```php
$moduleSandpit = new IsaacPawley\ModuleSandpit();
echo $moduleSandpit->echoPhrase('Hello, IsaacPawley!');
```

## Testing

```bash
composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Isaac Pawley](https://github.com/isaac-pawley)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
