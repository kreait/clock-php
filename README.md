# Clock

A PHP 7.0 compatible clock abstraction.

[![Current version](https://img.shields.io/packagist/v/kreait/clock.svg)](https://packagist.org/packages/kreait/clock)
[![Supported PHP version](https://img.shields.io/packagist/php-v/kreait/clock.svg)]()
[![Monthly Downloads](https://img.shields.io/packagist/dm/kreait/clock.svg)](https://packagist.org/packages/kreait/clock/stats)
[![Total Downloads](https://img.shields.io/packagist/dt/kreait/clock.svg)](https://packagist.org/packages/kreait/clock/stats)
[![Tests](https://github.com/kreait/clock-php/actions/workflows/tests.yml/badge.svg)](https://github.com/kreait/clock-php/actions/workflows/tests.yml)
[![Discord](https://img.shields.io/discord/807679292573220925.svg?color=7289da&logo=discord)](https://discord.gg/Yacm7unBsr)

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
var_dump($frozenClock->now());

$frozenClock->setTo(new DateTimeImmutable('2019-08-19 19:19:19'));
var_dump($frozenClock->now());
```

## Credits

This project exists because [lcobucci/clock](https://github.com/lcobucci/clock) (rightfully)
doesn't support PHP 7.0 anymore, but we need a clock in [kreait/firebase-php 4.x](https://github.com/kreait/firebase-php)
and [kreait/firebase-tokens 1.x](https://github.com/kreait/firebase-tokens-php) for backwards compatibility.

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
