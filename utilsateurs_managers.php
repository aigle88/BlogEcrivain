<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of utilsateurs_managers
 *
 * @author Thuders
 */
require 'DBFactory.php';
class utilsateurs_managers
{
    public function Add(utilisateurs $user) 
    {
        $db = DBFactory::dataBaseConnecte();
        $reponse = $db->prepare('INSERT INTO utilisateurs(pseudo,password,role) VALUES (:pseudo, :password, :role)');
       $req = execute(array('pseudo'=>$user->getPseudo(),'password'=>$user->getPassword(),'role'=>$user->getRole()));
        
        
    }
         
    public function Delate(utilisateurs $user) 
    {
        $db = DBFactory::dataBaseConnecte();
        $reponse = $db->prepare('DELETE FROM utilisateurs WHERE ID =:id');
        $req = execute(array('id'=>$user->getId()));
        
    }
    
    public function Update(utilisateurs $user)
    {
        $db = DBFactory::dataBaseConnecte();
        $reponse = $db->prepare('UPDATE utilisateurs(id,pseudo,password,role) SET ID (:id, :pseudo, :password,:role)');
        $req = execute(array('id'=>$user->getId(),'pseudo'=>$user->getPseudo(),'password'=>$user->getPassword(),'role'=>$user->getRole()));
        
    }
    
    
}



