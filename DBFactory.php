<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DBFactory
 *
 * @author Thuders
 */
class DBFactory 
{
    public static function dataBaseConnecte() 
    {
            try
        {
           $db = new PDO('mysql:host=localhot;bddname=blogecrivain;chatset=utf8','root','');
        }
            catch (Exception $ex)
        {            die('Erreur :' .$ex->getMessage());            
            
        }
        return $db;
      
        
        
    }
    //put your code here
}
