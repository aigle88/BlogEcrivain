<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of commentaires_managers
 *
 * @author Thuders
 */
require 'DBFactory.php';
class commentaires_managers 
{
   public function Add(commentaires $commentaires) 
    {
        $db = DBFactory::dataBaseConnecte();
       $reponse = $db->prepare('INSERT INTO commentaires(id_article,contenu,auteur,date) VALUES (:id_article, :contenu, :auteur, :date)');
       $req = execute(array('id_article'=>$commentaires->getId_article(),'contenu'=>$commentaires->getContenu(),'auteur'=>$commentaires->getAuteur(),'date'=>$commentaires->getDate()));
    }
    
    public function Delate(comentaires $commentaires)
    {
        $db = DBFactory::dataBaseConnecte();
        $reponse = $db->prepare('DELETE FROM  WHERE ID =:id');
        $req = execute(array('id'=>$commentaires->getId()));
    }
    
    public function Update(commentaire $commentaires)
    {
         $db = DBFactory::dataBaseConnecte();
        $reponse = $db->prepare('UPDATE commentaires(id,id_article,contenu,auteur,date) SET ID (:id, :id_article, :contenu,:auteur,:date)');
        $req = execute(array('id'=>$commentaires->getId(),'id_article'=>$commentaires->getId_article(),'contenu'=>$commentaires->getContenu(),'auteur'=>$commentaires->getAuteur(),'date'=>$commentaires->getDate()));
    }
    
}
