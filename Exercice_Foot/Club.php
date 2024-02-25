<?php

class Club{

    private string $club;
    private Pays $pays;
    private array $contrats;

    public function __construct(string $club, Pays $pays){
        $this->club = $club;
        $this->pays = $pays;
        $this->contrats = [];
        $this->pays->addClub($this);
    }


/////////////////////////////////////////////////////////////

    public function getClub()
    {
        return $this->club;
    }

    public function setClub($club)
    {
        $this->club = $club;

        return $this;
    }

    public function getPays()
    {
        return $this->pays;
    }

    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }


    public function getContrats()
    {
        return $this->contrats;
    }

    public function setContrats($contrats)
    {
        $this->contrats = $contrats;

        return $this;
    }

/////////////////////////////////////////////////////////////

    public function addContrat(Contrat $contrat) {
        $this->contrats[] = $contrat;
    }

    public function afficherContratsClub() {                 //nous affichera les contrats de chaque Clubs
        $result = "<h2>$this</h2><ul>";

            foreach($this->contrats as $contrat) {
        $result .= "<li>" .$contrat->getJoueur() ." ". $contrat->getDebutSaison() ."</li>";        //va chercher dans l'objet contrat les joueurs et leurs débuts de saison
        }
        $result .= "</ul>";
        return $result;
    }

    public function __toString(){
        return  $this->club;
    }

}