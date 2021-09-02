<?php

use PHPUnit\Framework\TestCase;

class SayHelloArgumentWrapperTest extends TestCase
{
    protected $functions;

    public function setUp(): void
    {
        $this->functions = new functions\Functions();
    }

    /**
     * @return void
     */
    public function testNegative(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $this->functions->sayHelloArgumentWrapper([]);
    }
}