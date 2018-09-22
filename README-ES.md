# PHP Validate library

[![Latest Stable Version](https://poser.pugx.org/josantonius/Validate/v/stable)](https://packagist.org/packages/josantonius/Validate) [![Latest Unstable Version](https://poser.pugx.org/josantonius/Validate/v/unstable)](https://packagist.org/packages/josantonius/Validate) [![License](https://poser.pugx.org/josantonius/Validate/license)](LICENSE) [![Codacy Badge](https://api.codacy.com/project/badge/Grade/183fd8c88a7344e79ad3891f35ebc3fe)](https://www.codacy.com/app/Josantonius/php-validate?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=Josantonius/php-validate&amp;utm_campaign=Badge_Grade) [![Total Downloads](https://poser.pugx.org/josantonius/Validate/downloads)](https://packagist.org/packages/josantonius/Validate) [![Travis](https://travis-ci.org/Josantonius/php-validate.svg)](https://travis-ci.org/Josantonius/php-validate) [![PSR2](https://img.shields.io/badge/PSR-2-1abc9c.svg)](http://www.php-fig.org/psr/psr-2/) [![PSR4](https://img.shields.io/badge/PSR-4-9b59b6.svg)](http://www.php-fig.org/psr/psr-4/) [![codecov](https://codecov.io/gh/Josantonius/php-validate/branch/master/graph/badge.svg)](https://codecov.io/gh/Josantonius/php-validate)

[English version](README.md) 

Biblioteca PHP para manejo de tipos de datos.

---

- [Requisitos](#requisitos)
- [Instalación](#instalación)
- [Métodos disponibles](#métodos-disponibles)
- [Cómo empezar](#cómo-empezar)
- [Uso](#uso)
- [Tests](#tests)
- [Tareas pendientes](#-tareas-pendientes)
- [Contribuir](#contribuir)
- [Repositorio](#repositorio)
- [Licencia](#licencia)
- [Copyright](#copyright)

---

## Requisitos

Esta clase es soportada por versiones de **PHP 7.0** o superiores y es compatible con versiones de **HHVM 3.0** o superiores.

## Instalación 

La mejor forma de instalar esta extensión es a través de [Composer](http://getcomposer.org/download/).

Para instalar **PHP Validate library**, simplemente escribe:

    $ composer require Josantonius/Validate

El comando anterior sólo instalará los archivos necesarios, si prefieres **descargar todo el código fuente** puedes utilizar:

    $ composer require Josantonius/Validate --prefer-source

También puedes **clonar el repositorio** completo con Git:

  $ git clone https://github.com/Josantonius/PHP-Validate.git

O **instalarlo manualmente**:

[Descargar Validate.php](https://raw.githubusercontent.com/Josantonius/PHP-Validate/master/src/Validate.php):

    $ wget https://raw.githubusercontent.com/Josantonius/PHP-Validate/master/src/Validate.php

## Métodos disponibles

Métodos disponibles en esta biblioteca:

### - Devolución de parámetros como array:

```php
Validate::asArray($data, $default);
```

| Atributo | Descripción | Tipo | Requerido | Valor por defecto
| --- | --- | --- | --- | --- |
| $data | Datos a convertir. | mixed | Sí | |
| $default | Valor por defecto en caso de error. | mixed | No | ´null´ |

**# Return** (mixed|null) → valor, valor de retorno nulo o personalizado

### - Devolución de parámetros como object:

```php
Validate::asObject($data, $default);
```

| Atributo | Descripción | Tipo | Requerido | Valor por defecto
| --- | --- | --- | --- | --- |
| $data | Datos a convertir. | mixed | Sí | |
| $default | Valor por defecto en caso de error. | mixed | No | ´null´ |

**# Return** (mixed|null) → valor, valor de retorno nulo o personalizado

### - Devolución de parámetros como JSON:

```php
Validate::asJson($data, $default);
```

| Atributo | Descripción | Tipo | Requerido | Valor por defecto
| --- | --- | --- | --- | --- |
| $data | Datos a convertir. | mixed | Sí | |
| $default | Valor por defecto en caso de error. | mixed | No | ´null´ |

**# Return** (mixed|null) → valor, valor de retorno nulo o personalizado

### - Devolución de parámetros como string:

```php
Validate::asString($data, $default);
```

| Atributo | Descripción | Tipo | Requerido | Valor por defecto
| --- | --- | --- | --- | --- |
| $data | Datos a convertir. | mixed | Sí | |
| $default | Valor por defecto en caso de error. | mixed | No | ´null´ |

**# Return** (mixed|null) → valor, valor de retorno nulo o personalizado

### - Devolución de parámetros como integer:

```php
Validate::asInteger($data, $default);
```

| Atributo | Descripción | Tipo | Requerido | Valor por defecto
| --- | --- | --- | --- | --- |
| $data | Datos a convertir. | mixed | Sí | |
| $default | Valor por defecto en caso de error. | mixed | No | ´null´ |

**# Return** (mixed|null) → valor, valor de retorno nulo o personalizado

### - Devolución de parámetros como float:

```php
Validate::asFloat($data, $default);
```

| Atributo | Descripción | Tipo | Requerido | Valor por defecto
| --- | --- | --- | --- | --- |
| $data | Datos a convertir. | mixed | Sí | |
| $default | Valor por defecto en caso de error. | mixed | No | ´null´ |

**# Return** (mixed|null) → valor, valor de retorno nulo o personalizado

### - Devolución de parámetros como boolean:

```php
Validate::asBoolean($data, $default);
```

| Atributo | Descripción | Tipo | Requerido | Valor por defecto
| --- | --- | --- | --- | --- |
| $data | Datos a convertir. | mixed | Sí | |
| $default | Valor por defecto en caso de error. | mixed | No | ´null´ |

**# Return** (mixed|null) → valor, valor de retorno nulo o personalizado

### - Devolución de parámetros como IP:

```php
Validate::asIp($data, $default);
```

| Atributo | Descripción | Tipo | Requerido | Valor por defecto
| --- | --- | --- | --- | --- |
| $data | Datos a convertir. | mixed | Sí | |
| $default | Valor por defecto en caso de error. | mixed | No | ´null´ |

**# Return** (mixed|null) → valor, valor de retorno nulo o personalizado

### - Devolución de parámetros como URL:

```php
Validate::asUrl($data, $default);
```

| Atributo | Descripción | Tipo | Requerido | Valor por defecto
| --- | --- | --- | --- | --- |
| $data | Datos a convertir. | mixed | Sí | |
| $default | Valor por defecto en caso de error. | mixed | No | ´null´ |

**# Return** (mixed|null) → valor, valor de retorno nulo o personalizado

### - Devolución de parámetros como URL:

```php
Validate::asEmail($data, $default);
```

| Atributo | Descripción | Tipo | Requerido | Valor por defecto
| --- | --- | --- | --- | --- |
| $data | Datos a convertir. | mixed | Sí | |
| $default | Valor por defecto en caso de error. | mixed | No | ´null´ |

**# Return** (mixed|null) → valor, valor de retorno nulo o personalizado

## Cómo empezar

Para utilizar esta biblioteca con **Composer**:

```php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\Validate\Validate;
```

Si la instalaste **manualmente**, utiliza:

```php
require_once __DIR__ . '/Validate.php';

use Josantonius\Validate\Validate;
```

## Uso

Ejemplo de uso para esta biblioteca:

### - ARRAY:

#### - Cuando un array es pasado:

```php
var_dump(Validate::asArray(['foo', 'bar'])); // ['foo', 'bar']
```

#### - Cuando un array JSON es pasado:

```php
var_dump(Validate::asArray('["foo", "bar"]')); // ['foo', 'bar']
```

#### - Cuando un objeto es pasado:

```php
$data = new \StdClass;

$data->foo = 'bar';

var_dump(Validate::asArray($data)); // ['foo' => 'bar']
```

#### - Cuando un objeto JSON es pasado:

```php
var_dump(Validate::asArray('{"foo": "bar"}')); // ['foo' => 'bar']
```

#### - Cuando no se pasa un array correcto:

```php
var_dump(Validate::asArray(false)); // null

var_dump(Validate::asArray(false, ['foo', 'bar'])); // ['foo', 'bar']
```

### - OBJECT:

#### - Cuando un objeto es pasado:

```php
$data = new \StdClass;

$data->foo = 'bar';

$object = Validate::asObject($data);

echo $object->foo; // 'bar'
```

#### - Cuando un objeto JSON es pasado:

```php
$object = Validate::asObject('{"foo": "bar"}');

echo $object->foo; // 'bar'
```

#### - Cuando un array es pasado:

```php
$object = Validate::asObject(['foo' => 'bar']));

echo $object->foo; // 'bar'
```

#### - Cuando no se pasa un objeto correcto:

```php
var_dump(Validate::asObject(false)); // null

$object = Validate::asObject(false, ['foo' => 'bar']);

echo $object->foo; // 'bar'
```

### - JSON:

#### - Cuando un objeto JSON es pasado:

```php
echo Validate::asJson('{"foo": "bar"}'); // '{"foo": "bar"}'
```

#### - Cuando un array es pasado:

```php
echo Validate::asJson(['foo' => 'bar']); // '{"foo":"bar"}'
```

#### - Cuando un objeto es pasado:

```php
$data = new \StdClass;

$data->foo = 'bar';

echo Validate::asJson($data); // '{"foo":"bar"}'
```

#### - Cuando no se pasa un JSON correcto:

```php
var_dump(Validate::asJson(false)); // null

echo Validate::asJson(false, '["foo", "bar"]'); // '["foo", "bar"]'
```

### - STRING:

#### - Cuando un string es pasado:

```php
echo Validate::asString('foo'); // 'foo'
```

#### - When an integer is passed:

```php
echo Validate::asString(221104); // '221104'
```

#### - Cuando no se pasa un string correcto:

```php
var_dump(Validate::asString(false)); // null

echo Validate::asString(false, 'foo'); // 'foo'
```

### - INTEGER:

#### - When an integer is passed:

```php
echo Validate::asInteger(8); // 8
```

#### - Cuando un string es pasado:

```php
echo Validate::asInteger('8'); // 8
```

#### - Cuando no se pasa un integer correcto:

```php
var_dump(Validate::asInteger(false)); // null

echo Validate::asInteger(false, 8); // 8
```

### - FLOAT:

#### - When an float is passed:

```php
echo Validate::asFloat(8.8); // 8.8
```

#### - Cuando un string es pasado:

```php
echo Validate::asFloat('8.8'); // 8.8
```

#### - Cuando no se pasa un float correcto:

```php
var_dump(Validate::asFloat(false)); // null

echo Validate::asFloat(false, 8.8); // 8.8
```

### - BOOLEAN:

#### - Cuando un booleano true es pasado:

```php
var_dump(Validate::asBoolean(true)); // true
```

#### - Cuando un string true es pasado:

```php
var_dump(Validate::asBoolean('true')); // true
```

#### - Cuando un integer 1 es pasado:

```php
var_dump(Validate::asBoolean(1)); // true
```

#### - Cuando un string 1 es pasado:

```php
var_dump(Validate::asBoolean('1')); // true
```

#### - Cuando un booleano false es pasado:

```php
var_dump(Validate::asBoolean(false)); // false
```

#### - Cuando un string false es pasado:

```php
var_dump(Validate::asBoolean('false')); // false
```

#### Cuando un integer 0 es pasado:

```php
var_dump(Validate::asBoolean(0)); // false
```

#### - Cuando un string 0 es pasado:

```php
var_dump(Validate::asBoolean('0')); // false
```

#### - Cuando no se pasa un booleano correcto:

```php
var_dump(Validate::asBoolean(null)); // null

echo Validate::asBoolean(null, true); // true
```

### - IP:

#### - Cuando una IP es pasada:

```php
echo Validate::asIp('255.255.255.0'); // '255.255.255.0'
```

#### - Cuando no se pasa una IP correcta:

```php
var_dump(Validate::asIp(null)); // null

echo Validate::asIp(null, '255.255.255.0'); // '255.255.255.0'
```

### - URL:

#### - Cuando una URL es pasada:

```php
echo Validate::asUrl('https://josantonius.com'); // 'https://josantonius.com'
```

#### - Cuando no se pasa una URL correcta:

```php
var_dump(Validate::asUrl(null)); // null

echo Validate::asUrl(null, 'https://josantonius.com'); // 'https://josantonius.com'
```

### - Email:

#### - Cuando un email es pasado:

```php
echo Validate::asEmail('hello@josantonius.com'); // 'hello@josantonius.com'
```

#### - Cuando no se pasa un email correcto:

```php
var_dump(Validate::asEmail(null)); // null

echo Validate::asEmail(null, 'hello@josantonius.com'); // 'hello@josantonius.com'
```

## Tests 

Para ejecutar las [pruebas](tests) necesitarás [Composer](http://getcomposer.org/download/) y seguir los siguientes pasos:

    $ git clone https://github.com/Josantonius/PHP-Validate.git
    
    $ cd PHP-Validate

    $ composer install

Ejecutar pruebas unitarias con [PHPUnit](https://phpunit.de/):

    $ composer phpunit

Ejecutar pruebas de estándares de código [PSR2](http://www.php-fig.org/psr/psr-2/) con [PHPCS](https://github.com/squizlabs/PHP_CodeSniffer):

    $ composer phpcs

Ejecutar pruebas con [PHP Mess Detector](https://phpmd.org/) para detectar inconsistencias en el estilo de codificación:

    $ composer phpmd

Ejecutar todas las pruebas anteriores:

    $ composer tests

## ☑ Tareas pendientes

- [ ] Añadir nueva funcionalidad.
- [ ] Mejorar pruebas.
- [ ] Mejorar documentación.

## Contribuir

Si deseas colaborar, puedes echar un vistazo a la lista de
[issues](https://github.com/Josantonius/PHP-Validate/issues) o [tareas pendientes](#-tareas-pendientes).

**Pull requests**

* [Fork and clone](https://help.github.com/articles/fork-a-repo).
* Ejecuta el comando `composer install` para instalar dependencias.
  Esto también instalará las [dependencias de desarrollo](https://getcomposer.org/doc/03-cli.md#install).
* Ejecuta el comando `composer fix` para estandarizar el código.
* Ejecuta las [pruebas](#tests).
* Crea una nueva rama (**branch**), **commit**, **push** y envíame un
  [pull request](https://help.github.com/articles/using-pull-requests).

## Repositorio

La estructura de archivos de este repositorio se creó con [PHP-Skeleton](https://github.com/Josantonius/PHP-Skeleton).

## Licencia

Este proyecto está licenciado bajo **licencia MIT**. Consulta el archivo [LICENSE](LICENSE) para más información.

## Copyright

2018 Josantonius, [josantonius.com](https://josantonius.com/)

Si te ha resultado útil, házmelo saber :wink:

Puedes contactarme en [Twitter](https://twitter.com/Josantonius) o a través de mi [correo electrónico](mailto:hello@josantonius.com).