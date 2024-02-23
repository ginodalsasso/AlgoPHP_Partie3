<?php

class Contrat{

    private Joueur $joueur;
    private Club $club;
    private int $debutSaison;
    

    public function __Construct(Joueur $joueur, Club $club, int $debutSaison){
        $this->joueur = $joueur;
        $this->club = $club;
        $this->debutSaison = $debutSaison;
        $club->addClub($this);
        $joueur->addJoueur($this);
    }

/////////////////////////////////////////////////////////////

    public function getJoueur()
    {
        return $this->joueur;
    }

    public function setJoueur($joueur)
    {
        $this->joueur = $joueur;

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

 
    public function getDebutSaison()
    {
        return $this->debutSaison;
    }

    public function setDebutSaison($debutSaison)
    {
        $this->debutSaison = $debutSaison;

        return $this;
    }

    /////////////////////////////////////////////////////////////


}