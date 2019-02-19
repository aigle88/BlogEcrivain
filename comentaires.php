<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of comentaires
 *
 * @author Thuders
 */
class comentaires 
{
     protected $id;
     protected $id_article;
    protected $contenu;
    protected $auteur;
    protected $date;
    
    function getId() 
    {
        return $this->id;
    //put your code herE²²e
    }
    function getId_article() 
    {
        return $this->id_article;
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

    function setId_article($id_article) 
    {
        $this->id_article = $id_article;
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


}
