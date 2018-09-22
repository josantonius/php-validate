<?php
/**
 * PHP simple library for managing of data types.
 *
 * @author    Josantonius <hello@josantonius.com>
 * @copyright 2018 (c) Josantonius - PHP-Validate
 * @license   https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link      https://github.com/Josantonius/PHP-Validate
 * @since     1.0.0
 */
namespace Josantonius\Validate;

use PHPUnit\Framework\TestCase;

/**
 * Tests class for Validate library.
 */
class ValidateTest extends TestCase
{
    protected $validate;

    public function setUp()
    {
        parent::setUp();

        $this->validate = new Validate;
    }

    public function testInstanceOf()
    {
        $this->assertInstanceOf('Josantonius\Validate\Validate', $this->validate);
    }

    public function testArrayWhenPassArray()
    {
        $data = ['foo', 'bar'];

        $array = $this->validate->array($data);

        $this->assertInternalType('array', $array);

        $this->assertSame(['foo', 'bar'], $array);
    }

    public function testArrayWhenPassJsonArray()
    {
        $data = '["foo", "bar"]';

        $array = $this->validate->array($data);

        $this->assertInternalType('array', $array);

        $this->assertSame(['foo', 'bar'], $array);
    }

    public function testArrayWhenPassObject()
    {
        $data = new \StdClass;

        $data->foo = 'bar';

        $array = $this->validate->array($data);

        $this->assertInternalType('array', $array);

        $this->assertSame(['foo' => 'bar'], $array);
    }

    public function testArrayWhenPassJsonObject()
    {
        $data = '{"foo": "bar"}';

        $array = $this->validate->array($data);

        $this->assertInternalType('array', $array);

        $this->assertSame(['foo' => 'bar'], $array);
    }

    public function testArrayReturningDefaultValueInErrorCase()
    {
        $data = null;

        $this->assertNull($this->validate->array($data));

        $this->assertSame(['foo', 'bar'], $this->validate->array($data, ['foo', 'bar']));
    }

    public function testObjectWhenPassObject()
    {
        $data = new \StdClass;

        $data->foo = 'bar';

        $object = $this->validate->object($data);

        $this->assertInternalType('object', $object);

        $this->assertSame('bar', $object->foo);
    }

    public function testObjectWhenPassJsonObject()
    {
        $data = '{"foo": "bar"}';

        $object = $this->validate->object($data);

        $this->assertInternalType('object', $object);

        $this->assertSame('bar', $object->foo);
    }

    public function testObjectWhenPassArray()
    {
        $data = ['foo' => 'bar'];

        $object = $this->validate->object($data);

        $this->assertInternalType('object', $object);

        $this->assertSame('bar', $object->foo);
    }

    public function testObjectReturningDefaultValueInErrorCase()
    {
        $data = new \StdClass;

        $data->foo = 'bar';

        $this->assertNull($this->validate->object(null));

        $this->assertSame($data, $this->validate->object(null, $data));
    }

    public function testJsonWhenPassJson()
    {
        $data = '{"foo": "bar"}';

        $json = $this->validate->json($data);

        $this->assertInternalType('string', $json);

        $this->assertSame('{"foo": "bar"}', $json);
    }

    public function testJsonWhenPassArray()
    {
        $data = ['foo' => 'bar'];

        $json = $this->validate->json($data);

        $this->assertInternalType('string', $json);

        $this->assertSame('{"foo":"bar"}', $json);
    }

    public function testJsonWhenPassObject()
    {
        $data = new \StdClass;

        $data->foo = 'bar';

        $json = $this->validate->json($data);

        $this->assertInternalType('string', $json);

        $this->assertSame('{"foo":"bar"}', $json);
    }

    public function testJsonReturningDefaultValueInErrorCase()
    {
        $this->assertNull($this->validate->object(null));

        $this->assertSame('{"foo":"bar"}', $this->validate->object(null, '{"foo":"bar"}'));
    }

    public function testStringWhenPassString()
    {
        $string = $this->validate->string('foo');

        $this->assertInternalType('string', $string);

        $this->assertSame('foo', $string);
    }

