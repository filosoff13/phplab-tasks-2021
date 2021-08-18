<?php

namespace basics;

class BasicsValidator implements BasicsValidatorInterface
{

    public function isMinutesException(int $minute): void
    {
        throw new \InvalidArgumentException("invalid argument is:" . $minute);
    }

    public function isYearException(int $year): void
    {
        throw new \InvalidArgumentException("input year is" . $year . "and it`s lower than 1900");
    }

    public function isValidStringException(string $input): void
    {
        throw new \InvalidArgumentException("Input contains more then 6 digits");
    }
}