<?php

namespace Vae\MultiSiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;




class SiteController extends controller {
    
    public function indexAction($_locale){
        
 
        

        return $this->render('VaeMultiSiteBundle:Site:index.html.twig',
                array(
                      'langue' => $_locale));
    }
    
    
}

?>
