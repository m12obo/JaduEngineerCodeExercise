<?php
namespace App\Controller;
use App\Checker;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class CheckerController extends AbstractController
{
    public function ajaxRequest(Request $request)
    {

        $checker = new Checker();

        if ($request->isXmlHttpRequest())
        {
            $data = $request->toArray();

            var_Dump($data);

            switch ($data['type'])
            {
                case 'palindrome' : 
                    $result = $checker->isPalindrome($data['word1']);
                    break;
                case 'anagram' : 
                    $result = $checker->isPalindrome($data['word1'], $data['word2']);
                    break;
                case 'pangram' : 
                    $result = $checker->isPalindrome($data['word1']);
                    break;
                default :
                    $result = 'Error : unable to process data';
            }

            return new JsonResponse($result);

        }

        return null;

    }
}
