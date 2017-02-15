<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\DTO;
/**
 * Description of InscriptionDTO
 *
 * @author Formation
 */
class InscriptionDTO {
    
    private $nom;
    private $identifiant;
    private $prenom;
    private $mdp;
    private $mdp2;
    private $numVoie;
    private $cp;
    private $ville;
    private $email;
    private $tel;
    private $role;
    function getNom() {
        return $this->nom;
    }

    function getIdentifiant() {
        return $this->identifiant;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getMdp() {
        return $this->mdp;
    }

    function getMdp2() {
        return $this->mdp2;
    }

    function getNumVoie() {
        return $this->numVoie;
    }

    function getCp() {
        return $this->cp;
    }

    function getVille() {
        return $this->ville;
    }

    function getEmail() {
        return $this->email;
    }

    function getTel() {
        return $this->tel;
    }

    function getRole() {
        return $this->role;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setIdentifiant($identifiant) {
        $this->identifiant = $identifiant;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setMdp($mdp) {
        $this->mdp = $mdp;
    }

    function setMdp2($mdp2) {
        $this->mdp2 = $mdp2;
    }

    function setNumVoie($numVoie) {
        $this->numVoie = $numVoie;
    }

    function setCp($cp) {
        $this->cp = $cp;
    }

    function setVille($ville) {
        $this->ville = $ville;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTel($tel) {
        $this->tel = $tel;
    }

    function setRole($role) {
        $this->role = $role;
    }


}
