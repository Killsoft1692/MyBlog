<?php

namespace Killsoft\TigerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class ServiceController
 * @package Killsoft\TigerBundle\Controller
 */
class ServiceController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function listAction()
    {
       return $this->render('KillsoftTigerBundle:service:service.html.twig', array(
           'question' => $question = $this->getDoctrine()->getRepository('KillsoftTigerBundle:Question')->findAll()
        ));

    }
}