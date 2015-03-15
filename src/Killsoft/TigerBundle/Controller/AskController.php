<?php

namespace Killsoft\TigerBundle\Controller;

use Killsoft\TigerBundle\Form\Type\QuestionType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Killsoft\TigerBundle\Entity\Question;

/**
 * @Method("POST")
 * Class AskController
 * @package Killsoft\TigerBundle\Controller
 */
class AskController extends Controller
{
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function askAction(Request $request)
    {
        $question = new Question;

        $form = $this->createForm(new QuestionType(), $question);
        $form->handleRequest($request);
        //var_dump($question);
        //var_dump($form->getErrors());

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($question);
            $em->flush();

            return $this->redirect($this->generateUrl('ok'));
        }

        return $this->render('KillsoftTigerBundle:form:form.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function indexAction()
    {
        return $this->render('KillsoftTigerBundle:form:done.html.twig');
    }
}
