<?php

namespace src\oop\app\src\Transporters;

use GuzzleHttp;

class GuzzleAdapter implements TransportInterface
{

    /**
     * @param string $url
     * @return string
     * @throws GuzzleHttp\Exception\GuzzleException
     */
    public function getContent(string $url): string
    {
        $client = new GuzzleHttp\Client();
        $res = $client->request('GET', $url);

        return $res->getBody();
    }
}