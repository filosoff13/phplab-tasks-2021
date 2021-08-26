<?php

namespace src\oop\app\src\Parsers;

class KinoukrDomCrawlerParserAdapter implements ParserInterface
{

    protected $title;
    protected $poster;
    protected $description;

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getPoster()
    {
        return $this->poster;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    public function parseContent(string $siteContent)
    {
        // TODO: Implement parseContent() method.
    }
}