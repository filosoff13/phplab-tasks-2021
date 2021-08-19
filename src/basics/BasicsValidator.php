<?php

namespace basics;

class BasicsValidator implements BasicsValidatorInterface
{

    public function isMinutesException(int $minute): void
    {
        if ($minute < 0 || $minute > 60) {
            throw new \InvalidArgumentException("invalid argument is:" . $minute);
        }
    }

    public function isYearException(int $year): void
    {
        if ($year < 1900){
            throw new \InvalidArgumentException("input year is" . $year . "and it`s lower than 1900");
        }
    }

    public function isValidStringException(string $input): void
    {
        $input_len = strlen($input);
        if ($input_len !== 6){
            throw new \InvalidArgumentException("Input contains more then 6 digits");
        }
    }
}