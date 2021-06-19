<?php

namespace Base\Tests;

use Base\Example;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testInstantiation()
    {
        $example = new Example('foo');

        $this->assertInstanceOf(Example::class, $example);
        $this->assertEquals('foo', $example->name());
    }
}
