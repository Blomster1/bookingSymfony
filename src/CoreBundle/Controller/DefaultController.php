<?php

namespace CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        if($this->getUser() != null){
            return $this->render('CoreBundle:Default:index.html.twig', array('user'=>$this->getUser()));
        } else {
            return $this->redirectToRoute('fos_user_security_login');
        }

    }
}
