<?php

namespace AppBundle\Controller;

use Doctrine\ORM\EntityManagerInterface;
use AppBundle\Entity\Product;
use AppBundle\Entity\Voorraadbeheer;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Voorraadbeheer controller.
 *
 * @Route("voorraadbeheer")
 */
class VoorraadbeheerController extends Controller
{
    /**
     * Lists all voorraadbeheer entities.
     *
     * @Route("/", name="voorraadbeheer_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $voorraadbeheers = $em->getRepository('AppBundle:Voorraadbeheer')->findAll();

        return $this->render('voorraadbeheer/index.html.twig', array(
            'voorraadbeheers' => $voorraadbeheers,
        ));
    }

    /**
     * Creates a new voorraadbeheer entity.
     *
     * @Route("/new", name="voorraadbeheer_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $voorraadbeheer = new Voorraadbeheer();
        $form = $this->createForm('AppBundle\Form\VoorraadbeheerType', $voorraadbeheer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($voorraadbeheer);
            $em->flush();

            return $this->redirectToRoute('voorraadbeheer_show', array('id' => $voorraadbeheer->getId()));
        }

        return $this->render('voorraadbeheer/new.html.twig', array(
            'voorraadbeheer' => $voorraadbeheer,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a voorraadbeheer entity.
     *
     * @Route("/{id}", name="voorraadbeheer_show")
     * @Method("GET")
     */
    public function showAction(Voorraadbeheer $voorraadbeheer)
    {
        $deleteForm = $this->createDeleteForm($voorraadbeheer);

        return $this->render('voorraadbeheer/show.html.twig', array(
            'voorraadbeheer' => $voorraadbeheer,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing voorraadbeheer entity.
     *
     * @Route("/{id}/edit", name="voorraadbeheer_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Voorraadbeheer $voorraadbeheer)
    {
        $deleteForm = $this->createDeleteForm($voorraadbeheer);
        $editForm = $this->createForm('AppBundle\Form\VoorraadbeheerType', $voorraadbeheer);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('voorraadbeheer_edit', array('id' => $voorraadbeheer->getId()));
        }

        return $this->render('voorraadbeheer/edit.html.twig', array(
            'voorraadbeheer' => $voorraadbeheer,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a voorraadbeheer entity.
     *
     * @Route("/{id}", name="voorraadbeheer_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Voorraadbeheer $voorraadbeheer)
    {
        $form = $this->createDeleteForm($voorraadbeheer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($voorraadbeheer);
            $em->flush();
        }

        return $this->redirectToRoute('voorraadbeheer_index');
    }

    /**
     * Creates a form to delete a voorraadbeheer entity.
     *
     * @param Voorraadbeheer $voorraadbeheer The voorraadbeheer entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Voorraadbeheer $voorraadbeheer)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('voorraadbeheer_delete', array('id' => $voorraadbeheer->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
}
