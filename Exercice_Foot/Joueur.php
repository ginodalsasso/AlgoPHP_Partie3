<?php

class Joueur{

    private string $prenom;
    private string $nom;
    private DateTime $dateNaissance;
    private Pays $pays;
    private array $contrats;


    public function __construct (string $prenom, string $nom, string $dateNaissance, Pays $pays){
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->dateNaissance = new DateTime ($dateNaissance);
        $this->pays = $pays;
        $this->contrats = [];
        $this->pays->addJoueur($this);
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


    public function afficherContratsJoueur() {                 //nous affichera les contrats de chaque Joueurs
        $result = "<h2>Carrière de $this</h2><ul>";

            foreach($this->contrats as $contrat) {
        $result .= "<li>" .$contrat->getClubs()."</li>";        //va chercher dans l'objet contrat les club
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