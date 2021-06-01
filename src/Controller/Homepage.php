<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

final class Homepage extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function __invoke()
    {
        return $this->render('homepage/homepage.html.twig');
    }
}
