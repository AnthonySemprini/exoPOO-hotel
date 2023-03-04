<?php


Class Client {
    
    private string $_nom;
    private string $_prenom;
    private array $_reservations = [];

    public function __construct ( $_nom, $_prenom)

    {
        $this -> _nom = $_nom;
        $this -> _prenom = $_prenom;
        $this -> _reservations = [];
    }

    //getter
    public function getNom ()
    {
        return $this -> _nom;
    }

    public function getPrenom ()
    {
        return $this -> _prenom;
    }

    //setter
    public function setNom ( $_nom)
    {
        $this -> _nom = $_nom;
    }

    public function setPrenom ( $_prenom)
    {
        $this -> _prenom = $_prenom;
    }

   //function
   

    public function __toString()
    {
    return $this-> _nom . $this-> _prenom;
    }
}