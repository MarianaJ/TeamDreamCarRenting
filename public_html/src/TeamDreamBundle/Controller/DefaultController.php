<?php

namespace TeamDreamBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TeamDreamBundle:Default:index.html.twig');
        
       
    }
    
    
     public function glownaAction()
    {
        return $this->render('TeamDreamBundle:Default:glowna.html.twig');
    }
    
     public function kontaktAction()
    {
        return $this->render('TeamDreamBundle:Default:kontakt.html.twig');
    }
    
    
     public function onasAction()
    {
        return $this->render('TeamDreamBundle:Default:onas.html.twig');
    }
    
     public function autaAction()
    {
        return $this->render('TeamDreamBundle:Default:auta.html.twig');
    }
    
    
    
}
