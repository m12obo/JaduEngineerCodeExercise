<?php

namespace App\Service;

use Twig\Environment;

class CheckerRenderingService
{
    public function __construct(private Environment $twig,)
    {
    }

    public function RenderHome() : void
    {
        $content = ' Welcome to my effort for the Jadu Engineer Code Exercise, please select from the side bar the test you would like to run.';

        $htmlContents = $this->twig->render('checker/home', [ 'content' => $content, ]);
        
    }
}

