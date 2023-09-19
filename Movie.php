<?php

class Movie{
    public $title;
    public $director;
    public $years;
    public $genre;
    public $language;

    public function __construct(string $_title, string $_director, string $_years, string $_genre, string $_language)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->years = $_years;
        $this->genre = $_genre;
        $this->language = $_language;
    }


    public function getInfoMovie()
    {
        return 
        $this->title . " <br> " . 
        $this->director . " <br>" . 
        $this->years . " <br>" . 
        $this->genre . " <br> " . 
        $this->language;
    }
}