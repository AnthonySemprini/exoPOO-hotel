<?php

class Hotel{

    private  $_nomHotel;
    private string $_ville;
    private string $_adresse;
    private array $_chambres = [];
    private array $_reservations = [];

    public function __construct(string $_nomHotel,string $_ville,string $_adresse){

        $this->_nomHotel = $_nomHotel;
        $this->_ville = $_ville;
        $this->_adresse = $_adresse;
        $this->_chambres = [];
        $this->_reservations = [];

    }

    // getter

    public function getNomHotel(){
        return $this->_nomHotel;
    }
    public function getVille(){
        return $this->_ville;
    }
    public function getAdresse(){
        return $this->_adresse;
    }
    

    //setter

    public function setNomHotel(string $_nomHotel){
        $this->_nomHotel = $_nomHotel;
    }
    public function setVille(string $_ville){
        $this->_ville = $_ville;
    }
    public function setAdresse(string $_adresse){
        $this->_adresse = $_adresse;
    }

    // function

    public function getInfos(){
        
         $result ="<br><br>Nom de l'hotel : ".$this->getNomHotel().
            "<br>Ville : ".$this->getVille().
            "<br>Adresse : ".$this->getAdresse();
           return $result;
    }

    public function __toString(){
        return $this->_nomHotel.$this->_ville;
    }
}
