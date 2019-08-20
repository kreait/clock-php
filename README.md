# Clock

A PHP 7.0 compatible clock abstraction.

[![Current version](https://img.shields.io/packagist/v/kreait/clock.svg)](https://packagist.org/packages/kreait/clock)
[![Supported PHP version](https://img.shields.io/packagist/php-v/kreait/clock.svg)]()
[![Discord](https://img.shields.io/discord/523866370778333184.svg?color=7289da&logo=discord)](https://discord.gg/nbgVfty)

[![Build Status](https://travis-ci.com/kreait/clock-php.svg?branch=master)](https://travis-ci.com/kreait/clock-php)

## Installation

```bash
composer require kreait/clock
```

## Basic usage

```php
<?php

require 'vendor/autoload.php';

use Kreait\Clock\FrozenClock;
use Kreait\Clock\SystemClock;

$systemClock = new SystemClock(new DateTimeZone('UTC'));
var_dump($systemClock->now());

$frozenClock = new FrozenClock(new DateTimeImmutable('2019-08-20 10:41:53'));
var_dump($systemClock->now());

$frozenClock->setTo(new DateTimeImmutable('2019-08-19 19:19:19'));
var_dump($systemClock->now());
```

## Credits

This project exists because [lcobucci/clock](https://github.com/lcobucci/clock) (rightfully)
doesn't support PHP 7.0 anymore, but we need a clock in [kreait/firebase-php 4.x](https://github.com/kreait/firebase-php)
and [kreait/firebase-tokens 1.x](https://github.com/kreait/firebase-tokens-php) for backwards compatibility.

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
