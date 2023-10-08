<?php

namespace App\Controller;

use Model\Checker;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class CheckerIsPalindromeController extends AbstractController
{
    #[Route('/checker/ispalindrome')]
    public function IsPalindrome(): Response
    {
        
        $title = 'Palindrome';
        $controllerToRender = 'App\\Controller\\CheckerIsPalindromeController::RenderPalindrome';

        return $this->render('checker/main.html.twig', ['title' => $title, 'controllerToRender' => $controllerToRender]);
    }

    public function RenderPalindrome() : Response
    {
        $content = array('palindrome1', 'palindrome2', 'palindrome');
        return $this->render('checker/palindrome.html.twig', ['content' => $content, ]);
    }
}