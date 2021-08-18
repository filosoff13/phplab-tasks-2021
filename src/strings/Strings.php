<?php

namespace strings;

class Strings implements StringsInterface
{

    public function snakeCaseToCamelCase(string $input): string
    {
        return lcfirst(str_replace('_', '', ucwords($input, '_')));
    }

    public function mbStrRev($str): string
    {
        $r = '';
        for ($i = mb_strlen($str); $i>=0; $i--) {
            $r .= mb_substr($str, $i, 1);
        }
        return $r;
    }

    public function mirrorMultibyteString(string $input): string
    {
        $new_string = '';
        $words = mb_split(" ", $input);
        foreach ($words as $word){
            $new_string .= $this->mbStrRev($word);
            $new_string .= ' ';
        }
        return trim($new_string);
    }

    public function getBrandName(string $noun): string
    {
        $str_len = strlen($noun);
        if ($noun[0] === $noun[$str_len - 1]){
            return ucfirst(strtolower(mb_substr($noun, 0, -1) . $noun));
        } else {
            return 'The ' . ucfirst(strtolower($noun));
        }
    }
}