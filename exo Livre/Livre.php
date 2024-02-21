<?php

class Livre{

    private string $titre;
    private int $nbPages;
    private DateTime $parution;
    private float $prix;
    private Auteur $auteur;

    public function __construct(string $titre, int $nbPages, string $parution, float $prix, Auteur $auteur){
        $this->titre = $titre;
        $this->nbPages = $nbPages;
        $this->parution = new DateTime($parution);
        $this->prix = $prix;
        $this->auteur = $auteur;
        $auteur->addLivre($this); //// Ajoute ce Livre à la bibliographie de l'auteur
    }


    //////////////////getters and setters///////////////////


    public function getTitre(): string
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
        return $this;
    }


    public function getNbPages(): int
    {
        return $this->nbPages;
    }

    public function setNbPages($nbPages)
    {
        $this->nbPages = $nbPages;
        return $this;
    }


    public function getParution(): DateTime
    {
        return $this->parution;
    }

    public function setParution($parution)
    {
        $this->parution = $parution;
        return $this;
    }

    
    public function getPrix(): float
    {
        return $this->prix;
    }
 
    public function setPrix($prix)
    {
        $this->prix = $prix;
        return $this;
    }


    public function getAuteur()
    {
        return $this->auteur;
    }

    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
        return $this;
    }

     //////////////////getters and setters///////////////////
    public function getInfos (){
        echo "Titre du livre :" . $this . "</br>";
        echo "Nombre de pages : {$this->getNbPages()} </br>";
        echo "Prix : {$this->getPrix()} </br>";
    }

    public function __toString(){
        return $this->titre ." ". $this->getParution()->format("Y")." ".$this->getNbPages()." ".$this->getPrix()." €";
    }
}