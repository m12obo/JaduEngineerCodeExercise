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
        return $this->render('checker/main.html.twig', ['title' => $title, 'controllerToRender' => $controllerToRender, ]);
    }

    public function RenderAnagram() : Response
    {
        $content = array('anagram1', 'anagram2', 'anagram3');
        return $this->render('checker/anagram.html.twig', ['content' => $content, ]);
    }

}