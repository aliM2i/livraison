<?php

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
    private $pdeRetrait;
    private $pdeLivraison;
    private $etat;
    private $prix;
    
    function getClient() {
        return $this->client;
    }

    function getLivreur() {
        return $this->livreur;
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

    function setClient($client) {
        $this->client = $client;
    }

    function setLivreur($livreur) {
        $this->livreur = $livreur;
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


}
