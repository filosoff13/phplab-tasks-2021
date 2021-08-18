<?php

namespace basics;

class Basics implements BasicsInterface
{

    public function getMinuteQuarter(int $minute): string
    {
        // TODO: Implement getMinuteQuarter() method.
        if ($minute >= 0 && $minute < 16){
            return "first";
        } elseif ($minute > 15 && $minute < 31){
            return "second";
        } elseif ($minute > 30 && $minute < 46){
            return "third";
        } elseif ($minute > 45 && $minute <= 60){
            return "fourth";
        } else {
            throw new InvalidArgumentException;
        }
    }

    public function isLeapYear(int $year): bool
    {
        // TODO: Implement isLeapYear() method.
    }

    public function isSumEqual(string $input): bool
    {
        // TODO: Implement isSumEqual() method.
    }
}