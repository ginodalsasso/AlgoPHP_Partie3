<?php

class Casting{

 
    private Film $film;
    private Acteur $acteurs;
    private Role $roles;

    
    public function __construct(Film $film, Acteur $acteurs, Role $roles){
        $this->film = $film;
        $this->acteur = $acteurs;
        $this->role = $roles;
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

 
    public function getActeurs()
    {
        return $this->acteurs;
    }


    public function setActeurs($acteurs)
    {
        $this->acteurs = $acteurs;

        return $this;
    }

 
    public function getRoles()
    {
        return $this->roles;
    }

    public function setRoles($roles)
    {
        $this->roles = $roles;

        return $this;
    }

////////////////////////////////////////////////////////////
}