<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\DTO;

/**
 * Description of ConnexionDTO
 *
 * @author Formation
 */
class ConnexionDTO {
    
    private $identifiant;
    private $mdp;
    function getIdentifiant() {
        return $this->identifiant;
    }

    function getMdp() {
        return $this->mdp;
    }

    function setIdentifiant($identifiant) {
        $this->identifiant = $identifiant;
    }

    function setMdp($mdp) {
        $this->mdp = $mdp;
    }


}
