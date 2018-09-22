# PHP Validate library

[![Latest Stable Version](https://poser.pugx.org/josantonius/Validate/v/stable)](https://packagist.org/packages/josantonius/Validate) [![Latest Unstable Version](https://poser.pugx.org/josantonius/Validate/v/unstable)](https://packagist.org/packages/josantonius/Validate) [![License](https://poser.pugx.org/josantonius/Validate/license)](LICENSE) [![Codacy Badge](https://api.codacy.com/project/badge/Grade/aa5b98dbbc5846399bb994318dce3c88)](https://www.codacy.com/app/Josantonius/PHP-Validate?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=Josantonius/PHP-Validate&amp;utm_campaign=Badge_Grade) [![Total Downloads](https://poser.pugx.org/josantonius/Validate/downloads)](https://packagist.org/packages/josantonius/Validate) [![Travis](https://travis-ci.org/Josantonius/PHP-Validate.svg)](https://travis-ci.org/Josantonius/PHP-Validate) [![PSR2](https://img.shields.io/badge/PSR-2-1abc9c.svg)](http://www.php-fig.org/psr/psr-2/) [![PSR4](https://img.shields.io/badge/PSR-4-9b59b6.svg)](http://www.php-fig.org/psr/psr-4/) [![CodeCov](https://codecov.io/gh/Josantonius/PHP-Validate/branch/master/graph/badge.svg)](https://codecov.io/gh/Josantonius/PHP-Validate)

[Versión en español](README-ES.md)

PHP simple library for managing of data types. 

---

- [Requirements](#requirements)
- [Installation](#installation)
- [Available Methods](#available-methods)
- [Quick Start](#quick-start)
- [Usage](#usage)
- [Tests](#tests)
- [TODO](#-todo)
- [Contribute](#contribute)
- [Repository](#repository)
- [License](#license)
- [Copyright](#copyright)

---

## Requirements

This library is supported by **PHP versions 7.0** or higher and is compatible with **HHVM versions 3.0** or higher.

## Installation

The preferred way to install this extension is through [Composer](http://getcomposer.org/download/).

To install **PHP Validate library**, simply:

    $ composer require Josantonius/Validate

The previous command will only install the necessary files, if you prefer to **download the entire source code** you can use:

    $ composer require Josantonius/Validate --prefer-source

You can also **clone the complete repository** with Git:

  $ git clone https://github.com/Josantonius/PHP-Validate.git

Or **install it manually**:

[Download Validate.php](https://raw.githubusercontent.com/Josantonius/PHP-Validate/master/src/Validate.php):

    $ wget https://raw.githubusercontent.com/Josantonius/PHP-Validate/master/src/Validate.php

## Available Methods

Available methods in this library:

### - Parameter return as array:

```php
Validate::array($data, $default);
```

| Attribute | Description | Type | Required | Default
| --- | --- | --- | --- | --- |
| $data | Data to convert. | mixed | Yes | |
| $default | Default value in error case. | mixed | No | ´null´ |

**# Return** (mixed|null) → value, null or customized return value

### - Parameter return as object:

```php
Validate::object($data, $default);
```

| Attribute | Description | Type | Required | Default
| --- | --- | --- | --- | --- |
| $data | Data to convert. | mixed | Yes | |
| $default | Default value in error case. | mixed | No | ´null´ |

**# Return** (mixed|null) → value, null or customized return value

### - Parameter return as JSON:

```php
Validate::json($data, $default);
```

| Attribute | Description | Type | Required | Default
| --- | --- | --- | --- | --- |
| $data | Data to convert. | mixed | Yes | |
| $default | Default value in error case. | mixed | No | ´null´ |

**# Return** (mixed|null) → value, null or customized return value

### - Parameter return as string:

```php
Validate::string($data, $default);
```

| Attribute | Description | Type | Required | Default
| --- | --- | --- | --- | --- |
| $data | Data to convert. | mixed | Yes | |
| $default | Default value in error case. | mixed | No | ´null´ |

**# Return** (mixed|null) → value, null or customized return value

### - Parameter return as integer:

```php
Validate::integer($data, $default);
```

| Attribute | Description | Type | Required | Default
| --- | --- | --- | --- | --- |
| $data | Data to convert. | mixed | Yes | |
| $default | Default value in error case. | mixed | No | ´null´ |

**# Return** (mixed|null) → value, null or customized return value

### - Parameter return as float:

```php
Validate::float($data, $default);
```

| Attribute | Description | Type | Required | Default
| --- | --- | --- | --- | --- |
| $data | Data to convert. | mixed | Yes | |
| $default | Default value in error case. | mixed | No | ´null´ |

**# Return** (mixed|null) → value, null or customized return value

### - Parameter return as boolean:

```php
Validate::boolean($data, $default);
```

| Attribute | Description | Type | Required | Default
| --- | --- | --- | --- | --- |
| $data | Data to convert. | mixed | Yes | |
| $default | Default value in error case. | mixed | No | ´null´ |

**# Return** (mixed|null) → value, null or customized return value

### - Parameter return as IP:

```php
Validate::ip($data, $default);
```

| Attribute | Description | Type | Required | Default
| --- | --- | --- | --- | --- |
| $data | Data to convert. | mixed | Yes | |
| $default | Default value in error case. | mixed | No | ´null´ |

**# Return** (mixed|null) → value, null or customized return value

### - Parameter return as URL:

```php
Validate::url($data, $default);
```

| Attribute | Description | Type | Required | Default
| --- | --- | --- | --- | --- |
| $data | Data to convert. | mixed | Yes | |
| $default | Default value in error case. | mixed | No | ´null´ |

**# Return** (mixed|null) → value, null or customized return value

### - Parameter return as URL:

```php
Validate::email($data, $default);
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

### - ARRAY:

#### - When an array is passed:

```php
var_dump(Validate::array(['foo', 'bar'])); // ['foo', 'bar']
```

#### - When an JSON array is passed:

```php
var_dump(Validate::array('["foo", "bar"]')); // ['foo', 'bar']
```

#### - When an object is passed:

```php
$data = new \StdClass;

$data->foo = 'bar';

var_dump(Validate::array($data)); // ['foo' => 'bar']
```

#### - When an JSON object is passed:

```php
var_dump(Validate::array('{"foo": "bar"}')); // ['foo' => 'bar']
```

#### - Parameter return default value when there's no a correct array:

```php
var_dump(Validate::array(false)); // null

var_dump(Validate::array(false, ['foo', 'bar'])); // ['foo', 'bar']
```

### - OBJECT:

#### - When an object is passed:

```php
$data = new \StdClass;

$data->foo = 'bar';

$object = Validate::object($data);

echo $object->foo; // 'bar'
```

#### - When an JSON object is passed:

```php
$object = Validate::object('{"foo": "bar"}');

echo $object->foo; // 'bar'
```

#### - When an array is passed:

```php
$object = Validate::object(['foo' => 'bar']));

echo $object->foo; // 'bar'
```

#### - Parameter return default value when there's no a correct object:

```php
var_dump(Validate::object(false)); // null

$object = Validate::object(false, ['foo' => 'bar']);

echo $object->foo; // 'bar'
```

### - JSON:

#### - When an JSON object is passed:

```php
echo Validate::json('{"foo": "bar"}'); // '{"foo": "bar"}'
```

#### - When an array is passed:

```php
echo Validate::json(['foo' => 'bar']); // '{"foo":"bar"}'
```

#### - When an object is passed:

```php
$data = new \StdClass;

$data->foo = 'bar';

echo Validate::json($data); // '{"foo":"bar"}'
```

#### - Parameter return default value when there's no a correct JSON:

```php
var_dump(Validate::json(false)); // null

echo Validate::json(false, '["foo", "bar"]'); // '["foo", "bar"]'
```

### - STRING:

#### - When an string is passed:

```php
echo Validate::string('foo'); // 'foo'
```

#### - When an integer is passed:

```php
echo Validate::string(221104); // '221104'
```

#### - Parameter return default value when there's no a correct string:

```php
var_dump(Validate::string(false)); // null

echo Validate::string(false, 'foo'); // 'foo'
```

### - INTEGER:

#### - When an integer is passed:

```php
echo Validate::integer(8); // 8
```

#### - When an string is passed:

```php
echo Validate::integer('8'); // 8
```

#### - Parameter return default value when there's no a correct integer:

```php
var_dump(Validate::integer(false)); // null

echo Validate::integer(false, 8); // 8
```

### - FLOAT:

#### - When an float is passed:

```php
echo Validate::float(8.8); // 8.8
```

#### - When an string is passed:

```php
echo Validate::float('8.8'); // 8.8
```

#### - Parameter return default value when there's no a correct float:

```php
var_dump(Validate::float(false)); // null

echo Validate::float(false, 8.8); // 8.8
```

### - BOOLEAN:

#### - When an boolean true is passed:

```php
var_dump(Validate::boolean(true)); // true
```

#### - When an string true is passed:

```php
var_dump(Validate::boolean('true')); // true
```

#### - When an integer one is passed:

```php
var_dump(Validate::boolean(1)); // true
```

#### - When an string one is passed:

```php
var_dump(Validate::boolean('1')); // true
```

#### - When an boolean false is passed:

```php
var_dump(Validate::boolean(false)); // false
```

#### - When an string false is passed:

```php
var_dump(Validate::boolean('false')); // false
```

#### - When an integer zero is passed:

```php
var_dump(Validate::boolean(0)); // false
```

#### - When an string zero is passed:

```php
var_dump(Validate::boolean('0')); // false
```

#### - Parameter return default value when there's no a correct boolean:

```php
var_dump(Validate::boolean(null)); // null

echo Validate::boolean(null, true); // true
```

### - IP:

#### - When an IP is passed:

```php
echo Validate::ip('255.255.255.0'); // '255.255.255.0'
```

#### - Parameter return default value when there's no a correct IP:

```php
var_dump(Validate::ip(null)); // null

echo Validate::ip(null, '255.255.255.0'); // '255.255.255.0'
```

### - URL:

#### - When an URL is passed:

```php
echo Validate::url('https://josantonius.com'); // 'https://josantonius.com'
```

#### - Parameter return default value when there's no a correct URL:

```php
var_dump(Validate::url(null)); // null

echo Validate::url(null, 'https://josantonius.com'); // 'https://josantonius.com'
```

### - Email:

#### - When an email is passed:

```php
echo Validate::email('hello@josantonius.com'); // 'hello@josantonius.com'
```

#### - Parameter return default value when there's no a correct email:

```php
var_dump(Validate::email(null)); // null

echo Validate::email(null, 'hello@josantonius.com'); // 'hello@josantonius.com'
```

## Tests

To run [tests](tests) you just need [composer](http://getcomposer.org/download/) and to execute the following:

    $ git clone https://github.com/Josantonius/PHP-Validate.git
    
    $ cd PHP-Validate

    $ composer install

Run unit tests with [PHPUnit](https://phpunit.de/):

    $ composer phpunit

Run [PSR2](http://www.php-fig.org/psr/psr-2/) code standard tests with [PHPCS](https://github.com/squizlabs/PHP_CodeSniffer):

    $ composer phpcs

Run [PHP Mess Detector](https://phpmd.org/) tests to detect inconsistencies in code style:

    $ composer phpmd

Run all previous tests:

    $ composer tests

## ☑ TODO

- [ ] Add new feature.
- [ ] Improve tests.
- [ ] Improve documentation.

## Contribute

If you would like to help, please take a look at the list of
[issues](https://github.com/Josantonius/PHP-Validate/issues) or the [To Do](#-todo) checklist.

**Pull requests**

* [Fork and clone](https://help.github.com/articles/fork-a-repo).
* Run the command `composer install` to install the dependencies.
  This will also install the [dev dependencies](https://getcomposer.org/doc/03-cli.md#install).
* Run the command `composer fix` to excute code standard fixers.
* Run the [tests](#tests).
* Create a **branch**, **commit**, **push** and send me a
  [pull request](https://help.github.com/articles/using-pull-requests).

## Repository

The file structure from this repository was created with [PHP-Skeleton](https://github.com/Josantonius/PHP-Skeleton).

## License

This project is licensed under **MIT license**. See the [LICENSE](LICENSE) file for more info.

## Copyright

2018 Josantonius, [josantonius.com](https://josantonius.com/)

If you find it useful, let me know :wink:

You can contact me on [Twitter](https://twitter.com/Josantonius) or through my [email](mailto:hello@josantonius.com).