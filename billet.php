<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of billet
 *
 * @author Thuders
 */
class billet 
{
    protected $id;
    protected $titre;
    protected $contenu;
    protected $auteur;
    protected $date;
    
    function getId()
    {
        return $this->id;
    }

    function getTitre() 
    {
        return $this->titre;
    }

    function getContenu() 
    {
        return $this->contenu;
    }

    function getAuteur()
    {
        return $this->auteur;
    }

    function getDate()
    {
        return $this->date;
    }

    function setId($id)
    {
        $this->id = $id;
    }

    function setTitre($titre) 
    {
        $this->titre = $titre;
    }

    function setContenu($contenu) 
    {
        $this->contenu = $contenu;
    }

    function setAuteur($auteur)
    {
        $this->auteur = $auteur;
    }

    function setDate($date) 
    {
        $this->date = $date;
    }

        //put your code here
}
