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
    {
        return "
        <div >
            <div >
                <h5 ><b>Film:</b> {$this->title}</h5>
            </div>
            <ul >
                <li ><b>Regista:</b> {$this->director}</li>
                <li ><b>Anno:</b> {$this->years}</li>
                <li ><b>Generi:</b> " . implode(", ", $this->genres) . "</li>
                <li ><b>Lingua:</b> {$this->language}</li>
            </ul>
        </div>";
    }
}
