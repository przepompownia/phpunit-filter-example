<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testWithoutDataProvider()
    {
        $this->assertTrue(true);
    }

    /**
     * @dataProvider dataProvider
     */
    public function testWithDataProvider($param)
    {
        $this->assertTrue($param);
    }

    public function dataProvider()
    {
        return [[true]];
    }
}
