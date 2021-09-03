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
use src\oop\app\src\Parsers\KinoukrDomCrawlerParserAdapter;
use src\oop\app\src\Transporters\CurlStrategy;
use src\oop\app\src\Models\Movie;
use src\oop\app\src\Transporters\GuzzleAdapter;

class Scrapper
{

    protected $url;
    protected $siteContent;
    protected $content;
    protected $parseContent;

    /**
     * @param CurlStrategy|GuzzleAdapter $content
     * @param FilmixParserStrategy|KinoukrDomCrawlerParserAdapter $parseContent
     */
    public function  __construct(CurlStrategy $content, FilmixParserStrategy $parseContent)
    {
        $this->content = $content;
        $this->parseContent = $parseContent;
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getMovie($url): Movie
    {
        $this->content->getContent($url);

//        $movie = new Movie($this->parseContent->parseContent($this->siteContent));
//        $movie->setTitle();
//        $movie->setDescription();
//        $movie->setPoster();

        return new Movie($this->parseContent->parseContent($this->siteContent));
    }
}