<?php

namespace App\Controller;

use Model\Checker;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class CheckerIsPangramController extends AbstractController
{
    #[Route('/checker/ispangram')]
    public function IsPangram(): Response
    {
        
        $title = "Pangram";
        
        $controllerToRender = 'App\\Controller\\CheckerIsPangramController::RenderPangram';

        return $this->render('checker/main.html.twig', ['title' => $title, 'controllerToRender' => $controllerToRender]);
    }

    public function RenderPangram() : Response
    {
        $content = 'Pangram is here';
        return $this->render('checker/pangram.html.twig', ['content' => $content, ]);
    }
}