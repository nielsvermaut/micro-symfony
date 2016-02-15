<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\DependencyInjection\ContainerAware;

abstract class AbstractController extends ContainerAware
{
    /**
     * Renders a twig view
     *
     * @param $view
     * @param array $variables
     *
     * @return Response
     */
    protected function render($view, array $variables)
    {
        return new Response($this->container->get('twig')->render($view, $variables));
    }
}
