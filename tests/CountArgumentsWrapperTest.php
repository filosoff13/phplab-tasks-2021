<?php

use PHPUnit\Framework\TestCase;

class CountArgumentsWrapperTest extends TestCase
{
    protected $functions;

    public function setUp(): void
    {
        $this->functions = new functions\Functions();
    }

    /**
     * @dataProvider positiveDataProvider
     * @param array $input
     */
    public function testPositive(...$input): void
    {
        $this->expectException(InvalidArgumentException::class);

        $this->functions->countArgumentsWrapper(...$input);
    }

    public function positiveDataProvider(): array
    {
        return [
            [1, 2, 3, 4],
            ['test', 44, 23],
            [true, '234'],
            ['test', 'test1', 'test2', 3]
        ];
    }
}