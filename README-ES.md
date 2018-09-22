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
Validate::array($data, $default);
```

| Atributo | Descripción | Tipo | Requerido | Valor por defecto
| --- | --- | --- | --- | --- |
| $data | Datos a convertir. | mixed | Sí | |
| $default | Valor por defecto en caso de error. | mixed | No | ´null´ |

**# Return** (mixed|null) → valor, valor de retorno nulo o personalizado

### - Devolución de parámetros como object:

```php
Validate::object($data, $default);
```

| Atributo | Descripción | Tipo | Requerido | Valor por defecto
| --- | --- | --- | --- | --- |
| $data | Datos a convertir. | mixed | Sí | |
| $default | Valor por defecto en caso de error. | mixed | No | ´null´ |

**# Return** (mixed|null) → valor, valor de retorno nulo o personalizado

### - Devolución de parámetros como JSON:

```php
Validate::json($data, $default);
```

| Atributo | Descripción | Tipo | Requerido | Valor por defecto
| --- | --- | --- | --- | --- |
| $data | Datos a convertir. | mixed | Sí | |
| $default | Valor por defecto en caso de error. | mixed | No | ´null´ |

**# Return** (mixed|null) → valor, valor de retorno nulo o personalizado

### - Devolución de parámetros como string:

```php
Validate::string($data, $default);
```

| Atributo | Descripción | Tipo | Requerido | Valor por defecto
| --- | --- | --- | --- | --- |
| $data | Datos a convertir. | mixed | Sí | |
| $default | Valor por defecto en caso de error. | mixed | No | ´null´ |

**# Return** (mixed|null) → valor, valor de retorno nulo o personalizado

### - Devolución de parámetros como integer:

```php
Validate::integer($data, $default);
```

| Atributo | Descripción | Tipo | Requerido | Valor por defecto
| --- | --- | --- | --- | --- |
| $data | Datos a convertir. | mixed | Sí | |
| $default | Valor por defecto en caso de error. | mixed | No | ´null´ |

**# Return** (mixed|null) → valor, valor de retorno nulo o personalizado

### - Devolución de parámetros como float:

```php
Validate::float($data, $default);
```

| Atributo | Descripción | Tipo | Requerido | Valor por defecto
| --- | --- | --- | --- | --- |
| $data | Datos a convertir. | mixed | Sí | |
| $default | Valor por defecto en caso de error. | mixed | No | ´null´ |

**# Return** (mixed|null) → valor, valor de retorno nulo o personalizado

### - Devolución de parámetros como boolean:

```php
Validate::boolean($data, $default);
```

| Atributo | Descripción | Tipo | Requerido | Valor por defecto
| --- | --- | --- | --- | --- |
| $data | Datos a convertir. | mixed | Sí | |
| $default | Valor por defecto en caso de error. | mixed | No | ´null´ |

**# Return** (mixed|null) → valor, valor de retorno nulo o personalizado

### - Devolución de parámetros como IP:

```php
Validate::ip($data, $default);
```

| Atributo | Descripción | Tipo | Requerido | Valor por defecto
| --- | --- | --- | --- | --- |
| $data | Datos a convertir. | mixed | Sí | |
| $default | Valor por defecto en caso de error. | mixed | No | ´null´ |

**# Return** (mixed|null) → valor, valor de retorno nulo o personalizado

### - Devolución de parámetros como URL:

```php
Validate::url($data, $default);
```

| Atributo | Descripción | Tipo | Requerido | Valor por defecto
| --- | --- | --- | --- | --- |
| $data | Datos a convertir. | mixed | Sí | |
| $default | Valor por defecto en caso de error. | mixed | No | ´null´ |

**# Return** (mixed|null) → valor, valor de retorno nulo o personalizado

### - Devolución de parámetros como URL:

```php
Validate::email($data, $default);
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
var_dump(Validate::array(['foo', 'bar'])); // ['foo', 'bar']
```

#### - Cuando un array JSON es pasado:

```php
var_dump(Validate::array('["foo", "bar"]')); // ['foo', 'bar']
```

#### - Cuando un objeto es pasado:

```php
$data = new \StdClass;

$data->foo = 'bar';

var_dump(Validate::array($data)); // ['foo' => 'bar']
```

#### - Cuando un objeto JSON es pasado:

```php
var_dump(Validate::array('{"foo": "bar"}')); // ['foo' => 'bar']
```

#### - Cuando no se pasa un array correcto:

```php
var_dump(Validate::array(false)); // null

