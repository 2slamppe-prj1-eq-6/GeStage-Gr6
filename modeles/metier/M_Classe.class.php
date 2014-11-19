<?php

/**
 * Description of M_Role
 *
 * @author btssio
 */
class M_Classe {

    private $numclasse; // type : string
    private $idspecialite;
    private $numfiliere;
    private $nomclasse;

    function __construct($numclasse,$idspecialite,$numfiliere,$nomclasse) {
        $this->numclasse = $numclasse;
        $this->idspecialite = $idspecialite;
        $this->numfiliere = $numfiliere;
        $this->nomclasse = $nomclasse;
    }
    
    public function getNumclasse() {
        return $this->numclasse;
    }

    public function getIdspecialite() {
        return $this->idspecialite;
    }

    public function getNumfiliere() {
        return $this->numfiliere;
    }

    public function getNomclasse() {
        return $this->nomclasse;
    }

    public function setNumclasse($numclasse) {
        $this->numclasse = $numclasse;
    }

    public function setIdspecialite($idspecialite) {
        $this->idspecialite = $idspecialite;
    }

    public function setNumfiliere($numfiliere) {
        $this->numfiliere = $numfiliere;
    }

    public function setNomclasse($nomclasse) {
        $this->nomclasse = $nomclasse;
    }
}