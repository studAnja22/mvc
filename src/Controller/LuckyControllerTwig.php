<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyControllerTwig extends AbstractController
{
    #[Route("/lucky/number/twig", name: "lucky_number")]
    public function number(): Response
    {
        $number = random_int(0, 100);
        $pictures = array('img/tiny.png', 'img/tinyowl.png', 'img/tinydonkey.png', 'img/tinyswan.png');
        $quotes = array('"Be silent or let thy words be worth more than silence" - Pythagoras',
        '"Do not say a little in many words, but a great deal in few!"- Pythagoras',
        '"The only person with whom you have to compare ourselves, is that you in the past. 
        And the only person better you should be, this is who you are now" - Sigmund Freud',
        '"From error to error, one discovers the entire truth" - Sigmund Freud',
        '"The journey of a thousand miles begins with a single step" - Lao Tzu',
        '"He who knows all the answers has not been asked all the questions" - Confucius',);
        $data = [
            'number' => $number,
            'pictures' => $pictures[random_int(0,3)],
            'quotes' => $quotes[random_int(0,5)],
        ];

        return $this->render('lucky_number.html.twig', $data);
    }

    #[Route("/", name: "home")]
    public function home(): Response
    {
        return $this->render('home.html.twig');
    }

    #[Route("/about", name: "about")]
    public function about(): Response
    {
        return $this->render('about.html.twig');
    }

    #[Route("/report", name: "report")]
    public function report(): Response
    {
        return $this->render('report.html.twig');
    }
}