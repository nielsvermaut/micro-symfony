<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\DependencyInjection\ContainerAware;

class DefaultController extends ContainerAware
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $html = $this->container->get('twig')->render('pages/index.html.twig', array(
            'content' => 'Here I am!',
        ));

        dump($this->container);

        return new Response($html);
    }
}
