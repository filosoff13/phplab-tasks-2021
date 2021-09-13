<?php

namespace src\oop\app\src\Parsers;


class FilmixParserStrategy implements ParserInterface
{
    /**
     * @param string $siteContent
     * @return array
     */
    public function parseContent(string $siteContent): array
    {
        $siteContent = mb_convert_encoding($siteContent, "utf-8", "windows-1251");
        $pattern = '/(?:<a\sclass="fancybox"(?:[A-z0-9="\s])+href=")([A-z0-9:\/\-\.]+)(?:">)/';
        $aboutMovie['poster'] = $this->getContent($pattern, $siteContent);
        $pattern = '/(?:<h1\sclass="name"[A-z0-9="\s]+>)(.+)(?:<\/h1>)/uU';
        $aboutMovie['title']= $this->getContent($pattern, $siteContent);
        $pattern = '/(?:<div\sclass="full-story">)(.+)(?:<\/div>)/uU';
        $aboutMovie['description'] = $this->getContent($pattern, $siteContent);

        return $aboutMovie;
    }

    /**
     * @param string $pattern
     * @param string $subject
     * @return string
     */
    public function getContent(string $pattern, string $subject): string
    {
        preg_match($pattern, $subject, $matches);
        return $matches[1];
    }
}