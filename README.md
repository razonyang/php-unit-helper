# Swoole Unit Test Helpers

[![Latest Stable Version](https://poser.pugx.org/razonyang/php-unit-helper/v/stable.png)](https://packagist.org/packages/razonyang/php-unit-helper)
[![Total Downloads](https://poser.pugx.org/razonyang/php-unit-helper/downloads.png)](https://packagist.org/packages/razonyang/php-unit-helper)
[![Build Status](https://github.com/razonyang/php-unit-helper/workflows/build/badge.svg)](https://github.com/razonyang/php-unit-helper/actions)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/razonyang/php-unit-helper/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/razonyang/php-unit-helper/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/razonyang/php-unit-helper/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/razonyang/php-unit-helper/?branch=master)


## Installation

```bash
composer require razonyang/unit-helper --prefer-dist --dev
```

## Helpers

### Reflection Helper

- `ReflectionHelper::invokeMethod`: invoke a non-public method.
- `ReflectionHelper::getPropertyValue`: get a non-public property's value.
- `ReflectionHelper::setPropertyValue`: set a non-public property's value.
