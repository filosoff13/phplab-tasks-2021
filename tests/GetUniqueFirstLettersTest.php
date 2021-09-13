<?php

use PHPUnit\Framework\TestCase;

require_once '../src/web/functions.php';

class GetUniqueFirstLettersTest extends TestCase
{
    public function testPositive(array $input, array $expected): void
    {
        $this->assertEquals($expected, getUniqueFirstLetters($input));
    }

    public function positiveDataProvider(): array
    {
        return [
            [
                [
                    ["name" => 'A'],
                    ["name" => 'B'],
                    ["name" => 'C'],
                    ["name" => 'D']
                ],
                ['A','B','C','D']
            ],
            [
                [
                    ["name" => 'A'],
                    ["name" => 'A'],
                    ["name" => 'A']
                ],
                ['A']
            ],
            [
                [
                    ['name' => 'Pavlo'],
                    ['name' => 'Ivan'],
                    ['name'=>'Stepan'],
                    ['name' => 'Andrew']
                ],
                ['A','I','P','S']
            ]
        ];
    }
}