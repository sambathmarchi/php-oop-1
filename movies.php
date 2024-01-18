<?php class Movie
{
    public $title;
    public $genre;
    public $language;

    public function __construct($titolo, $genere, $lingua)
    {
        $this->title = $titolo;
        $this->genre = $genere;
        $this->language = $lingua;
    }

    public function getMoviedetails()
    {
        $result = $this->title . ", " . $this->genre . ", " . $this->language . ".";
        return $result;
    }
    
}