<?php

class Movies
{
    public $title;
    public $genre;
    public $img;
    public $seen;


    /**
     * Movie Constructor
     * @param string $title
     * @param string $genre
     * @param string $img
     * @param bool $seen
     */
    function __construct(string $title, string $genre, string $img, bool $seen = false)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->img = $img;
        $this->seen = $seen;
    }

    public function setSeen(bool $seen)
    {
        $this->seen = $seen;
    }
}
