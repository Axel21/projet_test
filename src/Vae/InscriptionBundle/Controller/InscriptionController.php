<?php
namespace Vae\InscriptionBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Vae\InscriptionBundle\Entity\Inscriptions;
use Vae\UserBundle\Entity\Users;


class InscriptionController extends controller {
    
    public function inscriptionAction($_locale, $nomSite, $slugRubrique, $slugFormation){
        
             //on va chercher dans la base de données
        $modelManager = $this->getDoctrine()->getManager();
        
  
        $rSite = $modelManager->getRepository('VaeMultiSiteBundle:Sites')->findOneByNom($nomSite);
        
        if(!$rSite){
            
            return $this->render('VaeBaseBundle:Erreurs:404.html.twig',
               array('langue' => $_locale));
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
            
            return $this->render('VaeBaseBundle:Erreurs:404.html.twig',
               array('langue' => $_locale));
        }
        
        $User = $this->get('security.context')->getToken()->getUser();
        
        $verif = $modelManager->getRepository('VaeInscriptionBundle:Inscriptions')->findOneBy(array('formations'=>$rFormation->getId(),
                                                                                                    'users'=>$User->getId()));

        
        if(!$verif){
            
            $inscription = new Inscriptions();
            $inscription->setUsers($User);
            $inscription->setFormations($rFormation);
            $inscription->setPayer(0);

            $em = $this->getDoctrine()->getManager();
            $em->persist($inscription);
            $em->flush();
            
            return $this->render('VaeInscriptionBundle:Inscription:inscription.html.twig',
            array('formation' => $rFormation,
                  'site' => $rSite,
                  'rubrique' => $rRubrique,
                  'langue' => $_locale));

        }
        
        else{
            
            return $this->render('VaeInscriptionBundle:Inscription:erreur.html.twig',
            array('formation' => $rFormation,
                  'site' => $rSite,
                  'rubrique' => $rRubrique,
                  'langue' => $_locale));
        }
        
    }
    
        public function listeAction(){
        
        $modelManager = $this->getDoctrine()->getManager();
        
        $User = $this->get('security.context')->getToken()->getUser();
        
        $rsInscriptions = $modelManager->getRepository('VaeInscriptionBundle:Inscriptions')->findBy(array('users'=>$User->getId()));
        
        return $this->render('VaeInscriptionBundle:Inscription:liste.html.twig',
        array('inscriptions' => $rsInscriptions));
        
    }
    
        public function deleteAction($id){
        
        $modelManager = $this->getDoctrine()->getManager();
        
        $User = $this->get('security.context')->getToken()->getUser();
        $rInscription = $modelManager->getRepository('VaeInscriptionBundle:Inscriptions')->findOneBy(array('users'=>$User->getId(),
                                                                                                           'formations'=>$id));

        //on remove les informations de l'enregistrement correspondant a l'id que nous sommes aller chercher
        $modelManager->remove($rInscription);
        $modelManager->flush();
        return $this->redirect($this->generateUrl('fos_user_profile_show'));
        
    }

}

?>
