<?php

namespace Killsoft\TigerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Killsoft\TigerBundle\Entity\Question;

class ServiceController extends Controller
{
    public function listAction()
    {
       return $this->render('KillsoftTigerBundle:service:service.html.twig', array(
           'question' => $question = $this->getDoctrine()->getRepository('KillsoftTigerBundle:Question')->findAll()
        ));

    }
}