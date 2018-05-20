<?php

namespace LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LoginBundle:Default:index.html.twig');
    }

    public function usuarioPrincipalAction(){
      
        return $this->render('LoginBundle:Default:usuario_principal.html.twig' );
    }

    public function administradorPrincipalAction(){

    	return $this->render('LoginBundle:Default:admin_principal.html.twig');
    }

    public function reportesAction(){

        return $this->render('LoginBundle:Default:reportes.html.twig');
    }

}
