<?php

/**
 * Description of M_Promotion
 *
 * @author kbouchet
 */
class M_Promotion {
    private $anneescol; // année scolaire de la promotion
    private $idpersonne; // id de l'étudiant
    private $numclasse; // numéro de classe

    function __construct($anneescol, $idpersonne, $numclasse) {
        $this->anneescol = $anneescol;
        $this->idpersonne = $idpersonne;
        $this->numclasse = $numclasse;
    }
    
    public function getAnneescol() {
        return $this->anneescol;
    }

    public function getIdpersonne() {
        return $this->idpersonne;
    }

    public function getNumclasse() {
        return $this->numclasse;
    }

    public function setAnneescol($anneescol) {
        $this->anneescol = $anneescol;
    }

    public function setIdpersonne($idpersonne) {
        $this->idpersonne = $idpersonne;
    }

    public function setNumclasse($numclasse) {
        $this->numclasse = $numclasse;
    }

  
    
}