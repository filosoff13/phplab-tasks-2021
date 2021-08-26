<?php

namespace src\oop\app\src\Transporters;

class CurlStrategy implements TransportInterface
{

    public function getContent(string $url): string
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, TRUE);
        curl_setopt($ch, CURLOPT_NOBODY, TRUE); // remove body
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $head = curl_exec($ch);

        curl_close($ch);
        return $head;
    }
}