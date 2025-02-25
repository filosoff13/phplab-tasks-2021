<?php

namespace src\oop\app\src\Models;

class Movie implements MovieInterface
{

    protected string $title;
    protected string $poster;
    protected string $description;

    /**
     * @param string $title
     * @param string $poster
     * @param string $description
     */
    public function __construct(string $title, string $poster, string $description)
    {
        $this->title = $title;
        $this->poster = $poster;
        $this->description = $description;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getPoster(): string
    {
        return $this->poster;
    }

    public function setPoster(string $poster): void
    {
        $this->poster = $poster;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
}