<?php

class Joueur{

    private string $prenom;
    private string $nom;
    private DateTime $dateNaissance;
    private Pays $nationalite;
    private array $contrat;


    public function __construct (string $prenom, string $nom, string $dateNaissance, Pays $nationalite){
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->dateNaissance = new DateTime ($dateNaissance);
        $this->nationalite = $nationalite;
        $this->contrats = [];
        $nationalite->addPays($this);
    }


/////////////////////////////////////////////////////////////

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }


    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }


    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }


    public function getNationalite()
    {
        return $this->nationalite;
    }
 
    public function setNationalite($nationalite)
    {
        $this->nationalite = $nationalite;

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


    public function afficherContratsJoueur() {                 //nous affichera les contrats de chaque Joueurs
        $result = "<h2>Carrière de $this</h2><ul>";

            foreach($this->contrats as $contrat) {
        $result .= "<li>" .$contrat->getClub()."</li>";        //va chercher dans l'objet contrat les club
        }
        $result .= "</ul>";
        return $result;
    }


    // calcul de l'âge
    public function calculerAge(): int {
        $dateNaissance = new DateTime($this->dateNaissance);
        $aujourdHui = new DateTime();
        $difference = $dateNaissance->diff($aujourdHui);
        return $difference->y;
    }

    // function public getInfos(){
//////////////////PREVOIR LES GETINFOS
    //     return $result
    // }


    public function __toString(){
        return  $this->prenom ." ". $this->nom;
    }

}