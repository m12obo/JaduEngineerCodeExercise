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
            switch ($data['type'])
            {
                case 'palindrome' : 
                    $result = $checker->isPalindrome($data['word']);
                    break;
                case 'anagram' : 
                    $result = $checker->isAnagram($data['word'], $data['comparison']);
                    break;
                case 'pangram' : 
                    $result = $checker->isPangram($data['word']);
                    break;
                default :
                    $result = 'Error : unable to process data';
            }

            return new JsonResponse($result);

        }

        return null;

    }
}
