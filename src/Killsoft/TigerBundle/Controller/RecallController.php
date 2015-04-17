<?php

namespace Killsoft\TigerBundle\Controller;

use Killsoft\TigerBundle\Entity\Recall;
use Killsoft\TigerBundle\Form\Type\RecallType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RecallController extends Controller
{
    public function recallAction(Request $request)
    {
        $recall = new Recall();

        $form = $this->createForm(new RecallType(), $recall);
        $form->handleRequest($request);

        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($recall);
            $em->flush();

            return $this->redirect($this->generateUrl('recall_done'));
        }

        return $this->render('KillsoftTigerBundle:recall:form_recall.html.twig', array(
           'form' => $form->createView(),
           'recall' => $recall = $this->getDoctrine()->getRepository('KillsoftTigerBundle:Recall')->findAll()
        ));
    }

    public function indexAction()
    {
        return $this->render('KillsoftTigerBundle:recall:successful.html.twig');
    }
}