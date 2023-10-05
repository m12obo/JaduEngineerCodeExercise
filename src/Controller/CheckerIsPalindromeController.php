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
        
        $page = "Palindrome";
        
        return $this->render('checker/page.html.twig', ['page' => $page,]);
    }
}