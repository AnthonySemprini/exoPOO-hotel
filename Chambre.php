<?php

class Chambre{

    private Hotel $_nomHotel;
    private int $_prixChambre;
    private string $_typeChambre;

    public function __construct(Hotel $_nomHotel, int $_prixChambre, string $_typeChambre){
        $this->_nomHotel = $_nomHotel;
        $this->_prixChambre = $_prixChambre;
        $this->_typeChambre = $_typeChambre;
    }

    public function getNomHotel(): Hotel{
        return $this->_nomHotel;
    }
    public function getPrixChambre(): int{
        return $this->_prixChambre;
    }
    public function getTypeChambre(): string{
        return $this->_typeChambre;
    }


    public function setNomHotel(Hotel $_nomHotel){
        $this->_nomHotel = $_nomHotel;
    }
    public function setPrixChambre(int $_prixChambre){
        $this->_prixChambre = $_prixChambre;
    }
    public function setTypeChambre(string $_typeChambre){
        $this->_typeChambre = $_typeChambre;
    }
    public function __toString(){
        return $this->_nomHotel. " ". $this->_prixChambre. " ". $this->_typeChambre;
    }
}