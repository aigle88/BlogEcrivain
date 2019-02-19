<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of utilisateurs
 *
 * @author Thuders
 */
class utilisateurs 
{
    protected $id;
    protected $pseudo;
    protected $password;
    protected $role;
    
    
        function getId() 
    {
        return $this->id;
    }

        function getPseudo() 
    {
        return $this->pseudo;
    }

    function getPassword() 
    {
        return $this->password;
    }

    function getRole()
    {
        return $this->role;
    }

    function setId($id) 
    {
        $this->id = $id;
    }

    function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    function setPassword($password) 
    {
        $this->password = $password;
    }

    function setRole($role) 
    {
        $this->role = $role;
    }

    //put your code here
}
