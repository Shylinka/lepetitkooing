<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Annonce;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse; // on ajoute la classe de réponse json
use Psr\Log\LoggerInterface; // Important de récupérer la classe pour l'utiliser dans nos fichiers
use Twig\Environment;

//use App\Service\RandomHelper; // Ne pas oublier de use le service

use App\Security\LoginFromAuthenticator;

class APIController extends AbstractController
{

    /**
     * @Route("/api", name="api_index")
     **/

    public function api()
    { // nouvelle route
        $data = [
            'test' => 'hello world',
            "table" => ['C’est pas faux', "Une fois, à une exécution, je m'approche d'une fille. Pour rigoler, je lui fais : « Vous êtes de la famille du pendu ? »... C'était sa sœur. Bonjour l'approche !", "C’est pour ça : j’lis jamais rien. C’est un vrai piège à cons c’t’histoire-là. En plus j’sais pas lire."]
        ];

        return new JsonResponse($data);
    }

}