<?php

namespace VendorName\Tests;

use VendorName\Example;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function trueIsTrue()
    {
        $example = new Example('foo');

        $this->assertInstanceOf(Example::class, $example);
        $this->assertEquals('foo', $example->name());
    }
}
