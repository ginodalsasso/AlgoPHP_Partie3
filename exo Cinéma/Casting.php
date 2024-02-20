<?php

class Casting{

 
    private Film $film;
    private Acteur $acteurs;
    private Role $roles;

    
    public function __construct(Film $film, Acteur $acteurs, Role $roles){
        $this->film = $film;
        $this->acteur = $acteurs;
        $this->role = $roles;
    }
}