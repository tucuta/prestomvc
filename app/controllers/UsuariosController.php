<?php

/*
 * Todos los derechos reservados por Manuel Jhobanny Morillo Ordoñez 
 * 2015
 * Contacto: geomorillo@yahoo.com
 */

namespace app\controllers;
use system\core\BaseController;

class UsuariosController extends BaseController{

    public function indexAction()
    {
        $userModel = new UserModel("user");

        $users = $userModel->getUsers();
        
    }

}