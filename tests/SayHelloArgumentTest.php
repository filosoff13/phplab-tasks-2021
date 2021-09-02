<?php

use PHPUnit\Framework\TestCase;

class SayHelloArgumentTest extends TestCase
{
    protected $functions;

    public function setUp(): void
    {
        $this->functions = new functions\Functions();
    }

    /**
     * @dataProvider positiveDataProvider
     * @param $input
     * @param $expected
     */
    public function testPositive($input, $expected): void
    {
        $this->assertEquals($expected, $this->functions->sayHelloArgument($input));
    }

    /**
     * @return array
     */
    public function positiveDataProvider(): array
    {
        return [
            [0, 'Hello 0'],
            ['test', 'Hello test'],
            [true, 'Hello 1'],
        ];
    }
}