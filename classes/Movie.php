<?php

class Movies
{
    public $title;
    public $genre;
    public $img;
    public $seen = false;

    function __construct(string $title, string $genre, string $img, bool $seen)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->img = $img;
        $this->seen = $seen;
    }
}
