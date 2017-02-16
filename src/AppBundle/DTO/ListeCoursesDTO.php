<?php
namespace AppBundle\DTO;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ListeCoursesDTO
 *
 * @author Formation
 */
class ListeCoursesDTO {
    private $client;   
    private $livreur;    
    private $role;
    private $pdeRetrait;
    private $pdeLivraison;
    private $etat;
    private $prix;
    private $nom;
    private $prenom;
    private $numVoie;
    private $Ville;
    private $tel;
    private $identifiant;
    
    function getClient() {
        return $this->client;
    }

    function getLivreur() {
        return $this->livreur;
    }

    function getRole() {
        return $this->role;
    }

    function getPdeRetrait() {
        return $this->pdeRetrait;
    }

    function getPdeLivraison() {
        return $this->pdeLivraison;
    }

    function getEtat() {
        return $this->etat;
    }

    function getPrix() {
        return $this->prix;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getNumVoie() {
        return $this->numVoie;
    }

    function getVille() {
        return $this->Ville;
    }

    function getTel() {
        return $this->tel;
    }

    function getIdentifiant() {
        return $this->identifiant;
    }

    function setClient($client) {
        $this->client = $client;
    }

    function setLivreur($livreur) {
        $this->livreur = $livreur;
    }

    function setRole($role) {
        $this->role = $role;
    }

    function setPdeRetrait($pdeRetrait) {
        $this->pdeRetrait = $pdeRetrait;
    }

    function setPdeLivraison($pdeLivraison) {
        $this->pdeLivraison = $pdeLivraison;
    }

    function setEtat($etat) {
        $this->etat = $etat;
    }

    function setPrix($prix) {
        $this->prix = $prix;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setNumVoie($numVoie) {
        $this->numVoie = $numVoie;
    }

    function setVille($Ville) {
        $this->Ville = $Ville;
    }

    function setTel($tel) {
        $this->tel = $tel;
    }

    function setIdentifiant($identifiant) {
        $this->identifiant = $identifiant;
    }



}
