<?php

class Pays{

    private string $nomPays;
    private array $club;
    private array $joueur;

    public function __construct(string $nomPays){
        $this->nomPays = $nomPays;
        $this->clubs = [];
        $this->joueurs = [];
    }

    
    /////////////////////////////////////////////////////////////

    public function getNomPays()
    {
        return $this->nomPays;
    }

    public function setNomPays($nomPays)
    {
        $this->nomPays = $nomPays;

        return $this;
    }

 
    public function getClub()
    {
        return $this->club;
    }

    public function setClub($club)
    {
        $this->club = $club;

        return $this;
    }


    public function getJoueur()
    {
        return $this->joueur;
    }

    public function setJoueur($joueur)
    {
        $this->joueur = $joueur;

        return $this;
    }

/////////////////////////////////////////////////////////////

public function addClubs(Club $club) {
    $this->clubs[] = $club;
}


public function afficherClubs() {                 //nous affichera les clubs de chaque pays
    $result = "<h2>$this</h2><ul>";

        foreach($this->clubs as $club) {
    $result .= "<li>" .$club->getClub()."</li>";        //va chercher dans l'objet club dans pays
    }
    $result .= "</ul>";
    return $result;
}


public function addJoueur(Joueur $joueur) {
    $this->joueurs[] = $joueur;
}


// public function afficherJoueurs() {                 //nous affichera les joueurs chaque pays, n'est pas demandé dans l'exercice
//     $result = "<h2>$this</h2><ul>";

//         foreach($this->clubs as $club) {
//     $result .= "<li>" .$clubs->getClubs()."</li>";        //va chercher dans l'objet contrat les club
//     }
//     $result .= "</ul>";
//     return $result;
// }



public function __toString(){
    return $this->$nomPays;
}
}