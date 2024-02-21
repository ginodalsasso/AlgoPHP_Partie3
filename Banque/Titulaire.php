<?php

class Titulaire{

    private string $nom;
    private string $prenom;
    private string $dateDeNaissance;
    private string $ville;
    private array $comptes;

    public function __construct(string $nom, string $prenom, string $dateDeNaissance, string $ville) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateDeNaissance = $dateDeNaissance;
        $this->ville = $ville;
        $this->comptes = [];
    }


    //////////////////getters and setters///////////////////


    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }


    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }


    public function getDateDeNaissance(): string
    {
        return $this->dateDeNaissance;
    }

    public function setDateDeNaissance($dateDeNaissance)
    {
        $this->dateDeNaissance = $dateDeNaissance;

        return $this;
    }


    public function getVille(): string
    {
        return $this->ville;
    }

    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }


     //////////////////getters and setters///////////////////



    // associe un compte bancaire à un titulaire
     public function addCompte(CompteBancaire $compte) {
        $this->comptes[] = $compte;
    }


    // affiche toutes les informations du titulaire
    public function afficherInformations() {
        $age = $this->calculerAge();
        $result = "$this<br/>";
        $result .= "Date de naissance: $this->dateDeNaissance<br/>";
        $result .= "Âge: $age ans<br/>";
        $result .= "Ville: $this->ville<br/>";
        $result .= "<br/>";
        $result .= "Comptes bancaires:<br/>";
        foreach ($this->comptes as $compte) {
            $result .= $compte->afficherInformations();
        }

        return $result;
    }


    // calcul de l'âge
    public function calculerAge(): int {
        $dateDeNaissance = new DateTime($this->dateDeNaissance);
        $aujourdHui = new DateTime();
        $difference = $dateDeNaissance->diff($aujourdHui);
        return $difference->y;
    }


    // concatène le prénom et le nom afin de ne pas à avoir à les citer séparément
    public function __toString(){
        return $this->prenom." ".$this->nom;
    }
}

