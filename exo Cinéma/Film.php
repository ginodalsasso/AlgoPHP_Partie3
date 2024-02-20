<?php

class Film {
 

    private string $titreFilm;
    private DateTime $parution;
    private int $duree;
    private Realisateur $realisateur;
    private Genre $genre;
    private string $synopsis;
    private array $casting;  // liste des acteurs du film

    
    public function __construct(string $titreFilm, string $parution, int $duree, Realisateur $realisateur, Genre $genre, string $synopsis){
            $this->titreFilm = $titreFilm;
            $this->parution = new DateTime($parution);
            $this->duree = $duree;
            $this->realisateur = $realisateur;
            $this->genre = $genre;
            $this->synopsis = $synopsis;
            $this->casting = [];
    }
}
