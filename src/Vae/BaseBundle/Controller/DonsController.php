<?php
namespace Vae\BaseBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DonsController extends controller {
    
    
        public function DonsAction($_locale, $nomSite){
        
        
        $modelManager = $this->getDoctrine()->getManager();
        
        $rSite = $modelManager->getRepository('VaeMultiSiteBundle:Sites')->findOneByNom($nomSite);
            
        
        
        
        if($_locale == 'fr'){
        
            
            $rRubrique = $modelManager->getRepository('VaeBaseBundle:Rubriques')->findOneBy(array('sites'=>$rSite->getId(),
                                                                                                  'slug'=> 'accueil'));
        }
        
        else{
                 
            $rRubrique = $modelManager->getRepository('VaeBaseBundle:Rubriques')->findOneBy(array('sites'=>$rSite->getId(),
                                                                                                  'slugEn'=>'home'));
        }

        //on charge la vue et on lui envoi la liste des catégories
        return $this->render('VaeBaseBundle:Dons:dons.html.twig',
                array('site' => $rSite,
                      'langue' => $_locale,
                      'rubrique' => $rRubrique));
    }

}

?>
