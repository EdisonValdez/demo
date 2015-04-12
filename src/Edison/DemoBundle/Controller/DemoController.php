<?php

namespace Edison\DemoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Edison\DemoBundle\Entity\Demo;
use Edison\DemoBundle\Form\DemoType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
/**
 * Demo controller.
 *
 */
class DemoController extends Controller
{

    /**
     * Lists all Demo entities.
     * @Template()
     * @Route("/", name="demo")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DemoBundle:Demo')->findAll();

        return  array('entities' => $entities,);
    }
    /**
     * Creates a new Demo entity.
     *
     */
    public function createAction(Request $request)
    {
        $this->enforceUserSecurity();

        $entity = new Demo();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('demo_show', array('id' => $entity->getId())));
        }

        return $this->render('DemoBundle:Demo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Demo entity.
     *
     * @param Demo $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Demo $entity)
    {

        $form = $this->createForm(new DemoType(), $entity, array(
            'action' => $this->generateUrl('demo_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Demo entity.
     *
     */
    public function newAction()
    {
        $this->enforceUserSecurity();

        $entity = new Demo();
        $form   = $this->createCreateForm($entity);

        return $this->render('DemoBundle:Demo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Demo entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DemoBundle:Demo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Demo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('DemoBundle:Demo:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Demo entity.
     *
     */
    public function editAction($id)
    {
        $this->enforceUserSecurity();

        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DemoBundle:Demo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Demo entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('DemoBundle:Demo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Demo entity.
    *
    * @param Demo $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Demo $entity)
    {
        $form = $this->createForm(new DemoType(), $entity, array(
            'action' => $this->generateUrl('demo_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Demo entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $this->enforceUserSecurity();

        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DemoBundle:Demo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Demo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('demo_edit', array('id' => $id)));
        }

        return $this->render('DemoBundle:Demo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Demo entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $this->enforceUserSecurity();

        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DemoBundle:Demo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Demo entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('demo'));
    }

    /**
     * Creates a form to delete a Demo entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('demo_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }

    private function enforceUserSecurity()
    {
        //if we are in Symfony 2.5 or higher
        // throw $this->createAccessDeniedException('Nedd ROLE_ADMIN');
        $securityContext = $this->get('security.context');
        if(!$securityContext->isGranted('ROLE_USER'))
        {
            throw new AccessDeniedException('Need ROLE_USER');
        }
    }
}
