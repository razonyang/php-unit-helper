# PHP Unit Test Helpers

[![Latest Stable Version](https://poser.pugx.org/razonyang/unit-helper/v/stable.png)](https://packagist.org/packages/razonyang/unit-helper)
[![Total Downloads](https://poser.pugx.org/razonyang/unit-helper/downloads.png)](https://packagist.org/packages/razonyang/unit-helper)
[![Build Status](https://github.com/razonyang/php-unit-helper/actions/workflows/build.yml/badge.svg)](https://github.com/razonyang/php-unit-helper/actions)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/razonyang/php-unit-helper/badges/quality-score.png?b=main)](https://scrutinizer-ci.com/g/razonyang/php-unit-helper/?branch=main)
[![Code Coverage](https://scrutinizer-ci.com/g/razonyang/php-unit-helper/badges/coverage.png?b=main)](https://scrutinizer-ci.com/g/razonyang/php-unit-helper/?branch=main)
[![StyleCI](https://github.styleci.io/repos/537817860/shield?branch=main)](https://github.styleci.io/repos/537817860?branch=main)


## Installation

```bash
composer require razonyang/unit-helper --prefer-dist --dev
```

## Helpers

### Reflection Helper

- `ReflectionHelper::invokeMethod`: invoke a non-public method.
- `ReflectionHelper::getPropertyValue`: get a non-public property's value.
- `ReflectionHelper::setPropertyValue`: set a non-public property's value.
