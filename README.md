# PHP Validate library

[![Latest Stable Version](https://poser.pugx.org/josantonius/validate/v/stable)](https://packagist.org/packages/josantonius/validate)
[![License](https://poser.pugx.org/josantonius/validate/license)](LICENSE)

[Versión en español](README-ES.md)

PHP simple library for managing of data types.

---

- [Requirements](#requirements)
- [Installation](#installation)
- [Available Methods](#available-methods)
- [Quick Start](#quick-start)
- [Usage](#usage)
- [Tests](#tests)
- [Sponsor](#Sponsor)
- [License](#license)

---

## Requirements

This library is supported by **PHP versions 7.0** or higher and is compatible with **HHVM versions 3.0** or higher.

## Installation

The preferred way to install this extension is through [Composer](http://getcomposer.org/download/).

To install **PHP Validate library**, simply:

    composer require Josantonius/Validate

The previous command will only install the necessary files, if you prefer to **download the entire source code** you can use:

    composer require Josantonius/Validate --prefer-source

You can also **clone the complete repository** with Git:

  $ git clone <https://github.com/Josantonius/PHP-Validate.git>

Or **install it manually**:

[Download Validate.php](https://raw.githubusercontent.com/Josantonius/PHP-Validate/master/src/Validate.php):

    wget https://raw.githubusercontent.com/Josantonius/PHP-Validate/master/src/Validate.php

## Available Methods

Available methods in this library:

### - Parameter return as array

```php
Validate::asArray($data, $default);
```

| Attribute | Description | Type | Required | Default
| --- | --- | --- | --- | --- |
| $data | Data to convert. | mixed | Yes | |
| $default | Default value in error case. | mixed | No | ´null´ |

**# Return** (mixed|null) → value, null or customized return value

### - Parameter return as object

```php
Validate::asObject($data, $default);
```

| Attribute | Description | Type | Required | Default
| --- | --- | --- | --- | --- |
| $data | Data to convert. | mixed | Yes | |
| $default | Default value in error case. | mixed | No | ´null´ |

**# Return** (mixed|null) → value, null or customized return value

### - Parameter return as JSON

```php
Validate::asJson($data, $default);
```

| Attribute | Description | Type | Required | Default
| --- | --- | --- | --- | --- |
| $data | Data to convert. | mixed | Yes | |
| $default | Default value in error case. | mixed | No | ´null´ |

**# Return** (mixed|null) → value, null or customized return value

### - Parameter return as string

```php
Validate::asString($data, $default);
```

| Attribute | Description | Type | Required | Default
| --- | --- | --- | --- | --- |
| $data | Data to convert. | mixed | Yes | |
| $default | Default value in error case. | mixed | No | ´null´ |

**# Return** (mixed|null) → value, null or customized return value

### - Parameter return as integer

```php
Validate::asInteger($data, $default);
```

| Attribute | Description | Type | Required | Default
| --- | --- | --- | --- | --- |
| $data | Data to convert. | mixed | Yes | |
| $default | Default value in error case. | mixed | No | ´null´ |

**# Return** (mixed|null) → value, null or customized return value

### - Parameter return as float

```php
Validate::asFloat($data, $default);
```

| Attribute | Description | Type | Required | Default
| --- | --- | --- | --- | --- |
| $data | Data to convert. | mixed | Yes | |
| $default | Default value in error case. | mixed | No | ´null´ |

**# Return** (mixed|null) → value, null or customized return value

### - Parameter return as boolean

```php
Validate::asBoolean($data, $default);
```

| Attribute | Description | Type | Required | Default
| --- | --- | --- | --- | --- |
| $data | Data to convert. | mixed | Yes | |
| $default | Default value in error case. | mixed | No | ´null´ |

**# Return** (mixed|null) → value, null or customized return value

### - Parameter return as IP

```php
Validate::asIp($data, $default);
```

| Attribute | Description | Type | Required | Default
| --- | --- | --- | --- | --- |
| $data | Data to convert. | mixed | Yes | |
| $default | Default value in error case. | mixed | No | ´null´ |

**# Return** (mixed|null) → value, null or customized return value

### - Parameter return as URL

```php
Validate::asUrl($data, $default);
```

| Attribute | Description | Type | Required | Default
| --- | --- | --- | --- | --- |
| $data | Data to convert. | mixed | Yes | |
| $default | Default value in error case. | mixed | No | ´null´ |

**# Return** (mixed|null) → value, null or customized return value

### - Parameter return as URL

```php
Validate::asEmail($data, $default);
```

| Attribute | Description | Type | Required | Default
| --- | --- | --- | --- | --- |
| $data | Data to convert. | mixed | Yes | |
| $default | Default value in error case. | mixed | No | ´null´ |

**# Return** (mixed|null) → value, null or customized return value

## Quick Start

To use this library with **Composer**:

```php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\Validate\Validate;
```

Or if you installed it **manually**, use it:

```php
require_once __DIR__ . '/Validate.php';

use Josantonius\Validate\Validate;
```

## Usage

Example of use for this library:

### - ARRAY

#### - When an array is passed

```php
var_dump(Validate::asArray(['foo', 'bar'])); // ['foo', 'bar']
```

#### - When an JSON array is passed

```php
var_dump(Validate::asArray('["foo", "bar"]')); // ['foo', 'bar']
```

#### - When an object is passed

```php
$data = new \StdClass;

$data->foo = 'bar';

var_dump(Validate::asArray($data)); // ['foo' => 'bar']
```

#### - When an JSON object is passed

```php
var_dump(Validate::asArray('{"foo": "bar"}')); // ['foo' => 'bar']
```

#### - Parameter return default value when there's no a correct array

```php
var_dump(Validate::asArray(false)); // null

var_dump(Validate::asArray(false, ['foo', 'bar'])); // ['foo', 'bar']
```

### - OBJECT

#### - When an object is passed

```php
$data = new \StdClass;

$data->foo = 'bar';

$object = Validate::asObject($data);

echo $object->foo; // 'bar'
```

#### - When an JSON object is passed

```php
$object = Validate::asObject('{"foo": "bar"}');

echo $object->foo; // 'bar'
```

#### - When an array is passed

```php
$object = Validate::asObject(['foo' => 'bar']));

echo $object->foo; // 'bar'
```

#### - Parameter return default value when there's no a correct object

```php
var_dump(Validate::asObject(false)); // null

$object = Validate::asObject(false, ['foo' => 'bar']);

echo $object->foo; // 'bar'
```

### - JSON

#### - When an JSON object is passed

```php
echo Validate::asJson('{"foo": "bar"}'); // '{"foo": "bar"}'
```

#### - When an array is passed

```php
echo Validate::asJson(['foo' => 'bar']); // '{"foo":"bar"}'
```

#### - When an object is passed

```php
$data = new \StdClass;

$data->foo = 'bar';

echo Validate::asJson($data); // '{"foo":"bar"}'
```

#### - Parameter return default value when there's no a correct JSON

```php
var_dump(Validate::asJson(false)); // null

echo Validate::asJson(false, '["foo", "bar"]'); // '["foo", "bar"]'
```

### - STRING

#### - When an string is passed

```php
echo Validate::asString('foo'); // 'foo'
```

#### - When an integer is passed

```php
echo Validate::asString(221104); // '221104'
```

#### - Parameter return default value when there's no a correct string

```php
var_dump(Validate::asString(false)); // null

echo Validate::asString(false, 'foo'); // 'foo'
```

### - INTEGER

#### - When an integer is passed

```php
echo Validate::asInteger(8); // 8
```

#### - When an string is passed

```php
echo Validate::asInteger('8'); // 8
```

#### - Parameter return default value when there's no a correct integer

```php
var_dump(Validate::asInteger(false)); // null

echo Validate::asInteger(false, 8); // 8
```

### - FLOAT

#### - When an float is passed

```php
echo Validate::asFloat(8.8); // 8.8
```

#### - When an string is passed

```php
echo Validate::asFloat('8.8'); // 8.8
```

#### - Parameter return default value when there's no a correct float

```php
var_dump(Validate::asFloat(false)); // null

echo Validate::asFloat(false, 8.8); // 8.8
```

### - BOOLEAN

#### - When an boolean true is passed

```php
var_dump(Validate::asBoolean(true)); // true
```

#### - When an string true is passed

```php
var_dump(Validate::asBoolean('true')); // true
```

#### - When an integer one is passed

```php
var_dump(Validate::asBoolean(1)); // true
```

#### - When an string one is passed

```php
var_dump(Validate::asBoolean('1')); // true
```

#### - When an boolean false is passed

```php
var_dump(Validate::asBoolean(false)); // false
```

#### - When an string false is passed

```php
var_dump(Validate::asBoolean('false')); // false
```

#### - When an integer zero is passed

```php
var_dump(Validate::asBoolean(0)); // false
```

#### - When an string zero is passed

```php
var_dump(Validate::asBoolean('0')); // false
```

#### - Parameter return default value when there's no a correct boolean

```php
var_dump(Validate::asBoolean(null)); // null

echo Validate::asBoolean(null, true); // true
```

### - IP

#### - When an IP is passed

```php
echo Validate::asIp('255.255.255.0'); // '255.255.255.0'
```

#### - Parameter return default value when there's no a correct IP

```php
var_dump(Validate::asIp(null)); // null

echo Validate::asIp(null, '255.255.255.0'); // '255.255.255.0'
```

### - URL

#### - When an URL is passed

```php
echo Validate::asUrl('https://josantonius.com'); // 'https://josantonius.com'
```

#### - Parameter return default value when there's no a correct URL

```php
var_dump(Validate::asUrl(null)); // null

echo Validate::asUrl(null, 'https://josantonius.com'); // 'https://josantonius.com'
```

### - Email

#### - When an email is passed

```php
echo Validate::asEmail('hello@josantonius.com'); // 'hello@josantonius.com'
```

#### - Parameter return default value when there's no a correct email

```php
var_dump(Validate::asEmail(null)); // null

echo Validate::asEmail(null, 'hello@josantonius.com'); // 'hello@josantonius.com'
```

## Tests

To run [tests](tests) you just need [composer](http://getcomposer.org/download/) and to execute the following:

    git clone https://github.com/Josantonius/PHP-Validate.git
    
    cd PHP-Validate

    composer install

Run unit tests with [PHPUnit](https://phpunit.de/):

    composer phpunit

Run [PSR2](http://www.php-fig.org/psr/psr-2/) code standard tests with [PHPCS](https://github.com/squizlabs/PHP_CodeSniffer):

    composer phpcs

Run [PHP Mess Detector](https://phpmd.org/) tests to detect inconsistencies in code style:

    composer phpmd

Run all previous tests:

    composer tests

## Sponsor

If this project helps you to reduce your development time,
[you can sponsor me](https://github.com/josantonius#sponsor) to support my open source work :blush:

## License

This repository is licensed under the [MIT License](LICENSE).

Copyright © 2018-2022, [Josantonius](https://github.com/josantonius#contact)
