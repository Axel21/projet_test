<?php

namespace Vae\BaseBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class LiensController extends controller {
    
    public function listeVideosAction($_locale, $nomSite){
        
        
        $modelManager = $this->getDoctrine()->getManager();
        
        $rSite = $modelManager->getRepository('VaeMultiSiteBundle:Sites')->findOneByNom($nomSite);
        
        $rsVideos = $modelManager->createQueryBuilder()
                                        ->select('v')
                                        ->from('VaeBaseBundle:liens', 'v')
                                        ->where('v.sites = :Id')
                                        ->andWhere('v.type = :Type')
                                        ->setParameter('Id', $rSite->getId())
                                        ->setParameter('Type', 'videos')
                                        ->getQuery()
                                        ->getResult();

       

        //on charge la vue et on lui envoi la liste des catégories
        return $this->render('VaeBaseBundle:Liens:listeVideos.html.twig',
                array('videos' => $rsVideos,
                      'site' => $rSite,
                      'langue' => $_locale));
    }
    
    public function listePartenairesAction($_locale, $nomSite){
        
        
        $modelManager = $this->getDoctrine()->getManager();
        
        $rSite = $modelManager->getRepository('VaeMultiSiteBundle:Sites')->findOneByNom($nomSite);
        
        $rsPartenaires = $modelManager->createQueryBuilder()
                                        ->select('p')
                                        ->from('VaeBaseBundle:liens', 'p')
                                        ->where('p.sites = :Id')
                                        ->andWhere('p.type = :Type')
                                        ->setParameter('Id', $rSite->getId())
                                        ->setParameter('Type', 'partenaires')
                                        ->getQuery()
                                        ->getResult();

       

        //on charge la vue et on lui envoi la liste des catégories
        return $this->render('VaeBaseBundle:Liens:listePartenaires.html.twig',
                array('partenaires' => $rsPartenaires,
                      'site' => $rSite,
                      'langue' => $_locale));
    }
    
        
}

?>
