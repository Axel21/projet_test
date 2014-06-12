<?php
namespace Vae\BaseBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class AgendaController extends controller {
    
    
        public function agendaAction($_locale, $nomSite){
        
        
        $modelManager = $this->getDoctrine()->getManager();
        
        $rSite = $modelManager->getRepository('VaeMultiSiteBundle:Sites')->findOneByNom($nomSite);
            
        
        
        
        if($_locale == 'fr'){
        
            $rsAgendas = $modelManager->createQueryBuilder()
                                        ->select('a')
                                        ->from('VaeBaseBundle:Agendas', 'a')
                                        ->where('a.sites = :Id')
                                        ->orderBy('a.date', 'DESC')
                                        ->setParameter('Id', $rSite->getId())
                                        ->getQuery()
                                        ->getResult();
            
            $rRubrique = $modelManager->getRepository('VaeBaseBundle:Rubriques')->findOneBy(array('sites'=>$rSite->getId(),
                                                                                                  'slug'=> 'accueil'));
        }
        
        else{
            
            $rsAgendas = $modelManager->createQueryBuilder()
                                        ->select('a')
                                        ->from('VaeBaseBundle:Agendas', 'a')
                                        ->where('a.sites = :Id')
                                        ->andWhere('a.slugEn IS NOT NULL')
                                        ->orderBy('a.date', 'DESC')
                                        ->setParameter('Id', $rSite->getId())
                                        ->getQuery()
                                        ->getResult();
            
            $rRubrique = $modelManager->getRepository('VaeBaseBundle:Rubriques')->findOneBy(array('sites'=>$rSite->getId(),
                                                                                                  'slugEn'=>'home'));
        }

        //on charge la vue et on lui envoi la liste des catégories
        return $this->render('VaeBaseBundle:Agenda:agenda.html.twig',
                array('agendas' => $rsAgendas,
                      'site' => $rSite,
                      'langue' => $_locale,
                      'rubrique' => $rRubrique));
    }
    
    
    public function listeAction($_locale, $nomSite){
        
        
        $modelManager = $this->getDoctrine()->getManager();
        
        $rSite = $modelManager->getRepository('VaeMultiSiteBundle:Sites')->findOneByNom($nomSite);
        
        if($_locale == 'fr'){
        
            $rsAgendas = $modelManager->createQueryBuilder()
                                        ->select('a')
                                        ->from('VaeBaseBundle:Agendas', 'a')
                                        ->where('a.sites = :Id')
                                        ->andwhere('a.date > :NOW')
                                        ->orderBy('a.date', 'ASC')
                                        ->setParameter('Id', $rSite->getId())
                                        ->setParameter(':NOW', new \DateTime())    
                                        ->setMaxResults('5')
                                        ->getQuery()
                                        ->getResult();
           /* var_dump($rsAgendas);
            die(); */

        }
        
        else{
            
            $rsAgendas = $modelManager->createQueryBuilder()
                                        ->select('a')
                                        ->from('VaeBaseBundle:Agendas', 'a')
                                        ->where('a.sites = :Id')
                                        ->andwhere ('a.date >= :NOW')
                                        ->andWhere('a.slugEn IS NOT NULL')
                                        ->orderBy('a.date', 'ASC')
                                        ->setParameter('Id', $rSite->getId())
                                        ->setParameter(':NOW', new \DateTime())
                                        ->setMaxResults('5')
                                        ->getQuery()
                                        ->getResult();
            
        }

        //on charge la vue et on lui envoi la liste des catégories
        return $this->render('VaeBaseBundle:Agenda:liste.html.twig',
                array('agendas' => $rsAgendas,
                      'site' => $rSite,
                      'langue' => $_locale));
    }
    
        public function detailAction($_locale, $nomSite, $slugAgenda){
        
        //on va chercher dans la base de données
        $modelManager = $this->getDoctrine()->getManager();
        
  
        $rSite = $modelManager->getRepository('VaeMultiSiteBundle:Sites')->findOneByNom($nomSite);
        
        if(!$rSite){
            
            throw $this->createNotFoundException('This page does not exist.');
        }
        
        if($_locale == 'fr'){
            
            $rAgenda = $modelManager->getRepository('VaeBaseBundle:Agendas')->findOneBy(array('sites'=>$rSite->getId(),
                                                                                              'slug'=>$slugAgenda));
            
            $rRubrique = $modelManager->getRepository('VaeBaseBundle:Rubriques')->findOneBy(array('sites'=>$rSite->getId(),
                                                                                                  'slug'=> 'accueil'));

        }
        
        else{
            
           $rAgenda = $modelManager->getRepository('VaeBaseBundle:Agendas')->findOneBy(array('sites'=>$rSite->getId(),
                                                                                             'slugEn'=>$slugAgenda));
           
           $rRubrique = $modelManager->getRepository('VaeBaseBundle:Rubriques')->findOneBy(array('sites'=>$rSite->getId(),
                                                                                                  'slugEn'=>'home'));
            
        }
        
        
        if(!$rAgenda){
            
            throw $this->createNotFoundException('This page does not exist.');
        }
        
        
        
        //on charge la vue et on lui envoi la liste des catégories
        return $this->render('VaeBaseBundle:Agenda:detail.html.twig',
                array('agenda' => $rAgenda,
                      'site' => $rSite,
                      'langue' => $_locale,
                      'rubrique' => $rRubrique));
    }
}

?>
