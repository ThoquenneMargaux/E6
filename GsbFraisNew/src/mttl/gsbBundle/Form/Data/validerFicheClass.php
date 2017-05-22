<?php

namespace mttl\gsbBundle\Form\Data;

class validerFicheClass
{
    private $mois;
    private $visiteurs;
    
    public function __construct() {
        ;
    }
    
    public function getMois(){
        return $this->mois;
    }
    
    public function setMois($mois){
        $this->mois = $mois;
    }
    
    function getVisiteurs() {
        return $this->visiteurs;
    }

    function setVisiteurs($visiteurs) {
        $this->visiteurs = $visiteurs;
    }
   
}