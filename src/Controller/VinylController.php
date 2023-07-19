<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class VinylController extends AbstractController{

    #[Route('/')]
    public function homepage(): Response {

        $tracks = [
                ['song' => 'It\'s raining beans', 'artist' => 'Master of the Beans'],
                ['song' => 'I kissed a bean and I liked it', 'artist' => 'Toxic Beans'],
                ['song' => 'I\'m gonna make a bean out of you', 'artist' => 'Unbean'],
                ['song' => "It's looking like a white Christmas", 'artist' => 'Michael Beanly'],
            ];
                   
        return $this->render('vinyl/homepage.html.twig', [
                'title' => "PB and Jams",
                'tracks' => $tracks,
            ]);
    }

    #[Route('/browse/{slug}')]
    public function browser(string $slug = null): Response {
    if ($slug){
    $title = u(str_replace("-", ' ', $slug))->title(true);
        }
    else{
            $title = "All Genres";
        }
    return new Response("Browsing: ".$title);
        
    }
}


?>
