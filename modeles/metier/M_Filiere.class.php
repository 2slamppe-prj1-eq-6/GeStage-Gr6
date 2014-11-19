<?php

/**
 * Description of M_Role
 *
 * @author btssio
 */
class M_Filiere {

    private $id; // type : int
    private $libelle; // nom complet de la filière

    function __construct($id, $libelle) {
        $this->id = $id;
        $this->libelle = $libelle;
    }
    
    public function getId() {
        return $this->id;
    }

    public function getLibelle() {
        return $this->libelle;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setLibelle($libelle) {
        $this->libelle = $libelle;
    }

    
    
}