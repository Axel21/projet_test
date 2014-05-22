<?php
namespace Vae\InscriptionBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class InscriptionController extends controller {
    
    public function listeAction(){
        
        
        //on charge la vue et on lui envoi la liste des catégories
        return $this->render('VaeInscriptionBundle:Inscription:detail.html.twig');
    }
    
        public function detailAction(){
        
        
    }
}

?>
