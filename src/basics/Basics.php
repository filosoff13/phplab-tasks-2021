<?php

namespace basics;

class Basics implements BasicsInterface
{

    protected $validate;

    public function __construct()
    {
        $this->validate = new BasicsValidator;
    }

    public function getMinuteQuarter(int $minute): string
    {
        $this->validate->isMinutesException($minute);
        if ($minute > 0 && $minute < 16){
            return "first";
        } elseif ($minute > 15 && $minute < 31){
            return "second";
        } elseif ($minute > 30 && $minute < 46){
            return "third";
        } elseif (($minute > 45 && $minute <= 60) || $minute === 0){
            return "fourth";
        }
    }

    public function isLeapYear(int $year): bool
    {
        $this->validate->isYearException($year);
        return ($year % 4 === 0 && $year % 100 !== 0) || $year % 400 === 0;
    }

    public function isSumEqual(string $input): bool
    {
        $this->validate->isValidStringException($input);

        $arr = str_split($input);
        $sum1 = 0;
        $sum2 = 0;
        for ($i = 0; $i < 6 ; $i++)
        {
            if ($i < 3){
                $sum1 += $arr[$i];
            } else{
                $sum2 += $arr[$i];
            }
        }
        return ($sum1 === $sum2);
    }
}