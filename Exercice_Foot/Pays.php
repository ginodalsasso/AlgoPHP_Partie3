<?php

class Pays{

    private string $pays;
    private array $clubs;
    private array $joueurs;

    public function __construct(string $pays){
        $this->pays = $pays;
        $this->clubs = [];
        $this->joueurs = [];
    }

    
    /////////////////////////////////////////////////////////////

    public function getPays()
    {
        return $this->pays;
    }

    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    
    public function getClubs()
    {
        return $this->clubs;
    }

    public function setClubs($clubs)
    {
        $this->clubs = $clubs;

        return $this;
    }


    public function getJoueurs()
    {
        return $this->joueurs;
    }

    public function setJoueurs($joueurs)
    {
        $this->joueurs = $joueurs;

        return $this;
    }

/////////////////////////////////////////////////////////////

    public function addClub(Club $club) {
        $this->clubs[] = $club;
    }


    public function afficherClubs() {                 //nous affichera les clubs de chaque pays
        $result = "<h2>$this</h2><ul>";

            foreach($this->clubs as $club) {
        $result .= "<li>" .$club->getClub(). "</li>";        //affichera les clubs de chaque pays instanciés
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
        return $this->pays;
    }
}


