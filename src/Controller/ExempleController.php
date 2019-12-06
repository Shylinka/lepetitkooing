<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse; // on ajoute la classe de réponse json
use Psr\Log\LoggerInterface; // Important de récupérer la classe pour l'utiliser dans nos fichiers
use Twig\Environment;
//use App\Service\RandomHelper; // Ne pas oublier de use le service
use App\Security\LoginFromAuthenticator;

class ExempleController extends AbstractController
{
    /**
     * @Route("/", name="homepage") // ajout d'une propriété name
     **/
    public function index(/*LoggerInterface $logger*/) {



        return $this->render('index.html.twig', [
            'title' => 'Bienvenue !'

        ]);
    }



    /**
     * @Route("/monprofil", name="profilpage")
     **/
    public function profilpage()
    {
        return $this->render('profil.html.twig', [
            'title' => 'Mon profil',
            'change' => '',
            'changeUsername' => '',
            'username' => $this->getUser()->getUsername()
        ]);
    }


    /**
     * @Route("/registration", name="registrationpage")
     **/
    public function registrationpage()
    {
        return $this->render('register.html.twig', [
            'title' => 'Inscription'
        ]);
    }


}