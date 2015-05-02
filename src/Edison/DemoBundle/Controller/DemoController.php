<?php

namespace Edison\DemoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
//use Edison\DemoBundle\Controller\Controller;

use Edison\DemoBundle\Entity\Demo;
use Edison\DemoBundle\Form\DemoType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
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
        return array();
    }

    public function _upcomingDemosAction($max = null)
    {
        $em = $this->getDoctrine()->getManager();

        $demos = $em->getRepository('DemoBundle:Demo')
            ->getUpcomingDemos($max);

        return $this->render('DemoBundle:Demo:_upcomingDemos.html.twig', array(
            'demos' => $demos
        ));
    }
    /**
     * Creates a new Demo entity.
     *
     */
    public function createAction(Request $request)
    {
        $this->enforceUserSecurity('ROLE_EVENT_CREATE');


        $entity = new Demo();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $user = $this->getUser();
            // this logic here works perfect
            //this is setting the owning side of the relationship
            $entity->setOwner($user);

            //this would do nothing
            // it sets the inverse side
            //We delete setDemos from entity as it
            //doesn't do anything!
            /*
            $demos = $user->getDemos();
            $demos[] = $entity;
            $user->setDemos($demos);*/

            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('demo_show', array('slug' => $entity->getSlug())));
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
        $this->enforceUserSecurity('ROLE_EVENT_CREATE');

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
    public function showAction($slug)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DemoBundle:Demo')
            ->findOneBy(array('slug' => $slug));

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Demo entity.');
        }

        $deleteForm = $this->createDeleteForm($entity->getId());

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
        $this->enforceUserSecurity('ROLE_EVENT_CREATE');

        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DemoBundle:Demo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Demo entity.');
        }
        $this->enforceOwnerSecurity($entity);

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
        $this->enforceUserSecurity('ROLE_EVENT_CREATE');

        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DemoBundle:Demo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Demo entity.');
        }
        $this->enforceOwnerSecurity($entity);


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
        $this->enforceUserSecurity('ROLE_EVENT_CREATE');

        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DemoBundle:Demo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Demo entity.');
            }

            $this->enforceOwnerSecurity($entity);

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('demo'));
    }

    public function likesAction($id, $format)
    {
        $em = $this->getDoctrine()->getManager();
        $demo = $em->getRepository('DemoBundle:Demo')
            ->find($id);

        if(!$demo){
           throw $this->createNotFoundException('No demo found for id ');
        }

        if(!$demo->hasLikes($this->getUser())){
           $demo->getLikes()->add($this->getUser());
           // throw $this->createNotFoundException('No demo found for id '.$id);
        }

        $em->persist($demo);
        $em->flush();

        return $this->createLikesResponse($demo, $format);

    }

    public function unlikesAction($id, $format)
    {
        $em = $this->getDoctrine()->getManager();
        $demo = $em->getRepository('DemoBundle:Demo')
            ->find($id);

        if(!$demo){
            throw $this->createNotFoundException('No demo found for id ');
        }

        if($demo->hasLikes($this->getUser()))
        {
            $demo->getLikes()->removeElement($this->getUser());
        }

        $em->persist($demo);
        $em->flush();

        return $this->createLikesResponse($demo, $format);

    }

    /**
     * @param Demo $demo
     * @param string $format
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function createLikesResponse(Demo $demo, $format)
    {
        if($format == 'json')
        {
         $data = array(
             'likes' => $demo->hasLikes($this->getUser())
         );
            $response = new JsonResponse($data);

            return $response;
        }

        $url = $this->generateUrl('demo_show', array(
            'slug' => $demo->getSlug()
        ));

        return $this->redirect($url);
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

    private function enforceUserSecurity($role = 'ROLE_USER')
    {
        //if we are in Symfony 2.5 or higher
        // throw $this->createAccessDeniedException('Nedd ROLE_ADMIN');

        if(!$this->getSecurityContext()->isGranted($role))
        {
            throw new AccessDeniedException('Need '.$role);
        }
    }

    /*private function enforceOwnerSecurity(Demo $demo)
    {
        $user = $this->getUser();

        if($user != $demo->getOwner())
        {
            throw $this->createAccessDeniedException('You are not the owner of this Event!');
        }
    }*/


}
