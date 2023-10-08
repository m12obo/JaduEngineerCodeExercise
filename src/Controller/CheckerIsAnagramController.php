<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class CheckerIsAnagramController extends AbstractController
{
    #[Route('/checker/isanagram')]
    public function IsAnagram() : Response
    {
        $title = 'Anagram';
        
        $controllerToRender = 'App\\Controller\\CheckerIsAnagramController::RenderAnagram';
        $sidebarToRender = 'App\\Controller\\CheckerIsAnagramController::RenderAnagramRightSidebar';

        return $this->render('checker/main.html.twig', ['title' => $title, 'controllerToRender' => $controllerToRender, 'sidebarToRender' => $sidebarToRender]);
    }

    public function RenderAnagram() : Response
    {
        return $this->render('checker/anagram.html.twig', );
    }

    public function RenderAnagramRightSidebar() : Response
    {
        return $this->render('checker/anagramRightSidebar.html.twig',);
    }

}