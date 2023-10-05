<?php

namespace App\Controller;

use Model\Checker;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class CheckerIsAnagramController extends AbstractController
{
    #[Route('/checker/isanagram')]
    public function IsAnagram()
    {
        
        $title = "Anagram";
        $anagramArray = ["anagram1", "anagram2","anagram3","anagram4","anagram5",];

        return $this->render('checker/page.html.twig', ['title' => $title, 'Anagrams' => $anagramArray, ]);
    }
}