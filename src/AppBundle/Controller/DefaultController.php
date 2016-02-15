<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\DependencyInjection\ContainerAware;

class DefaultController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('pages/index.html.twig', ['content' => 'Here I am!']);
    }
}