var_dump(Validate::array(false, ['foo', 'bar'])); // ['foo', 'bar']
```

### - OBJECT:

#### - Cuando un objeto es pasado:

```php
$data = new \StdClass;

$data->foo = 'bar';

$object = Validate::object($data);

echo $object->foo; // 'bar'
```

#### - Cuando un objeto JSON es pasado:

```php
$object = Validate::object('{"foo": "bar"}');

echo $object->foo; // 'bar'
```

#### - Cuando un array es pasado:

```php
$object = Validate::object(['foo' => 'bar']));

echo $object->foo; // 'bar'
```

#### - Cuando no se pasa un objeto correcto:

```php
var_dump(Validate::object(false)); // null

$object = Validate::object(false, ['foo' => 'bar']);

echo $object->foo; // 'bar'
```

### - JSON:

#### - Cuando un objeto JSON es pasado:

```php
echo Validate::json('{"foo": "bar"}'); // '{"foo": "bar"}'
```

#### - Cuando un array es pasado:

```php
echo Validate::json(['foo' => 'bar']); // '{"foo":"bar"}'
```

#### - Cuando un objeto es pasado:

```php
$data = new \StdClass;

$data->foo = 'bar';

echo Validate::json($data); // '{"foo":"bar"}'
```

#### - Cuando no se pasa un JSON correcto:

```php
var_dump(Validate::json(false)); // null

echo Validate::json(false, '["foo", "bar"]'); // '["foo", "bar"]'
```

### - STRING:

#### - Cuando un string es pasado:

```php
echo Validate::string('foo'); // 'foo'
```

#### - When an integer is passed:

```php
echo Validate::string(221104); // '221104'
```

#### - Cuando no se pasa un string correcto:

```php
var_dump(Validate::string(false)); // null

echo Validate::string(false, 'foo'); // 'foo'
```

### - INTEGER:

#### - When an integer is passed:

```php
echo Validate::integer(8); // 8
```

#### - Cuando un string es pasado:

```php
echo Validate::integer('8'); // 8
```

#### - Cuando no se pasa un integer correcto:

```php
var_dump(Validate::integer(false)); // null

echo Validate::integer(false, 8); // 8
```

### - FLOAT:

#### - When an float is passed:

```php
echo Validate::float(8.8); // 8.8
```

#### - Cuando un string es pasado:

```php
echo Validate::float('8.8'); // 8.8
```

#### - Cuando no se pasa un float correcto:

```php
var_dump(Validate::float(false)); // null

echo Validate::float(false, 8.8); // 8.8
```

### - BOOLEAN:

#### - Cuando un booleano true es pasado:

```php
var_dump(Validate::boolean(true)); // true
```

#### - Cuando un string true es pasado:

```php
var_dump(Validate::boolean('true')); // true
```

#### - Cuando un integer 1 es pasado:

```php
var_dump(Validate::boolean(1)); // true
```

#### - Cuando un string 1 es pasado:

```php
var_dump(Validate::boolean('1')); // true
```

#### - Cuando un booleano false es pasado:

```php
var_dump(Validate::boolean(false)); // false
```

#### - Cuando un string false es pasado:

```php
var_dump(Validate::boolean('false')); // false
```

#### Cuando un integer 0 es pasado:

```php
var_dump(Validate::boolean(0)); // false
```

#### - Cuando un string 0 es pasado:

```php
var_dump(Validate::boolean('0')); // false
```

#### - Cuando no se pasa un booleano correcto:

```php
var_dump(Validate::boolean(null)); // null

echo Validate::boolean(null, true); // true
```

### - IP:

#### - Cuando una IP es pasada:

```php
echo Validate::ip('255.255.255.0'); // '255.255.255.0'
```

#### - Cuando no se pasa una IP correcta:

```php
var_dump(Validate::ip(null)); // null

echo Validate::ip(null, '255.255.255.0'); // '255.255.255.0'
```

### - URL:

#### - Cuando una URL es pasada:

```php
echo Validate::url('https://josantonius.com'); // 'https://josantonius.com'
```

#### - Cuando no se pasa una URL correcta:

```php
var_dump(Validate::url(null)); // null

echo Validate::url(null, 'https://josantonius.com'); // 'https://josantonius.com'
```

### - Email:

#### - Cuando un email es pasado:

```php
echo Validate::email('hello@josantonius.com'); // 'hello@josantonius.com'
```

#### - Cuando no se pasa un email correcto:

```php
var_dump(Validate::email(null)); // null

echo Validate::email(null, 'hello@josantonius.com'); // 'hello@josantonius.com'
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