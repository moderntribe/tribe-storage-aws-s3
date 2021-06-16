# Tribe Storage: AWS S3 Adapter

[![PHPCS + Unit Tests](https://github.com/moderntribe/tribe-storage-aws-s3/actions/workflows/pull-request.yml/badge.svg)](https://github.com/moderntribe/tribe-storage-aws-s3/actions/workflows/pull-request.yml)
![php 7.3+](https://img.shields.io/badge/php-min%207.3-red.svg)

The AWS S3 adapter for the [Tribe Storage](https://github.com/moderntribe/tribe-storage) WordPress plugin.
This adapter is meant to be configured and installed by **developers**.

## Installation Composer v1

Note: This also automatically installs the Tribe Storage plugin.

Add the following to the composer.json `repositories` object:

```json
  "repositories": [
      {
        "type": "vcs",
        "url": "git@github.com:moderntribe/tribe-storage-aws-s3.git"
      },
      {
        "type": "vcs",
        "url": "git@github.com:moderntribe/tribe-storage.git"
      },
  ]
```
Then run:

```bash
composer require moderntribe/tribe-storage-aws-s3
```

## Configuration

Define the adapter, and your bucket name in `wp-config.php`:

```php
define( 'TRIBE_STORAGE_ADAPTER', 'Tribe\Storage\Adapters\S3_Adapter' );
define( 'TRIBE_STORAGE_S3_BUCKET', 'mybucketname' );
```

Define the minimum S3 options in `wp-config.php`:

```php
define( 'TRIBE_STORAGE_S3_OPTIONS', [
	'credentials' => [
		'key'    => 'YOUR-KEY',
		'secret' => 'YOUR-SECRET-KEY',
	],
	'region'      => 'us-east-1',
	'version'     => 'latest',
] );
```

Define the URL of the CDN or the public URL for your bucket in `wp-config.php`:

```php
define( 'TRIBE_STORAGE_URL', 'https://example.com/wp-content/uploads/' . TRIBE_STORAGE_S3_BUCKET );
```

Full S3 client configuration options are available via
[AWS documentation](https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/guide_configuration.html).
Additionally, this can be configured with the `tribe/storage/s3_client_options` filter.

## Automated Testing

Testing provided via [PHPUnit](https://phpunit.de/) and the [Brain Monkey](https://brain-wp.github.io/BrainMonkey/)
testing suite.

#### Run Unit Tests

```bash
$ composer install
$ ./vendor/bin/phpunit
```

## More Resources:

- [Tribe Storage Documentation](https://github.com/moderntribe/tribe-storage)
- [Modern Tribe](https://tri.be/)