    public function testStringWhenPassInteger()
    {
        $string = $this->validate->string(221104);

        $this->assertInternalType('string', $string);

        $this->assertSame('221104', $string);
    }

    public function testStringReturningDefaultValueInErrorCase()
    {
        $this->assertNull($this->validate->string(null));

        $this->assertSame('foo', $this->validate->string(null, 'foo'));
    }

    public function testIntegerWhenPassInteger()
    {
        $integer = $this->validate->integer(8);

        $this->assertInternalType('integer', $integer);

        $this->assertSame(8, $integer);
    }

    public function testIntegerWhenPassString()
    {
        $integer = $this->validate->integer('8');

        $this->assertInternalType('integer', $integer);

        $this->assertSame(8, $integer);
    }

    public function testIntegerReturningDefaultValueInErrorCase()
    {
        $this->assertNull($this->validate->integer(null));

        $this->assertSame(8, $this->validate->integer(null, 8));
    }

    public function testFloatWhenPassFloat()
    {
        $float = $this->validate->float(8.8);

        $this->assertInternalType('float', $float);

        $this->assertSame(8.8, $float);
    }

    public function testFloatWhenPassString()
    {
        $float = $this->validate->float('8.8');

        $this->assertInternalType('float', $float);

        $this->assertSame(8.8, $float);
    }

    public function testFloatReturningDefaultValueInErrorCase()
    {
        $this->assertNull($this->validate->float(null));

        $this->assertSame(8.8, $this->validate->float(null, 8.8));
    }

    public function testBooleanTrueWhenPassBooleanTrue()
    {
        $this->assertTrue($this->validate->boolean(true));
    }

    public function testBooleanTrueWhenPassStringTrue()
    {
        $this->assertTrue($this->validate->boolean('true'));
    }

    public function testBooleanTrueWhenPassIntegerOne()
    {
        $this->assertTrue($this->validate->boolean(1));
    }

    public function testBooleanTrueWhenPassStringOne()
    {
        $this->assertTrue($this->validate->boolean('1'));
    }

    public function testBooleanFalseWhenPassBooleanFalse()
    {
        $this->assertFalse($this->validate->boolean(false));
    }

    public function testBooleanFalseWhenPassStringFalse()
    {
        $this->assertFalse($this->validate->boolean('false'));
    }

    public function testBooleanFalseWhenPassIntegerZero()
    {
        $this->assertFalse($this->validate->boolean(0));
    }

    public function testBooleanFalseWhenPassStringZero()
    {
        $this->assertFalse($this->validate->boolean('0'));
    }

    public function testBooleanReturningDefaultValueInErrorCase()
    {
        $this->assertNull($this->validate->boolean(null));

        $this->assertTrue($this->validate->boolean(null, true));
    }

    public function testIp()
    {
        $ip = $this->validate->ip('255.255.255.0');

        $this->assertInternalType('string', $ip);

        $this->assertSame('255.255.255.0', $ip);
    }

    public function testIpReturningDefaultValueInErrorCase()
    {
        $this->assertNull($this->validate->ip(null));

        $this->assertSame('255.255.255.0', $this->validate->ip(null, '255.255.255.0'));
    }

    public function testUrl()
    {
        $url = $this->validate->url('https://josantonius.com');

        $this->assertInternalType('string', $url);

        $this->assertSame('https://josantonius.com', $url);
    }

    public function testUrlReturningDefaultValueInErrorCase()
    {
        $this->assertNull($this->validate->url(null));

        $this->assertSame(
            'https://josantonius.com',
            $this->validate->url(null, 'https://josantonius.com')
        );
    }

    public function testEmail()
    {
        $email = $this->validate->email('hello@josantonius.com');

        $this->assertInternalType('string', $email);

        $this->assertSame('hello@josantonius.com', $email);
    }

    public function testEmailReturningDefaultValueInErrorCase()
    {
        $this->assertNull($this->validate->email(null));

        $this->assertSame(
            'hello@josantonius.com',
            $this->validate->email(null, 'hello@josantonius.com')
        );
    }
}
