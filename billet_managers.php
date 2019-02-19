<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of billet_managers
 *
 * @author Thuders
 */
require 'DBFactory.php';
class billet_managers 
{
    public function Add(billet $billet) 
    {
        $db = DBFactory::dataBaseConnecte();
       $reponse = $db->prepare('INSERT INTO billet(titre,contenu,auteur,date) VALUES (:titre, :contenu, :auteur, :date)');
       $req = execute(array('titre'=>$billet->getTitre(),'contenu'=>$billet->getContenu(),'auteur'=>$billet->getAuteur(),'date'=>$billet->getDate()));
    }
    
    public function Delate(billet $billet)
    {
        $db = DBFactory::dataBaseConnecte();
        $reponse = $db->prepare('DELETE FROM  WHERE ID =:id');
        $req = execute(array('id'=>$billet->getId()));
    }
    
    public function Update(billet $billet)
    {
         $db = DBFactory::dataBaseConnecte();
        $reponse = $db->prepare('UPDATE billet(id,titre,contenu,auteur,date) SET ID (:id, :titre, :contenu,:auteur,:date)');
        $req = execute(array('id'=>$billet->getId(),'titre'=>$billet->getTitre(),'contenu'=>$billet->getContenu(),'auteur'=>$billet->getAuteur(),'date'=>$billet->getDate()));
    }
}