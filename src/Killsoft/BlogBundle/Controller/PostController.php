<?php

namespace Killsoft\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Killsoft\BlogBundle\Entity\Post;
use Killsoft\BlogBundle\Form\Type\PostType;

/**
 * Class PostController
 * @package Killsoft\BlogBundle\Controller
 */
class PostController extends Controller
{
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function postAction(Request $request)
    {
        $post = new Post;

        $form = $this->createForm(new PostType(), $post);
        $form->handleRequest($request);

        if ($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();

            return $this->redirect($this->generateUrl(new_post));
        }

        return $this->render('KillsoftBlogBundle:NewPost:post.html.twig', array(
            'form' => $form->createView()
        ));

    }

}
