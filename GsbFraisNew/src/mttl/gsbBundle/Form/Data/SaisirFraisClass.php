<?php

namespace mttl\gsbBundle\Form\Data;

class SaisirFraisClass
{
    private $etape;
    private $kilometrique;
    private $hotel;
    private $restaurant;
    
    public function __construct() {
        ;
    }
    
    public function getEtape(){
        return $this->login;
    }
    
    public function setEtape($etape){
        $this->etape = $etape;
    }
    
    public function getKiloemetrique(){
        return $this->kiloemetrique;
    }
    
    public function setKiloemetrique($kiloemetrique){
        $this->kiloemetrique = $kiloemetrique;
    }
    public function getHotel(){
        return $this->hotel;
    }
    
    public function setHotel($hotel){
        $this->hotel = $hotel;
    }
    public function getRestaurant(){
        return $this->restaurant;
    }
    
    public function setRestaurant($restaurant){
        $this->restaurant = $restaurant;
    }
}