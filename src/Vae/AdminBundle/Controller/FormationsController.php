<?php
namespace Vae\AdminBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Vae\BaseBundle\Entity\Formations;
use Vae\AdminBundle\Form\FormationsType;


/**
 * LIENS CONTROLLER.
 *
 */
class FormationsController extends BaseController
{

   // MES POINTS D"ENTREESS
    public function indexAction($page)
    {
        return $this->render('VaeAdminBundle:Formations:index.html.twig',
             array("page" => $page));
    }

    public function index_addAction($page)
    {
        return $this->render('VaeAdminBundle:Formations:index_add.html.twig',
             array("page" => $page));
    }

    public function index_updateAction($page, $id)
    {
        return $this->render('VaeAdminBundle:Formations:index_update.html.twig',
             array("page" => $page, "id" => $id));
    }



    // LIMIT
    public function limitAction($page)
    {
        /*ENTITES BY NUMBER PAGE*/
        $start_entities = ($page * self::ENTITIES_BY_PAGE) - self::ENTITIES_BY_PAGE;
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT formations
             FROM VaeBaseBundle:Formations formations
             ORDER BY formations.id desc'
            )
        ->setFirstResult($start_entities)
        ->setMaxResults(self::ENTITIES_BY_PAGE);
        $formations = $query->getResult();

        /*THE NUMBERS OF PAGES OF THE ENTITIES*/
        $count_page = $this->count_page();
        return $this->render('VaeAdminBundle:Formations:show_limit.html.twig',
            array("entities" => $formations,
                 "count_page" => $count_page,
                 "page" => $page));
    }




    // COUNT
    public function count_page()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT count(formations)
             FROM VaeBaseBundle:Formations formations'
            );
        $count = $query->getSingleResult();
        return ceil($count[1] / self::ENTITIES_BY_PAGE);
    }




    // CREATE
    public function createAction(Request $request)
    {
        $entity = new Formations();

        $form = $this->createForm(new FormationsType(), $entity, array(
            'action' => $this->generateUrl('admin_formations_create'),
            'method' => 'POST',
        ));
        $form->add('submit', 'submit',array('attr' => array('class' =>  "btn")));
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('admin_formations_index'));
        }

        return $this->render('VaeAdminBundle::form_add.html.twig', array(
            'form'   => $form->createView()
        ));
    }




    // UPDATE
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VaeBaseBundle:Formations')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Formations entity.');
        }

        $form = $this->createForm(new FormationsType(), $entity, array(
            'action' => $this->generateUrl('admin_formations_update', array('id' => $entity->getId())),
            'method' => 'POST',
        ));
        $form->add('submit', 'submit',array('attr' => array('class' =>  "btn")));
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('admin_formations_index'));
        }

        return $this->render('VaeAdminBundle::form_edit.html.twig', array(
            'form'   => $form->createView()
        ));
    }



    // DELETE
    public function deleteAction($id)
    {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('VaeBaseBundle:Formations')->find($id);

            $em->remove($entity);
            $em->flush();

        return $this->redirect($this->generateUrl('admin_formations_index'));
    }
}
