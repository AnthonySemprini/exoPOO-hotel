<?php

class Hotel{

    private  $_nomHotel;
    private string $_ville;
    private string $_adresse;
    private int $_nbrChambre;

    public function __construct(string $_nomHotel,string $_ville,string $_adresse,int $_nbrChambre){

        $this->_nomHotel = $_nomHotel;
        $this->_ville = $_ville;
        $this->_adresse = $_adresse;
        $this->_nbrChambre = $_nbrChambre;

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
    public function getNbrChambre(){
        return $this->_nbrChambre;
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
    public function setNbrChambre(int $_nbrChambre){
        $this->_nbrChambre = $_nbrChambre;
    }


    public function getInfos(){
        
         $result ="Nom de l'hotel : ".$this->getNomHotel().
            "<br>Ville : ".$this->getVille().
            "<br>Adresse : ".$this->getAdresse().
            "<br>Nombre de chambre : ".$this->getNbrChambre();
        return $result;
    }

    public function __toString(){
        return $this->_nomHotel;
    }
}
