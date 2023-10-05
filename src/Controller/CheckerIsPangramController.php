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
        
        $page = "Pangram";
        
        return $this->render('checker/page.html.twig', ['page' => $page,]);
    }
}