<?php

class Club{

    private string $nomClub;
    private Pays $pays;
    private array $contrat;

    public function __construct(string $nomClub, Pays $pays){
        $this->nomClub = $nomClub;
        $this->pays = $pays;
        $this->contrats = [];
        $this->pays->addClub($this);
    }


/////////////////////////////////////////////////////////////

    public function getNomClub()
    {
        return $this->nomClub;
    }

    public function setNomClub($nomClub)
    {
        $this->nomClub = $nomClub;

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

    public function getContrat()
    {
        return $this->contrat;
    }

    public function setContrat($contrat)
    {
        $this->contrat = $contrat;

        return $this;
    }

/////////////////////////////////////////////////////////////

    public function addContrat(Contrat $contrat) {
        $this->contrats[] = $contrat;
    }

    public function afficherContratsClub() {                 //nous affichera les contrats de chaque Clubs
        $result = "<h2>$this</h2><ul>";

            foreach($this->contrats as $contrat) {
        $result .= "<li>" .$contrat->getJoueur()."</li>";        //va chercher dans l'objet contrat les joueurs
        }
        $result .= "</ul>";
        return $result;
    }

    public function __toString(){
        return  $this->nomClub;
    }


}