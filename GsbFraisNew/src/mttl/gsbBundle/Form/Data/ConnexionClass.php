<?php

namespace mttl\gsbBundle\Form\Data;

class ConnexionClass
{
    private $login;
    private $mdp;
    private $profil;
    
    public function __construct() {
        ;
    }
    
    public function getLogin(){
        return $this->login;
    }
    
    public function setLogin($login){
        $this->login = $login;
    }
    
    public function getMdp(){
        return $this->mdp;
    }
    
    public function setMdp($mdp){
        $this->mdp = $mdp;
    }
    
    public function getProfil(){
        return $this->profil;
    }
    
    public function setProfil($profil){
        $this->profil = $profil;
    }
}