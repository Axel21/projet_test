<?php

namespace Vae\BoutiqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;




class ProduitController extends controller {
    
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
        $rsProduits = $modelManager->getRepository('VaeBoutiqueBundle:Produits')->findAll();

        }
        
        else{
        
        $rRubrique = $modelManager->getRepository('VaeBaseBundle:Rubriques')->findOneBy(array('sites'=>$rSite->getId(),
                                                                                              'slugEn'=>$slugRubrique));
        $rsProduits = $modelManager->createQueryBuilder()
                                        ->select('p')
                                        ->from('VaeBoutiqueBundle:Produits', 'p')
                                        ->where('p.slugEn IS NOT NULL')
                                        ->getQuery()
                                        ->getResult();
        }
        
        if(!$rRubrique){
            
            throw $this->createNotFoundException('This page does not exist.');
        }
        
        
        if(!$rsProduits){
            
            //throw $this->createNotFoundException('This page does not exist.');
            
            return $this->render('VaeBoutiqueBundle:Produit:aucun.html.twig');
        }
        
        //on charge la vue et on lui envoi la liste des produits

        return $this->render('VaeBoutiqueBundle:Produit:liste.html.twig',
                array('produits' => $rsProduits,
                      'rubrique' => $rRubrique,
                      'site' => $rSite,
                      'langue' => $_locale));
    }
    
    public function detailAction($_locale, $nomSite, $slugRubrique, $slugProduit){
        
        //on va chercher dans la base de données
        $modelManager = $this->getDoctrine()->getManager();
        
        $rSite = $modelManager->getRepository('VaeMultiSiteBundle:Sites')->findOneByNom($nomSite);
        
        if(!$rSite){
            
            throw $this->createNotFoundException('This page does not exist.');
        }
        
        
        
        if($_locale == 'fr'){
            
            
            $rRubrique = $modelManager->getRepository('VaeBaseBundle:Rubriques')->findOneBy(array('sites'=>$rSite->getId(),
                                                                                              'slug'=>$slugRubrique));
            $rProduit = $modelManager->getRepository('VaeBoutiqueBundle:Produits')->findOneBy(array('slug'=>$slugProduit));
           
        }
        
        else{
            
            $rRubrique = $modelManager->getRepository('VaeBaseBundle:Rubriques')->findOneBy(array('sites'=>$rSite->getId(),
                                                                                              'slugEn'=>$slugRubrique));
            $rProduit = $modelManager->getRepository('VaeBoutiqueBundle:Produits')->findOneBy(array('slugEn'=>$slugProduit));
            
        }
        
        if(!$rRubrique){
            
            throw $this->createNotFoundException('This page does not exist.');
        }
        
        
        
        if(!$rProduit){
            
            throw $this->createNotFoundException('This page does not exist.');
        }
        
        
        
        //on charge la vue et on lui envoi la liste des catégories
        return $this->render('VaeBoutiqueBundle:Produit:detail.html.twig',
                array('produit' => $rProduit,
                      'rubrique' => $rRubrique,
                      'site' => $rSite,
                      'langue' => $_locale));
    }
    
    
    public function successAction(){
        
        //on charge la vue et on lui envoi la liste des catégories
        return $this->render('VaeBoutiqueBundle:Produit:success.html.twig');
    }
    
    public function cancelAction(){
        
        //on charge la vue et on lui envoi la liste des catégories
        return $this->render('VaeBoutiqueBundle:Produit:cancel.html.twig');
    }
    
    public function ipnAction(){
        
            $email_account = "axel_wilhelmus@gmail.com";

            // lire le formulaire provenant du système PayPal et ajouter 'cmd'
            $req = 'cmd=_notify-validate';
    
            foreach ($_POST as $key => $value) {
                $value = urlencode(stripslashes($value));
                $req .= "&$key=$value";
            }
            
           // renvoyer au système PayPal pour validation
            $header = "POST /cgi-bin/webscr HTTP/1.0\r\n";
            $header .= "Host: www.sandbox.paypal.com\r\n";
            $header .= "Content-Type: application/x-www-form-urlencoded\r\n";
            $header .= "Content-Length: " . strlen($req) . "\r\n\r\n";
            $fp = \fsockopen ('ssl:www.sandbox.paypal.com', 80, $errno, $errstr, 30);
            
            $item_name = $_POST['item_name'];
            $item_number = $_POST['item_number'];
            $payment_status = $_POST['payment_status'];
            $payment_amount = $_POST['mc_gross'];
            $payment_currency = $_POST['mc_currency'];
            $txn_id = $_POST['txn_id'];
            $receiver_email = $_POST['receiver_email'];
            $payer_email = $_POST['payer_email'];
            $id_produit = $_POST['custom'];
            
                if (!$fp) {
                    // ERREUR HTTP
                } 
                
                else {
                    
                    fputs ($fp, $header . $req);
                    
                    while (!feof($fp)) {
                    
                        $res = fgets ($fp, 1024);
                
                        if (strcmp ($res, "VERIFIED") == 0) {
                            // transaction valide
                            
                            // vérifier que payment_status a la valeur Completed
                            if ( $payment_status == "Completed") {
                                
                                // vérifier que txn_id n'a pas été précédemment traité: Créez une fonction qui va interroger votre base de données
                              //if (VerifIXNID($txn_id) == 0) {
                                
                                    // vérifier que receiver_email est votre adresse email PayPal principale
                                    if ( $email_account == $receiver_email) {
                                        // vérifier que payment_amount et payment_currency sont corrects
                                         /*$modelManager = $this->getDoctrine()->getManager();
                           
                                         $rProduit = $modelManager->getRepository('VaeBoutiqueBundle:Produits')->findOneBy(array('id'=>$id_produit));
                                         
                                         if($payment_amount == $rProduit->getPrix()){
                                             
                                             $updateProduit = $modelManager->createQueryBuilder()            
                                                                           ->update('VaeBaseBundle:Formations', 'u')
                                                                           ->set('u.disponible', ':Dispo')
                                                                           ->where('u.id = :Id')
                                                                           ->setParameter('Id', $rProduit->getId())
                                                                           ->setParameter('Dispo', '0')
                                                                           ->getQuery()
                                                                           ->execute();
                                         }*/
                                        
                                      file_put_contents('log', print_r($_POST));
                                        
                                        $product = new Produits();
                                        $product->setNom('A Foo Bar');
                                        $product->setPrix('19.99');
                                        $product->setDescription('Lorem ipsum dolor');

                                        $em = $this->getDoctrine()->getManager();
                                        $em->persist($product);
                                        $em->flush();
                                    }
                                    
                                    else {
                                        // Mauvaise adresse email paypal
                                    }
                                //}
                                
                             // else {
				// ID de transaction déjà utilisé
                            //} 
                                    
                            }
		  
                            else {
		        	// Statut de paiement: Echec
                            }
                        }
                    
                        else if (strcmp ($res, "INVALID") == 0) {
                            // Transaction invalide                
                        }
                    }
        
                    fclose ($fp);
                
                }
    }
    
    
}

?>
