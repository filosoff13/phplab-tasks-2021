<?php

namespace src\oop\app\src\Parsers;

use Symfony\Component\DomCrawler\Crawler;

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

    /**
     * @param string $siteContent
     * @return mixed|void
     */
    public function parseContent(string $siteContent)
    {
        $crawler = new Crawler($siteContent);

        foreach ($crawler as $domElement) {
            switch ($domElement->nodeName)
            {
                case 'title': $this->title = $domElement->nodeValue;
                break;
                case 'poster': $this->poster = $domElement->nodeValue;
                break;
                case 'description': $this->description = $domElement->nodeValue;
                break;
                default:
                    $this->title = $domElement->nodeValue;
            }

            //$this->title = $domElement->nodeValue;
        }

    }
}