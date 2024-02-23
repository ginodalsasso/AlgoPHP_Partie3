<?php

class Casting{

    private Film $film;
    private Acteur $acteur;
    private Role $role;
    
    public function __construct(Film $film, Acteur $acteur, Role $role){
        $this->film = $film;
        $this->acteur = $acteur;
        $this->role = $role;
        $film->addCasting($this);  //ajoute un casting à l'objet film
        $acteur->addCasting($this);  //ajoute un acteur à l'objet film
        $role->addCasting($this);  //ajoute un role à l'objet film
    }

//////////////////getters and setters///////////////////

 
    public function getFilm()
    {
        return $this->film;
    }

    public function setFilm($film)
    {
        $this->film = $film;

        return $this;
    }

 
    public function getActeur()
    {
        return $this->acteur;
    }


    public function setActeur($acteur)
    {
        $this->acteur = $acteur;

        return $this;
    }

 
    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }
}