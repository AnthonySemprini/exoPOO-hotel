<?php

class Chambre{

    private int $_chambreNum;
    private int $_nbrLit;
    private int $_prixChambre;
    private bool $_wifi;


    public function __construct(Hotel $_chambreNum,int $_nbrLit, int $_prixChambre, bool $_wifi){
        $this->_chambreNum = $_chambreNum;
        $this ->_nbrLit = $_nbrLit;
        $this->_prixChambre = $_prixChambre;
        $this->_wifi = $_wifi;
    }

    //getter 

   public function getChambreNum(){
        return $this->_chambreNum;
    }

    public function getNbrLit(){
        return $this->_nbrLit;
    }

    public function getPrixChambre(){
        return $this->_prixChambre;
    }
  
    public function getWifi(){
        return $this->_wifi;
    }
//setter


public function setChambreNum(int $_chambreNum){ 
    $this->_chambreNum = $_chambreNum;
}
public function setNbrLit(int $_nbrLit){
    $this->_nbrLit = $_nbrLit;
}
public function setPrixChambre(int $_prixChambre){
    $this->_prixChambre = $_prixChambre;
}       
public function setWifi(bool $_wifi){
    $this->_wifi = $_wifi;
}

public function __toString(){
    return $this->_chambreNum;
}
}