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

//  CASTING //

    public function addCasting(Casting $casting) {
        $this->casting[] = $casting;
    }

    public function afficherCasting() {                 //nous affichera le casting
        $result = "<h2>Casting de $this</h2><ul>";

        foreach($this->casting as $cast) {
            $result .= "<li>".$cast->getActeur()." ".$cast->getRole()."</li>";  //va chercher dans l'objet casting l'acteur et son role
        }

        $result .= "</ul>";
        return $result;
    }

    public function afficherInfos() {           //nous affichera toutes les infos du film y compris le casting
        $result = "<h1>$this</h1>";
        $result .= "<b>Durée :</b> ". $this->duree." min<br>";
        $result .= "<b>Réalisateur :</b> ". $this->realisateur."<br>";
        $result .= "<b>Genre : </b>". $this->genre."<br>";
        $result .= $this->afficherCasting();
        return $result;
    }


//  ROLE //

    public function __toString(){
        return $this->titreFilm ." ". $this->getParution()->format("Y");
    }
}
