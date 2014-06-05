<?php

namespace Vae\BaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;



class FormationController extends controller {
    
    public function indexAction($_locale, $nomSite, $slugRubrique){
        
        //on va chercher dans la base de données
        $modelManager = $this->getDoctrine()->getManager();
        
  
        $rSite = $modelManager->getRepository('VaeMultiSiteBundle:Sites')->findOneByNom($nomSite);
        
        if(!$rSite){
            
            throw $this->createNotFoundException('This page does not exist.');
        }
        
        
        if($_locale == 'fr'){
        
        $rRubrique = $modelManager->getRepository('VaeBaseBundle:Rubriques')->findOneBy(array('sites'=>$rSite->getId(),
                                                                                              'slug'=>$slugRubrique));
        $rsFormation = $modelManager->getRepository('VaeBaseBundle:Formations')->findBy(array('rubriques'=>$rRubrique->getId()));
        
        }
        
        else{
         
        $rRubrique = $modelManager->getRepository('VaeBaseBundle:Rubriques')->findOneBy(array('sites'=>$rSite->getId(),
                                                                                              'slugEn'=>$slugRubrique));
        $rsFormation = $modelManager->createQueryBuilder()
                                        ->select('f')
                                        ->from('VaeBaseBundle:Formations', 'f')
                                        ->where('f.rubriques = :Id')
                                        ->andWhere('f.slugEn IS NOT NULL')
                                        ->setParameter('Id', $rRubrique->getId())
                                        ->getQuery()
                                        ->getResult();
        }
        
        if(!$rRubrique){
            
            throw $this->createNotFoundException('This page does not exist.');
        }
        
        if(!$rsFormation){
            
            
            return $this->render('VaeBaseBundle:Formation:aucune.html.twig');
        }

        
        
        
        //on charge la vue et on lui envoi la liste des catégories
        
       
        return $this->render('VaeBaseBundle:Formation:liste.html.twig',
                array('formations' => $rsFormation,
                      'site' => $rSite,
                      'rubrique' => $rRubrique,
                      'langue' => $_locale));
    }
    
    public function detailAction($_locale, $nomSite, $slugRubrique, $slugFormation){
        
        //on va chercher dans la base de données
        $modelManager = $this->getDoctrine()->getManager();
        
  
        $rSite = $modelManager->getRepository('VaeMultiSiteBundle:Sites')->findOneByNom($nomSite);
        
        if(!$rSite){
            
            throw $this->createNotFoundException('This page does not exist.');
        }
        
        if($_locale == 'fr'){
            
            $rRubrique = $modelManager->getRepository('VaeBaseBundle:Rubriques')->findOneBy(array('sites'=>$rSite->getId(),
                                                                                                  'slug'=>$slugRubrique));
            
            $rFormation = $modelManager->getRepository('VaeBaseBundle:Formations')->findOneBy(array('rubriques'=>$rRubrique->getId(),
                                                                                                    'slug'=>$slugFormation));
        }
        
        else{
            
            $rRubrique = $modelManager->getRepository('VaeBaseBundle:Rubriques')->findOneBy(array('sites'=>$rSite->getId(),
                                                                                                  'slugEn'=>$slugRubrique));
            
            $rFormation = $modelManager->getRepository('VaeBaseBundle:Formations')->findOneBy(array('rubriques'=>$rRubrique->getId(),
                                                                                                    'slugEn'=>$slugFormation));
        }
        

        if(!$rFormation){
            
            throw $this->createNotFoundException('This page does not exist.');
        }
        
        $User = $this->get('security.context')->getToken()->getUser();
        
        $verifUser = $modelManager->getRepository('VaeInscriptionBundle:Inscriptions')->findOneBy(array('formations'=>$rFormation->getId(),
                                                                                                        'users'=>$User));
        
        $verifFormation = $modelManager->getRepository('VaeInscriptionBundle:Inscriptions')->findBy(array('formations'=>$rFormation->getId()));
        
        $nbInscrit = count($verifFormation);
        //var_dump($result);
        //die();
        
        
        //on charge la vue et on lui envoi la liste des catégories
        return $this->render('VaeBaseBundle:Formation:detail.html.twig',
                array('formation' => $rFormation,
                      'site' => $rSite,
                      'rubrique' => $rRubrique,
                      'langue' => $_locale,
                      'verifUser' => $verifUser,
                      'nbInscrit' => $nbInscrit));
    }
    
    
}

?>
