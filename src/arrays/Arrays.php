<?php

namespace arrays;

class Arrays implements ArraysInterface
{

    public function repeatArrayValues(array $input): array
    {
        $arr = [];
        foreach ($input as $value) {
            for ($i = 0; $i < $value; $i++){
                $arr[] = $value;
            }
        }
        return $arr;
    }

    public function getUniqueValue(array $input): int
    {
        $arr = [];
        foreach (array_count_values($input) as $key => $value) {
            if ($value === 1) {
                $arr[] = $key;
            }
        }
        return empty($arr)? 0 : min($arr);
    }

    public function groupByTag(array $input): array
    {
        $arr = [];
        foreach ($input as $value) {
            foreach ($value['tags'] as $tag) {
                $arr[$tag][] = $value['name'];
            }
        }
        foreach ($arr as &$value) {
            sort($value);
        }
        return $arr;
    }
}