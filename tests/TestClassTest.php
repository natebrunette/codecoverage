<?php

namespace Test\Test;

use PHPUnit_Framework_TestCase;
use Test\TestClass;

class TestClassTest extends PHPUnit_Framework_TestCase
{
    public function testMyMethod()
    {
        $class = new TestClass();

        self::assertSame(4, $class->myMethod());
    }
}
