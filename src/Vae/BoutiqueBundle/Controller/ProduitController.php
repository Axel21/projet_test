<?php

namespace Vae\BoutiqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Vae\BoutiqueBundle\Entity\Paypal;
use Vae\BoutiqueBundle\Entity\Achats;


class ProduitController extends controller {
    
        public function galerieAction($_locale, $nomSite, $slugRubrique){
        
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
        $rsProduits = $modelManager->createQueryBuilder()
                                        ->select('p')
                                        ->from('VaeBoutiqueBundle:Produits', 'p')
                                        ->where('p.vendre = 0')
                                        ->getQuery()
                                        ->getResult();

        }
        
        else{
        
        $rRubrique = $modelManager->getRepository('VaeBaseBundle:Rubriques')->findOneBy(array('sites'=>$rSite->getId(),
                                                                                              'slugEn'=>$slugRubrique));
        $rsProduits = $modelManager->createQueryBuilder()
                                        ->select('p')
                                        ->from('VaeBoutiqueBundle:Produits', 'p')
                                        ->where('p.slugEn IS NOT NULL')
                                        ->andWhere('p.vendre = 0')
                                        ->getQuery()
                                        ->getResult();
        }
        
        if(!$rRubrique){
            
            return $this->render('VaeBaseBundle:Erreurs:404.html.twig',
               array('langue' => $_locale));
        }
        
        
        if(!$rsProduits){
            
            //throw $this->createNotFoundException('This page does not exist.');
            
            return $this->render('VaeBoutiqueBundle:Produit:aucun.html.twig',
                array('langue' => $_locale));
        }
        
        //on charge la vue et on lui envoi la liste des produits

