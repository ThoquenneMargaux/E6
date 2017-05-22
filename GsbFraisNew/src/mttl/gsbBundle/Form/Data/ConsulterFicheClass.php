<?php

namespace mttl\gsbBundle\Form\Data;

class ConsulterFicheClass
{
    private $mois;
    
    public function __construct() {
        ;
    }
    
    public function getMois(){
        return $this->mois;
    }
    
    public function setMois($mois){
        $this->mois = $mois;
    }
    
   
}