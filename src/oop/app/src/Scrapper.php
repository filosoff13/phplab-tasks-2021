<?php
/**
 * Create Class - Scrapper with method getMovie().
 * getMovie() - should return Movie Class object.
 *
 * Note: Use next namespace for Scrapper Class - "namespace src\oop\app\src;"
 * Note: Dont forget to create variables for TransportInterface and ParserInterface objects.
 * Note: Also you can add your methods if needed.
 */

namespace src\oop\app\src;

use src\oop\app\src\Parsers\FilmixParserStrategy;
use src\oop\app\src\Transporters\CurlStrategy;

class Scrapper
{

    protected $url;
    protected $siteContent;

    public function __constract(CurlStrategy $curlStrategy, FilmixParserStrategy $filmixParserStrategy)
    {
        $curlStrategy->getContent();
    }


    public function getMovie()
    {
        return new Movie();
    }
}