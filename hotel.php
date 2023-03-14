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
    public function getReservation(){
        return $this->_reservation;
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
    public function setReservations(string $_reservations){
        $this->_reservations = $_reservations;
    }

    // function


    public function addChambres(Chambre $chambre)
    {
        $this->_chambres[] = $chambre;
    }
    public function addReservations(Reservation $reservation)
    {
        $this->_reservations[] = $reservation;

    }

    public function getInfos(){
        
         $result ="<br><br>Nom de l'hotel : ".$this->getNomHotel().
            "<br>Ville : ".$this->getVille().
            "<br>Adresse : ".$this->getAdresse();
           return $result;
    }

    public function __toString(){
        return $this->_nomHotel.$this->_ville;
    }

    public function resaHotel(){
        $nbResaChambre = count($this->getReservations());
        echo $this->_nomHotel;

        if( 0 == count($this->_reservations)){
            echo "Zero reservation";
        }else{
            foreach ($this->_reservations as $reservation ){
                echo $reservation->getClient()->getNom()." ".$reservation->getChambre().$reservation."<br>";
            }
        }
    }
}
