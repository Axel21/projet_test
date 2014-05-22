<?php

namespace Vae\BaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;




class RubriqueController extends controller {
    
    public function detailAction($_locale, $nomSite, $slugRubrique){
        
        //on va chercher dans la base de données
        $modelManager = $this->getDoctrine()->getManager();
        
  
        $rSite = $modelManager->getRepository('VaeMultiSiteBundle:Sites')->findOneByNom($nomSite);
        
        if(!$rSite){
            
            throw $this->createNotFoundException('This page does not exist.');
        }
        
        if($_locale == 'fr'){
        $rRubrique = $modelManager->getRepository('VaeBaseBundle:Rubriques')->findOneBy(array('sites'=>$rSite->getId(),
                                                                                              'slug'=>$slugRubrique));
        }
        
        else{
        $rRubrique = $modelManager->getRepository('VaeBaseBundle:Rubriques')->findOneBy(array('sites'=>$rSite->getId(),
                                                                                              'slugEn'=>$slugRubrique));    
        }
        
        if(!$rRubrique){
            
            throw $this->createNotFoundException('This page does not exist.');
        }
        
    
         //on charge la vue et on lui envoi la liste des catégories
        
        return $this->render('VaeBaseBundle:Rubrique:detail.html.twig',
               array('rubrique' => $rRubrique,
                     'site' => $rSite,
                     'langue' => $_locale));

    }
    
   public function menuAction($_locale, $nomSite){
        
        //on va chercher la liste des catégories !
        
        $modelManager = $this->getDoctrine()->getManager();
        
        $rSite = $modelManager->getRepository('VaeMultiSiteBundle:Sites')->findOneByNom($nomSite);
        
        $rsRubriques = $modelManager->getRepository('VaeBaseBundle:Rubriques')->findBy(array('sites'=>$rSite->getId()));
        

        //on charge la vue et on lui envoi la liste des catégories
        return $this->render('VaeBaseBundle:Rubrique:menu.html.twig',
                array('rubriques' => $rsRubriques,
                      'site' => $rSite,
                      'langue' => $_locale));
    }
   
   
}

?>

