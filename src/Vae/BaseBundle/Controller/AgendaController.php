<?php
namespace Vae\BaseBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class AgendaController extends controller {
    
    public function listeAction($_locale, $nomSite){
        
        
        $modelManager = $this->getDoctrine()->getManager();
        
        $rSite = $modelManager->getRepository('VaeMultiSiteBundle:Sites')->findOneByNom($nomSite);
        
        if($_locale == 'fr'){
        
            $rsAgendas = $modelManager->getRepository('VaeBaseBundle:Agendas')->findBy(array('sites'=>$rSite->getId()));
        }
        
        else{
            
            $rsAgendas = $modelManager->createQueryBuilder()
                                        ->select('a')
                                        ->from('VaeBaseBundle:Agendas', 'a')
                                        ->where('a.sites = :Id')
                                        ->andWhere('a.slugEn IS NOT NULL')
                                        ->setParameter('Id', $rSite->getId())
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

        }
        
        else{
            
           $rAgenda = $modelManager->getRepository('VaeBaseBundle:Agendas')->findOneBy(array('sites'=>$rSite->getId(),
                                                                                             'slugEn'=>$slugAgenda));
            
        }
        
        
        if(!$rAgenda){
            
            throw $this->createNotFoundException('This page does not exist.');
        }
        
        
        
        //on charge la vue et on lui envoi la liste des catégories
        return $this->render('VaeBaseBundle:Agenda:detail.html.twig',
                array('agenda' => $rAgenda,
                      'site' => $rSite,
                      'langue' => $_locale));
    }
}

?>
