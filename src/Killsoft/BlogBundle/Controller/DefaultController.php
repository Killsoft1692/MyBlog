<?php

namespace Killsoft\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Killsoft\BlogBundle\Entity\Post;

class DefaultController extends Controller
{
    /**
     * @Route("/db")
     * @Template()
     */
    public function indexAction()
    {
        $post = new Post();

        $post->setTitle('First')
             ->setText('bla bla bla')
             ->setCategory('Wou')
             ->setTags('cool')
             ->setAuthor('drDre')
             ->setSlug('one');

        $em = $this->getDoctrine()->getManager();
        $em->persist($post);
        $em->flush();

       return $this->render('KillsoftBlogBundle:Default:index.html.twig');
    }
}
