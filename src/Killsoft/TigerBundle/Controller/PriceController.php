<?php

namespace Killsoft\TigerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class PriceController
 * @package Killsoft\TigerBundle\Controller
 */
class PriceController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function pcAction()
    {
        return $this->render('KillsoftTigerBundle:repairs:pc.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function notebookAction()
    {
        return $this->render('KillsoftTigerBundle:repairs:nt.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function pdaAction()
    {
        return $this->render('KillsoftTigerBundle:repairs:pda.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function photoAction()
    {
        return $this->render('KillsoftTigerBundle:repairs:photo.html.twig');
    }
}