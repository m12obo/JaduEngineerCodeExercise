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
        $sidebarToRender = 'App\\Controller\\CheckerIsHomeController::RenderHomeRightSidebar';

        return $this->render('checker/main.html.twig', ['title' => $title, 'controllerToRender' => $controllerToRender, 'sidebarToRender' => $sidebarToRender]);


    }

    public function RenderHome() : Response
    {
        return $this->render('checker/home.html.twig',);
    }

    public function RenderHomeRightSidebar() : Response
    {
        return $this->render('checker/homeRightSidebar.html.twig',);
    }
    
}