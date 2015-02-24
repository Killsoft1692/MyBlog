<?php

namespace Killsoft\TigerBundle\Controller;

use Killsoft\TigerBundle\Form\Type\QuestionType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Killsoft\TigerBundle\Entity\Question;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class AskController extends Controller
{
    /**
     * /**
     * @Route("/ask")
     * @Template()
     *
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function askAction(Request $request)
    {
        $question = new Question;

        $form = $this->createForm(new QuestionType(), $question);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($question);
            $em->flush();

            return $this->redirect($this->generateUrl(done));
        }

        return $this->render('KillsoftTigerBundle:form:form.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
