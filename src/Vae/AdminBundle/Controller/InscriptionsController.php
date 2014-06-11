<?php
namespace Vae\AdminBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Vae\InscriptionBundle\Entity\Inscriptions;
use Vae\AdminBundle\Form\InscriptionsType;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\Query\ResultSetMapping;

/**
 * INSCRIPTIONS CONTROLLER.
 *
 */
class InscriptionsController extends BaseController
{

   // MES POINTS D"ENTREESS
    public function indexAction($page)
    {
        return $this->render('VaeAdminBundle:Inscriptions:index.html.twig',
             array("page" => $page));
    }




    // LIMIT
    public function limitAction($page)
    {
        /*ENTITES BY NUMBER PAGE*/

        $start_entities = ($page * self::ENTITIES_BY_PAGE) - self::ENTITIES_BY_PAGE;
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT inscriptions
             FROM VaeInscriptionBundle:Inscriptions inscriptions
             ORDER BY inscriptions.users desc'
            )
        ->setFirstResult($start_entities)
        ->setMaxResults(self::ENTITIES_BY_PAGE);
        $inscriptions = $query->getResult();

        // THE NUMBERS OF PAGES OF THE ENTITIES
        $count_page = $this->count_page();
        return $this->render('VaeAdminBundle:Inscriptions:show_limit.html.twig',
            array("entities" => $inscriptions,
                 "count_page" => $count_page,
                 "page" => $page));
    }


    // COUNT
    public function count_page()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT count(inscriptions)
             FROM VaeInscriptionBundle:Inscriptions inscriptions'
            );
        $count = $query->getSingleResult();
        return ceil($count[1] / self::ENTITIES_BY_PAGE);
    }



    // UPDATE
    public function updateAction($id, $id2)
    {
        $em = $this->getDoctrine()->getManager();
        $sql ="SELECT payer FROM inscriptions WHERE users_id = $id AND formations_id = $id2";
        $request = $em->getConnection()->query( $sql );
        $payer = $request->fetch(['payer']);
        if($payer == '1'){
            $sql = "UPDATE inscriptions SET payer= 0 WHERE users_id = $id and formations_id = $id2";
        }
        else{
         $sql = "UPDATE inscriptions SET payer= 1 WHERE users_id = $id and formations_id = $id2";
        }
        $em->getConnection()->exec($sql);
        return $this->redirect($this->generateUrl('admin_inscriptions_index'));
    }



    // DELETE
    public function deleteAction($id, $id2)
    {
        $em = $this->getDoctrine()->getManager();
        $sql ="DELETE FROM inscriptions WHERE users_id=$id AND formations_id=$id2";

        $em->getConnection()->exec( $sql );
        return $this->redirect($this->generateUrl('admin_inscriptions_index'));
    }
}
