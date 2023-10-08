<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class CheckerIsHomeController extends AbstractController
{
    #[Route('/checker/home')]
    public function Ishome(): Response
    {
        
        $title = "Home";
        
        $controllerToRender = 'App\\Controller\\CheckerIsHomeController::RenderHome';

        return $this->render('checker/main.html.twig', ['title' => $title, 'controllerToRender' => $controllerToRender]);


    }

    public function RenderHome() : Response
    {
        $content = ' Welcome to my effort for the Jadu Engineer Code Exercise, please select from the side bar the test you would like to run.';

        return $this->render('checker/home.html.twig', [ 'content' => $content, ]);
        
    }
    
}