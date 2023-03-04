<?php 

class Reservation{

    private Client $_client;
    private $_checkIn;
    private $_checkOut;
    private Chambre $_chambre;

    public function __construct(Client $_client, Chambre $_chambre,$_checkIn,$_checkOut){
        $this->_client = $_client;
        $this->_checkIn = new DateTime($_checkIn);
        $this->_checkOut = new DateTime($_checkOut);
        $this->_chambre = $_chambre;
    }
    //getter

    public function getClient(){
        return $this->_client;
    }
    public function getCheckIn(){
        return $this->_checkIn;
    }
    public function getCheckOut(){
        return $this->_checkOut;
    }
    public function getChambre(){
        return $this->_chambre;
    }

    //setter

    public function setClient(Client $_client){
        $this->_client = $_client;
    }
    public function setCheckIn(DateTime $_checkIn){
        $this->_checkIn = $_checkIn;
    }
    public function setCheckOut(DateTime $_checkOut){
        $this->_checkOut = $_checkOut;
    }
    public function setChambre(Chambre $_chambre){
        $this->_chambre = $_chambre;
    }

    //function

    public function __tooString(){
        return $this->getCheckIn().$this->getCheckOut();
    }
}