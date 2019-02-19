<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of signalement
 *
 * @author Thuders
 */
class signalement {
    protected $id;
    protected $id_commentaire;
    protected $auteur;
    protected $contenu;
    protected $date;
    function getId() {
        return $this->id;
    }

    function getId_commentaire() {
        return $this->id_commentaire;
    }

    function getAuteur() {
        return $this->auteur;
    }

    function getContenu() {
        return $this->contenu;
    }

    function getDate() {
        return $this->date;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setId_commentaire($id_commentaire) {
        $this->id_commentaire = $id_commentaire;
    }

    function setAuteur($auteur) {
        $this->auteur = $auteur;
    }

    function setContenu($contenu) {
        $this->contenu = $contenu;
    }

    function setDate($date) {
        $this->date = $date;
    }

        //put your code here
}
