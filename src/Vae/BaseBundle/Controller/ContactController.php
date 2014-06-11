<?php
namespace Vae\BaseBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Vae\BaseBundle\form\FormulaireType;

use Symfony\Component\httpFoundation\Request;


class ContactController extends controller {
    
    
        public function formAction($_locale, $nomSite, $slugRubrique){
            
            $modelManager = $this->getDoctrine()->getManager();
             
            $rSite = $modelManager->getRepository('VaeMultiSiteBundle:Sites')->findOneByNom($nomSite);
             
            $rRubrique = $modelManager->getRepository('VaeBaseBundle:Rubriques')->findOneBy(array('sites'=>$rSite->getId(),
                                                                                                  'slug'=>$slugRubrique));
             
            $form = $this->createForm(new FormulaireType());
            
            $requete = $this->getRequest();
            
            if ($requete->isMethod('POST')) {
                 
                $nom = $this->get('request')->request->get('nom');
                $mail = $this->get('request')->request->get('mail');
                $message = $this->get('request')->request->get('message');
                
                $to = 'axel_wilhelmus@hotmail.com';
                $sujet = "Contact du Site de l'ASBL";
                
                //if(mail($to, $sujet, $message)){
                    
                    // On redirige vers la liste des categories
                    return $this->render('VaeBaseBundle:Contact:send.html.twig',
                                  array( 'site' => $rSite,
                                         'rubrique' => $rRubrique,
                                         'langue' => $_locale
                              ));
                //}
                
                /*else{
                    
                    throw $this->createNotFoundException('This page does not exist.');
                }*/
 
            }
        
        return $this->render('VaeBaseBundle:Contact:form.html.twig',
                      array( 'site' => $rSite,
                             'rubrique' => $rRubrique,
                             'form' => $form->createView(),
                             'langue' => $_locale
                      ));
        
    }
    
}

?>
