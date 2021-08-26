<?php

use PHPUnit\Framework\TestCase;

class SayHelloTest extends TestCase
{
    protected $functions;

    public function setUp(): void
    {
        $this->functions = new functions\Functions();
    }

    /**
     *
     */
    public function testPositive(): void
    {
        $this->assertEquals('Hello', $this->functions->sayHello());
    }
}