        return $this->render('VaeBoutiqueBundle:Produit:galerie.html.twig',
                array('produits' => $rsProduits,
                      'rubrique' => $rRubrique,
                      'site' => $rSite,
                      'langue' => $_locale));
    }
    
    public function indexAction($_locale, $nomSite, $slugRubrique){
        
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
        $rsProduits = $modelManager->createQueryBuilder()
                                        ->select('p')
                                        ->from('VaeBoutiqueBundle:Produits', 'p')
                                        ->where('p.vendre = 1')
                                        ->getQuery()
                                        ->getResult();

        }
        
        else{
        
        $rRubrique = $modelManager->getRepository('VaeBaseBundle:Rubriques')->findOneBy(array('sites'=>$rSite->getId(),
                                                                                              'slugEn'=>$slugRubrique));
        $rsProduits = $modelManager->createQueryBuilder()
                                        ->select('p')
                                        ->from('VaeBoutiqueBundle:Produits', 'p')
                                        ->where('p.slugEn IS NOT NULL')
                                        ->andWhere('p.vendre = 1')
                                        ->getQuery()
                                        ->getResult();
        }
        
        if(!$rRubrique){
            
            return $this->render('VaeBaseBundle:Erreurs:404.html.twig',
               array('langue' => $_locale));
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
            
            return $this->render('VaeBaseBundle:Erreurs:404.html.twig',
               array('langue' => $_locale));
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
            
            return $this->render('VaeBaseBundle:Erreurs:404.html.twig',
               array('langue' => $_locale));
        }
        
        
        
        if(!$rProduit){
            
            return $this->render('VaeBaseBundle:Erreurs:404.html.twig',
               array('langue' => $_locale));
        }
        
        if($rProduit->getVendre() == 1){
            
            if($_locale == 'fr'){
            
                $nom = $rProduit->getNom();
                $description = $rProduit->getDescription();

            }
            else{
            
                $nom = $rProduit->getNomEn();
                $description = $rProduit->getDescriptionEn();

            }
        
            $id = $rProduit->getId();
            $prix = $rProduit->getPrix();
        
            $paypal = new Paypal();
        
            $params = array(
            
                'RETURNURL' => "http://127.0.0.1/projet_soleil/web/app_dev.php/paypal/process",
                'CANCELURL' => "http://127.0.0.1/projet_soleil/web/app_dev.php/paypal/cancel",
            
                'PAYMENTREQUEST_0_AMT' => $prix,
                'PAYMENTREQUEST_0_CURRENCYCODE' => 'EUR',
                'PAYMENTREQUEST_0_CUSTOM' => $id,
            
                'L_PAYMENTREQUEST_0_NAME0' => $nom,
                'L_PAYMENTREQUEST_0_AMT0' => $prix,
               
            );
        
            $responseSet = $paypal->request('SetExpressCheckout', $params);
        
            if($responseSet){
            
                $paypal = 'https://www.sandbox.paypal.com/webscr?cmd=_express-checkout&useraction=commit&token='.$responseSet['TOKEN'];
            }
        
            else{
            
               /* var_dump($paypal->errors);
                die();*/
            
                return $this->render('VaeBoutiqueBundle:Produit:error3.html.twig');
            }
        
       
            //on charge la vue et on lui envoi la liste des catégories
            return $this->render('VaeBoutiqueBundle:Produit:detail.html.twig',
                    array('produit' => $rProduit,
                          'rubrique' => $rRubrique,
                          'site' => $rSite,
                          'langue' => $_locale,
                          'paypal' => $paypal));
        }
        
        else{
            
            return $this->render('VaeBoutiqueBundle:Produit:galeriedetail.html.twig',
                    array('produit' => $rProduit,
                          'rubrique' => $rRubrique,
                          'site' => $rSite,
                          'langue' => $_locale));
        }
        
 
    }
    
    
    public function processAction(){
        
        $paypal = new Paypal();
         
        $responseGet = $paypal->request('GetExpressCheckoutDetails', array(
            
            'TOKEN' => $_GET['token']
        ));
        
        if($responseGet){
            
            if($responseGet['CHECKOUTSTATUS'] == 'PaymentActionCompleted'){
                
               //var_dump($responseGet);

                return $this->render('VaeBoutiqueBundle:Produit:error2.html.twig');
            }
            else{
                
            }
        }
        
        else{
            
            /*var_dump($paypal->errors);
            die();*/
            
            return $this->render('VaeBoutiqueBundle:Produit:error3.html.twig');
        }
        
        /*var_dump($responseGet);
        die();*/
        
        $modelManager = $this->getDoctrine()->getManager();
        
        $rProduit = $modelManager->getRepository('VaeBoutiqueBundle:Produits')->findOneBy(array('id' =>$responseGet['CUSTOM']));
        
        if(!$rProduit){
            
            return $this->render('VaeBoutiqueBundle:Produit:error.html.twig');
        }
        
        $nom = $rProduit->getNom();
        $description = $rProduit->getDescription();
        $prix = $rProduit->getPrix();
        $id = $rProduit->getId();
        $adresse = array(
                    
            $responseGet['SHIPTOSTREET'],
            $responseGet['SHIPTOZIP'],
            $responseGet['SHIPTOCITY'],
            $responseGet['SHIPTOCOUNTRYNAME'],
            $responseGet['SHIPTOCOUNTRYCODE']
        );
        
        $params = array(
            
            'TOKEN' => $_GET['token'],
            'PAYERID' => $_GET['PayerID'],
            'PAYMENTACTION' => 'Sale',
            'PAYMENTREQUEST_0_CURRENCYCODE' => 'EUR',
            'PAYMENTREQUEST_0_AMT' => $responseGet['PAYMENTREQUEST_0_AMT'],
            'PAYMENTREQUEST_0_ITEMAMT' => $prix,
            
            'L_PAYMENTREQUEST_0_NAME0' => $nom,
            'L_PAYMENTREQUEST_0_AMT0' => $prix,
            
        );
        
        $responseDo = $paypal->request('DoExpressCheckoutPayment',$params);
        
        if($responseDo){
            
            /*var_dump($responseDo);*/
            
            
            $rUdProduit = $modelManager->createQueryBuilder()
                                    ->update('VaeBoutiqueBundle:Produits', 'u')
                                    ->set('u.disponible', ':Zero')
                                    ->where('u.id = :Id')
                                    ->setParameter('Zero', '0')
                                    ->setParameter('Id', $id)
                                    ->getQuery()
                                    ->execute();
            
            $achat = new Achats();
            $achat->setTransaction($responseDo['PAYMENTINFO_0_TRANSACTIONID']);
            $achat->setProduit($nom);
            $achat->setClient($responseGet['SHIPTONAME']);
            $achat->setEmail($responseGet['EMAIL']);
            $achat->setDate($responseDo['TIMESTAMP']);
            $achat->setAdresse($adresse);

            $em = $this->getDoctrine()->getManager();
            $em->persist($achat);
            $em->flush();
         
            return $this->render('VaeBoutiqueBundle:Produit:success.html.twig');
        }
        
        else{
            
            /*var_dump($paypal->errors);
            die();*/
            return $this->render('VaeBoutiqueBundle:Produit:error.html.twig');
        }
        
    }
    
    public function cancelAction(){
        
        //on charge la vue et on lui envoi la liste des catégories
        return $this->render('VaeBoutiqueBundle:Produit:cancel.html.twig');
    }
      
}

?>
