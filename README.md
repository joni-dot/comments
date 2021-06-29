# Model related comments by using Laravel and Livewire.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/joni-dot/comments.svg?style=flat-square)](https://packagist.org/packages/joni-dot/comments)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/joni-dot/comments/run-tests?label=tests)](https://github.com/joni-dot/comments/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/joni-dot/comments/Check%20&%20fix%20styling?label=code%20style)](https://github.com/joni-dot/comments/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/joni-dot/comments.svg?style=flat-square)](https://packagist.org/packages/joni-dot/comments)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

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

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$comments = new JoniDot\Comments();
echo $comments->echoPhrase('Hello, Spatie!');
```

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
