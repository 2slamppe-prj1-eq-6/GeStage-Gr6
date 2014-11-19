<?php

/**
 * Description of M_Role
 *
 * @author btssio
 */
class M_Annee {

    private $anneescol; // type : char

    function __construct($anneescol) {
        $this->anneescol = $anneescol;
    }
    public function getAnneescol() {
        return $this->anneescol;
    }

    public function setAnneescol($anneescol) {
        $this->anneescol = $anneescol;
    }
}