<?php

class Movie
{
    public $title;
    public $director;
    public $years;
    public $genres = [];
    public $language;

    public function __construct($_title,  $_director,  $_years, $_genres,  $_language)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->years = $_years;
        $this->genres = $_genres;
        $this->language = $_language;
    }

    public function getInfoMovie()
    {return "
    <h1>{$this->title}</h1>
    <p><b>Regista:</b> {$this->director}</p>
    <p><b>Anno:</b> {$this->years}</p>
    <p><b>Generi:</b> " . implode(", ", $this->genres) . "</p>
    <p><b>Lingua:</b> {$this->language}</p>";
    }
}
