<?php

class Film {
 

    private string $titreFilm;
    private DateTime $parution;
    private int $duree;
    private Realisateur $realisateur;
    private Genre $genre;
    private array $casting;  // liste des acteurs du film

    
    public function __construct(string $titreFilm, string $parution, int $duree, Realisateur $realisateur, Genre $genre){
            $this->titreFilm = $titreFilm;
            $this->parution = new DateTime($parution);
            $this->duree = $duree;
            $this->realisateur = $realisateur;
            $this->genre = $genre;
            $this->casting = [];
            $this->realisateur->addFilm($this);
            $this->genre->addFilm($this);
    }


//////////////////getters and setters///////////////////


    public function getTitreFilm()
    {
        return $this->titreFilm;
    }

    public function setTitreFilm($titreFilm)
    {
        $this->titreFilm = $titreFilm;

        return $this;
    }


    public function getParution()
    {
        return $this->parution;
    }

    public function setParution($parution)
    {
        $this->parution = $parution;

        return $this;
    }


    public function getDuree()
    {
        return $this->duree;
    }

    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }


    public function getRealisateur()
    {
        return $this->realisateur;
    }

    public function setRealisateur($realisateur)
    {
        $this->realisateur = $realisateur;

        return $this;
    }


    public function getGenre()
    {
        return $this->genre;
    }

    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }


    public function getCasting()
    {
        return $this->casting;
    }
 
    public function setCasting($casting)
    {
        $this->casting = $casting;

        return $this;
    }

////////////////////////////////////////////////////////////


    public function addCasting(Casting $casting) {
        $this->castings[] = $casting;
    }


    public function __toString(){
        return $this->titreFilm ." ". $this->getParution()->format("Y");
    }
}
