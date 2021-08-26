<?php

use PHPUnit\Framework\TestCase;

class SayHelloArgumentWrapperTest extends TestCase
{
    protected $functions;

    public function setUp(): void
    {
        $this->functions = new functions\Functions();
    }

    public function testNegative($input, $expected): void
    {
        $this->expectException(InvalidArgumentException::class);

        //$this->functions->sayHelloArgumentWrapper($input);

        $this->assertEquals($expected, $this->functions->sayHelloArgumentWrapper($input));
    }

    /**
     * @return array
     */
    public function negativeDataProvider(): array
    {
        return [
            [0, 'Hello 0'],
            ['test', 'Hello test'],
            [true, 'Hello 1'],
        ];
    }
}