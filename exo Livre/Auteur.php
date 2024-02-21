<?php

class Auteur{

    private string $nom;
    private string $prenom;
    private array $livres;

    public function __construct(string $nom, string $prenom){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->livres = [];
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

        //////////////////getters and setters///////////////////


    public function addLivre(Livre $livre) {
        $this->livres[] = $livre;
    }


    public function bibliographie(){
        $result = "<h1>Bibliographie de $this:</h1><ul>";

        foreach ($this->livres as $livre){
            $result .= "<li>$livre</li>";
        }

        $result .= "</ul>";
    
        return $result;
    }

    public function calculPrix(){
        $result = 0;
        foreach ($this->livres as $livre){
            $result += $livre->getPrix();
        }
        
        return "Le prix total de l'ensemble de la bibliographie de $this est de " .$result;
    }


    public function __toString(){
        return  $this->nom ." ". $this->prenom;
    }
    
}
