<?php

use PHPUnit\Framework\TestCase;

class CountArgumentsTest extends TestCase
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
        $this->assertEquals($expected, $this->functions->countArguments(...$input));
    }

    /**
     * @return array[]
     */
    public function positiveDataProvider(): array
    {
        return [
            [[], ['argument_count' => 0, 'argument_values' => [],]],
            [['test_string'], ['argument_count' => 1, 'argument_values' => ['test_string'],]],
            [['first', 'second'], ['argument_count' => 2, 'argument_values' => ['first', 'second'],]],
        ];
    }

}