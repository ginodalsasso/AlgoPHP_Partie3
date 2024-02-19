<?php

class CompteBancaire {
    private string $libelle;
    private float $soldeInitial;
    private string $devise;
    private Titulaire $titulaire;

    public function __construct($libelle, $soldeInitial, $devise, Titulaire $titulaire) {
        $this->libelle = $libelle;
        $this->soldeInitial = $soldeInitial;
        $this->devise = $devise;
        $this->titulaire = $titulaire;
        $titulaire->addCompte($this); //// Ajoute ce compte au tableau de comptes du titulaire
    }


    //////////////////getters and setters///////////////////



    public function getLibelle(): array
    {
        return $this->libelle;
    }

    public function setLibellé($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }


    public function getSoldeInitial(): string
    {
        return $this->soldeInitial;
    }

    public function setSoldeInitial($soldeInitial)
    {
        $this->soldeInitial = $soldeInitial;

        return $this;
    }


    public function getDevise(): string
    {
        return $this->devise;
    }

    public function setDevise($devise)
    {
        $this->devise = $devise;

        return $this;
    }


    public function getTitulaire() 
    {
        return $this->titulaire;
    }

    public function setTitulaire($titulaire)
    {
        $this->titulaire = $titulaire;

        return $this;
    }


    //////////////////getters and setters///////////////////
    


    // affiche toutes les informations du compte et le nom et le prénom du titulaire
    public function afficherInformations() {
        echo "Titulaire: {$this->titulaire->getNom()} {$this->titulaire->getPrenom()}</br>";
        echo "Libellé: $this->libelle </br>";
        echo "Solde initial: $this->soldeInitial $this->devise </br>";
    }


    public function crediter(float $montant) {
        if ($montant > 0) {
            $this->soldeInitial += $montant;
            echo "Le compte a été crédité d'un montant de :  $montant {$this->devise}. </br>Nouveau solde : {$this->soldeInitial} {$this->devise}</br>";
        } else {
            echo "Le montant à créditer doit être positif !</br>";
        }
    }

    public function debiter(float $montant) {
        if ($montant > 0) {
            $this->soldeInitial -= $montant;
            echo "Le compte a été débité d'un montant de :  $montant {$this->devise}. </br>Nouveau solde : {$this->soldeInitial} {$this->devise}</br>";
        } else {
            echo "Le montant à débiter doit être positif !</br>";
        }
    }

    public function effectuerVirement(CompteBancaire $compteDestination, float $montant) {
        if ($montant > 0) {
            $this->soldeInitial -= $montant;
            $compteDestination->soldeInitial += $montant;
            echo "Virement de $montant {$this->devise} effectué </br>";
        } else {
            echo "Le montant à transférer doit être positif ! </br>";
        }
    }
}