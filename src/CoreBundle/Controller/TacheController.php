<?php

namespace CoreBundle\Controller;

//use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use CoreBundle\Entity\Tache;
use CoreBundle\Form\TacheType;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Tache controller.
 *
 */
class TacheController extends Controller
{
    /**
     * Lists all Tache entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $taches = $em->getRepository('CoreBundle:Tache')->findAll();

        return $this->render('tache/index.html.twig', array(
            'taches' => $taches,
            'user' => $this->getUser()
        ));
    }

    /**
     * Creates a new Tache entity.
     *
     */
    public function newAction(Request $request)
    {
        date_default_timezone_set('Europe/Paris');
        $tache = new Tache();
        $form = $this->createForm('CoreBundle\Form\TacheType', $tache);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $tache->setFait(false);
            //$tache->setDate(date('m/d/Y', time()));
            $em->persist($tache);
            $em->flush();

            return $this->redirectToRoute('tache_show', array('id' => $tache->getId()));
        }

        return $this->render('tache/new.html.twig', array(
            'tache' => $tache,
            'form' => $form->createView(),
            'user' => $this->getUser()
        ));
    }

    /**
     * Finds and displays a Tache entity.
     *
     */
    public function showAction(Tache $tache)
    {
        $deleteForm = $this->createDeleteForm($tache);

        return $this->render('tache/show.html.twig', array(
            'tache' => $tache,
            'delete_form' => $deleteForm->createView(),
            'user' => $this->getUser()
        ));
    }

    /**
     * Displays a form to edit an existing Tache entity.
     *
     */
    public function editAction(Request $request, Tache $tache)
    {
        $deleteForm = $this->createDeleteForm($tache);
        $editForm = $this->createForm('CoreBundle\Form\TacheType', $tache);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tache);
            $em->flush();

            return $this->redirectToRoute('tache_edit', array('id' => $tache->getId()));
        }

        return $this->render('tache/edit.html.twig', array(
            'tache' => $tache,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'user' => $this->getUser()
        ));
    }

    /**
     * Deletes a Tache entity.
     *
     */
    public function deleteAction(Request $request, Tache $tache)
    {
        $form = $this->createDeleteForm($tache);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tache);
            $em->flush();
        }

        return $this->redirectToRoute('tache_index');
    }

    /**
     * Creates a form to delete a Tache entity.
     *
     * @param Tache $tache The Tache entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tache $tache)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tache_delete', array('id' => $tache->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    public function faitAction($id){
        $em = $this->getDoctrine()->getManager();
        $tache = $em->getRepository('CoreBundle:Tache')->findOneById($id);
        $tache->setFait(true);
        $em->persist($tache);
        $em->flush();
        return new Response();
    }

    public function nonFaitAction($id){
        $em = $this->getDoctrine()->getManager();
        $tache = $em->getRepository('CoreBundle:Tache')->findOneById($id);
        $tache->setFait(false);
        $em->persist($tache);
        $em->flush();
        return new Response();
    }
}
