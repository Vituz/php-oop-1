<?php

class Movies
{
    public $title;
    public $genre;
    public $img;
    public $downloaded;


    /**
     * Movie Constructor
     * @param string $title
     * @param string $genre
     * @param string $img
     * @param bool $downloaded
     */
    function __construct(string $title, string $genre, string $img, bool $downloaded = false)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->img = $img;
        $this->downloaded = $downloaded;
    }

    public function setDownloaded(bool $downloaded)
    {
        $this->downloaded = $downloaded;
    }
}
