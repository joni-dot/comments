# Model related comments by using Laravel and Livewire.

A simple comment plugin built by using Laravel and Livewire.

## Installation

You can install the package via composer:

```bash
composer require joni-dot/comments
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="JoniDot\Comments\CommentsServiceProvider" --tag="comments-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="JoniDot\Comments\CommentsServiceProvider" --tag="comments-config"
```

## Usage

...

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Joni](https://github.com/joni-dot)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
