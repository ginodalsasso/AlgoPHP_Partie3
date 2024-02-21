<?php

class Genre {

 
    private string $genre;
    private array $films;

    
    public function __construct (string $nomDuGenre){
        $this->nomDuGenre = $nomDuGenre;
        $this->films = [];
    }

/////////////////getters and setters///////////////////

    
    public function getGenre()
    {
        return $this->nomDuGenre;
    }
 
    public function setGenre($nomDuGenre)
    {
        $this->nomDuGenre = $nomDuGenre;

        return $this;
    }


    public function getFilms()
    {
        return $this->films;
    }

    public function setFilms($films)
    {
        $this->films = $films;

        return $this;
    }

////////////////////////////////////////////////////////////


    public function addFilm(Film $film) {
        $this->films[] = $film;
    }

    public function genreParFilm(){                                             //me listera les films auquel est associé le genre
        $result = "Le genre  {$this->getGenre()} est associé à:</br>";
        
        foreach ($this->films as $film){
            $result .= $film ."</br>";
        }
        return $result;
    }
}



