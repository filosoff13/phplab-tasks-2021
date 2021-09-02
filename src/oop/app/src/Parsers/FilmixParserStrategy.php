<?php

namespace src\oop\app\src\Parsers;

use Exception;
use src\oop\app\src\Models\Movie;

class FilmixParserStrategy implements ParserInterface
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

    public function parseContent(string $siteContent): Movie
    {
        $data = [];

        $patterns = [
            'title'       => '/<h1 class="name" itemprop="name">(.*?)<\/h1>/si',
            'poster'      => '/<meta property=\"og:image" content="(.*?)" \/>/si',
            'description' => '/<div class="full-story">(.*?)<\/div>/si',
        ];

        foreach ($patterns as $key => $pattern) {
            preg_match($pattern, $siteContent, $matches);

            if (!isset($matches) || !$matches[1]) {
                throw new Exception("An error occurred when we tried to parse '$key'");
            }

            $data[$key] = $matches[1];
        }

        return new Movie($data['title'], $data['poster'], $data['description']);

    }
}